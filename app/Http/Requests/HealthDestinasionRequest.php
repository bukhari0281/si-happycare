<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HealthDestinasionRequest extends FormRequest
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
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|mimes:png,jpg,jpeg,,gif,webp',
            'faskes_kategori_id' => 'required',
            'bahasa_id' => 'required|array|min:1',
        ];
    }
}
