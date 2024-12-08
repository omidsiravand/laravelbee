<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class productrequest extends FormRequest
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
        'title'=>'required',
        'image'=>'required',
        'category_id'=>'required',
        ];
    }
    public function messages(){
        return[
            'title.required'=>'فیلد الزامی میباشد',
            'image.required'=>'فیلد الزامی میباشد',
            'category_id.required'=>'فیلد الزامی میباشد',
        ];
    }
}
