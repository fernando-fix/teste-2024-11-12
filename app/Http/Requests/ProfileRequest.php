<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
        // dd($this->all());
        // if request has password or password confirmation
        if ($this->password || $this->password_confirmation) {
            return [
                'name' => ['required', 'string', 'min:5', 'max:255'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'password_confirmation' => ['required', 'string', 'min:8'],
            ];
        }
        // without password
        return [
            'name' => ['required', 'string', 'min:5', 'max:255'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo nome é obrigatório',
            'name.min' => 'O campo nome deve ter pelo menos :min caracteres',
            'password.required' => 'O campo senha é obrigatório',
            'password.min' => 'O campo senha deve ter pelo menos :min caracteres',
            'password.confirmed' => 'As senhas não conferem',
            'password_confirmation.required' => 'O campo confirmar senha é obrigatório',
        ];
    }
}
