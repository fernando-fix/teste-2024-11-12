<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FaqRequest extends FormRequest
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
        if ($this->routeIs('admin.faqs.store')) {
            return [
                'question'  => ['required', 'string', 'min:10', 'unique:faqs'],
                'answer'    => ['required', 'string', 'min:10'],
            ];
        }

        if ($this->routeIs('admin.faqs.update')) {
            $faq = $this->route('faq');
            return [
                'question'  => ['required', 'string', 'min:10', 'unique:faqs,question,' . $faq->id],
                'answer'    => ['required', 'string', 'min:10'],
            ];
        }
    }

    public function messages()
    {
        return [
            'question.required' => 'O campo pergunta é obrigatório',
            'question.min' => 'O campo pergunta deve ter pelo menos :min caracteres',
            'question.unique' => 'O campo pergunta deve ser unico',
            'answer.required' => 'O campo resposta é obrigatório',
            'answer.min' => 'O campo resposta deve ter pelo menos :min caracteres',
        ];
    }
}
