<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $rules = [
            'name' => 'required|min:3|max:255|unique:events', 
            'description' => 'required|min:3|max:10000', 
            'date' => 'required', 
            'city' => 'required|min:3|max:255',
            'address' => 'required|min:3|max:255',
        ];

        if($this->method() === 'PUT' || $this->method() == 'PATCH'){
            $rules['name'] = [
                'required',
                'min:3',
                'max:255',
                Rule::unique('events')->ignore($this->event ?? $this->id),
            ];
        }

        return $rules;
    }
}
