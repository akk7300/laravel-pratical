<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddFieldRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'form_uuid' => 'required|uuid',
            'name' => 'required|min:3|max:255',
            'value' => 'array',
            'type' => 'required|string|in:input,select,radio,textarea,checkbox'
        ];
    }

    public function messages()
    {
        return [
            'type.in' => 'The type field should be only input,select,radio,textarea,checkbox',
        ];
    }
}
