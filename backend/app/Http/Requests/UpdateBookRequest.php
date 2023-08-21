<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'isbn'       => 'required',
            'title' => 'required',
            'description'     => 'required',
            'category_id' => 'required',
            'author_id' => 'required',
            'publication_date' => 'required',
            'publisher_id' => 'required',
        ];
    }
}
