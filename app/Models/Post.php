<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'image', 'description'];
    protected $casts = ['user_id' => 'int', 'image' => 'string', 'description' => 'string'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
