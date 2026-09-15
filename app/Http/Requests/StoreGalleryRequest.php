<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGalleryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $isUpdate = $this->isMethod('put') || $this->has('_method');

        return [
            'category_id'   => ($isUpdate ? 'sometimes|' : '') . 'required|exists:gallery_categories,id',
            'title'         => ($isUpdate ? 'sometimes|' : '') . 'required|string|max:255',
            'display_order' => 'nullable|integer',
            'caption'       => 'nullable|string',
            'image'         => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:4096',
        ];
    }
}