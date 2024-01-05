<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRequest extends FormRequest
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
        $rules = [
            'store_name' => [
                'required',
                'min:3',
                'max:255',
            ],
            'postal_code' => [
                'required',
                'digits:8',
                'unique:stores,postal_code'
            ],
            'status' => [
                'required',
                'in:I,A'
            ]
        ];

        if ($this->method() === 'PUT' or $this->method() === 'PATCH')
        {
            $rules['postal_code'] = [
                'required',
                'digits:8',
                Rule::unique('stores', 'postal_code')->ignore($this->store ?? $this->id)
            ];
        }

        return $rules;
    }
}
