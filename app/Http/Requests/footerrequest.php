<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class footerrequest extends FormRequest
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
            'telgram'=>'required',
            'insta'=>'required',
            'watsap'=>'required',
            'youtuob'=>'required',
            'p'=>'required',
            'h1'=>'required',
        ];
    }
    public function messages()
    {
        return[
            'telgram.required'=>'فیلد الزامی است',
            'insta.required'=>'فیلد الزامی است',
            'watsap.required'=>'فیلد الزامی است',
            'youtuob.required'=>'فیلد الزامی است',
            'p.required'=>'فیلد الزامی است',
            'h1.required'=>'فیلد الزامی است',


        ];
    }
}
