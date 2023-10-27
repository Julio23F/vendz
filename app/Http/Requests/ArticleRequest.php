<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=>['required','min:4'],
            'price'=>['required','integer','min:0'],
            'city'=>['required','min:4'],
            'description'=>['required','min:8'],
            'image'=>['required','image'],
            'category_id'=>['required','exists:categories,id']
            // 'options'=>['array','required']
        ];
    }
}
