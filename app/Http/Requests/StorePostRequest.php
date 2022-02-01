<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return ['photo' => 'required|mimes:jpg,jpeg,img', 'description' => 'required|max:255'];
    }

    public function messages()
    {
        return [
            'photo.mimes' => 'Por gentileza, salve somente imagens',
            'photo.required' => 'Por gentileza, insira a imagem',
            'description.required' => 'Por gentileza, insira a descrição',
        ];
    }
}
