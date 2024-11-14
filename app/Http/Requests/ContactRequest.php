<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
        if ($this->routeIs('admin.contacts.store')) {
            return [
                'name'          => ['required', 'string', 'min:5', 'max:255'],
                'email'         => ['required', 'email', 'min:5', 'max:255', 'unique:contacts'],
                'cellphone'     => ['required', 'string', 'min:8', 'max:255'],
                'observation'   => ['required', 'string', 'min:5'],
            ];
        }

        if ($this->routeIs('admin.contacts.update')) {
            $contact = $this->route('contact');
            return [
                'name'          => ['required', 'string', 'min:5', 'max:255'],
                'email'         => ['required', 'email', 'min:5', 'max:255', 'unique:contacts,email,' . $contact->id],
                'cellphone'     => ['required', 'string', 'min:8', 'max:255'],
                'observation'   => ['required', 'string', 'min:5'],
            ];
        }
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo nome é obrigatório',
            'name.min' => 'O campo nome deve ter pelo menos :min caracteres',
            'email.required' => 'O campo email é obrigatório',
            'email.min' => 'O campo email deve ter pelo menos :min caracteres',
            'email.email' => 'O campo email deve ser um email valido',
            'email.unique' => 'O campo email deve ser unico',
            'cellphone.required' => 'O campo celular é obrigatório',
            'cellphone.min' => 'O campo celular deve ter pelo menos :min caracteres',
            'observation.required' => 'O campo observação é obrigatório',
            'observation.min' => 'O campo observação deve ter pelo menos :min caracteres',
        ];
    }
}
