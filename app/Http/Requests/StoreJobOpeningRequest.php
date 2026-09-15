<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreJobOpeningRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $isUpdate = $this->isMethod('put') || $this->has('_method');

        return [
            'title'        => ($isUpdate ? 'sometimes|' : '') . 'required|string|max:255',
            'description'  => 'nullable|string',
            'status'       => ['nullable', Rule::in(['draft', 'open', 'closed', 'archived'])],
            'location'     => 'nullable|string|max:255',
            'job_type'     => 'nullable|string|max:255',
            'department'   => 'nullable|string|max:255',
            'requirements' => 'nullable|string',
        ];
    }
}