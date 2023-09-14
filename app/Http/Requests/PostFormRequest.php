<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
        $rules = [
            'title' => [
                'required',
                'unique:posts,title,' . $this->id,
                'max:255',
            ],
            'excerpt' => 'required',
            'body' => 'required|max:60',
            'image_path' => 'mimes:jpg,png,jpeg',
            'min_to_read' => 'numeric|min:0|max:60',
        ];

        if(in_array($this->method(), ['POST'])) {
            $rules['image_path'] = ['mimes:jpg,png,jpeg'];
        }
        return $rules;
    }
}
