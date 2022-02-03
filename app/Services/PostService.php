<?php

namespace App\Services;

use App\Models\Post;
use App\Repositories\PostRepository;
use Illuminate\Container\Container as Application;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Prettus\Repository\Eloquent\BaseRepository;

class PostService
{
    protected $repository;

    public function __construct(PostRepository $repository)
    {
        $this->repository = $repository;
    }

    public function store(array $input, UploadedFile $photo)
    {
        DB::beginTransaction();
        try {
            $url = $photo->store('public/images');
            $input["image"] = Storage::url($url);
            $post = $this->repository->create($input);
            $repsonse = ['success' => true, 'message' => 'Sucesso ao grava o post', 'data' => $post];
        } catch (\Throwable $th) {
            DB::rollBack();
            $repsonse = ['success' => false, 'message' => 'Erro ao gravar o post'];
        }
        DB::commit();
        return response($repsonse);
    }
}
