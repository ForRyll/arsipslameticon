<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $isUpdate = $this->isMethod('put') || $this->has('_method');

        return [
            'category_id'   => ($isUpdate ? 'sometimes|' : '') . 'required|exists:product_categories,id',
            'client_id'     => 'nullable|exists:clients,id',
            'name'          => ($isUpdate ? 'sometimes|' : '') . 'required|string|max:255',
            'display_order' => 'nullable|integer',
            'description'   => 'nullable|string',
            'link_url'      => 'nullable|url|max:255',
            'image'         => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:2048',
        ];
    }
}