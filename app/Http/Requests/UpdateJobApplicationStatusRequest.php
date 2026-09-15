<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateJobApplicationStatusRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'status' => [
                'required',
                Rule::in([
                    'applied',
                    'screened',
                    'interview_scheduled',
                    'job_offer_extended',
                    'accepted',
                    'rejected',
                ]),
            ],
        ];
    }
}