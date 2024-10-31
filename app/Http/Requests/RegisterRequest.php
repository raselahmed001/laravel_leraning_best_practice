<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|max:150',
            'email' => 'required|email',
            'password' => 'required|min:5|max:15',
            'phone_number' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Please enter your name.',
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Email must be a valid email address.',
            'password.required' => 'Please enter your password.',
            'password.min' => 'Password must be at least 5 characters long.',
            'phone_number.required' => 'Please enter your phone number.',
            
        ];
    }
}
