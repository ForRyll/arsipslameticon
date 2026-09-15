<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJobApplicationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'job_opening_id' => 'required|exists:job_openings,id',
            'name'           => 'required|string|max:255',
            'email'          => 'required|email|max:255',
            'phone'          => 'nullable|string|max:20',
            'cover_letter'   => 'nullable|string',
            'cv'             => 'required|file|mimes:pdf,doc,docx|max:5120', // Maks 5MB
        ];
    }
}