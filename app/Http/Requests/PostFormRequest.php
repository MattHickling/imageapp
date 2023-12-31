<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
       $rules = [
        'title' => 'required|maz:255|unique:posts,title,' . $this->id,
        'excerpt' => 'required',
        'body' => 'required',
        'image_path' => ['mimes:jpg,png,jpeg', 'max:5048'],
        'min_to_read' => 'min:0|max:60',
       ];
       if (in_array($this->method(), ['POST'])) {
            $rules['iamge'] = ['required', 'mimes:jpg,png,jpeg', 'max:5048'];
       }

       return $rules;
    }
}
