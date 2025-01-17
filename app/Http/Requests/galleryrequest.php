<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class galleryrequest extends FormRequest
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
            'caption'=>'required',
            'image'=>'required',
        ];

    }
    public function messages()
    {
        return[
            'caption.required'=>'فیلد الزامی است',
            'image.required'=>'فیلد الزامی است',
        ];
    }
}
