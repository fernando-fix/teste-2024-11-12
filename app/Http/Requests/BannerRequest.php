<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
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
        if ($this->routeIs('admin.banners.store')) {
            return [
                'title' => ['required', 'string', 'min:5', 'max:255', 'unique:banners'],
                'file' => ['required', 'image', 'mimes:jpeg,png,jpg'],
            ];
        }

        if ($this->routeIs('admin.banners.update')) {
            $banner = $this->route('banner');
            return [
                'title' => ['required', 'string', 'min:5', 'max:255', 'unique:banners,title,' . $banner->id],
                'file' => ['nullable', 'image', 'mimes:jpeg,png,jpg'],
                'order' => ['required', 'numeric'],
            ];
        }
    }

    public function messages()
    {
        return [
            'title.min' => 'O campo titulo deve ter pelo menos :min caracteres.',
            'title.required' => 'O campo titulo é obrigatório.',
            'title.unique' => 'O campo titulo é já existente.',
            'file.required' => 'O campo imagem é obrigatório.',
        ];
    }
}
