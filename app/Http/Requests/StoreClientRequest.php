<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $isUpdate = $this->isMethod('put') || $this->has('_method');

        return [
            'name'        => ($isUpdate ? 'sometimes|' : '') . 'required|string|max:255',
            'logo'        => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:2048',
            'website_url' => 'nullable|url|max:255',
            'display_url' => 'nullable|string|max:255',
        ];
    }
}