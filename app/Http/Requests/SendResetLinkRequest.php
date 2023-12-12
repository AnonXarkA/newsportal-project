<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendResetLinkRequest extends FormRequest
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
<<<<<<< HEAD
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
=======
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
>>>>>>> origin/feature-branch
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'email', 'exists:admins,email']
        ];
    }
}
