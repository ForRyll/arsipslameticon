<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNewsRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'category_id' => 'sometimes|uuid|exists:news_categories,id',
            'title'       => 'sometimes|string|max:255',
            'img'         => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'content'     => 'sometimes|string',
        ];
    }
}