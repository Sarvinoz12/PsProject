<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePsixologRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        $imageRule = $this->isMethod('post') ? 'required|image|mimes:jpg,jpeg,png,gif|max:2048' : 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048';

        return [
            'image' => $imageRule,
            'question' => 'required|string|max:1000',

            'answer_a' => 'required|string|max:255',
            'description_a' => 'nullable|string|max:1000',

            'answer_b' => 'required|string|max:255',
            'description_b' => 'nullable|string|max:1000',

            'answer_c' => 'required|string|max:255',
            'description_c' => 'nullable|string|max:1000',

            'answer_d' => 'required|string|max:255',
            'description_d' => 'nullable|string|max:1000',
        ];

    }
}
