<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class menurequest extends FormRequest
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
            'title1'=>'required',
            'p'=>'required',
            'title'=>'required',
            'description'=>'required',
            'image'=>'required',
        ];
    }
    public function messages(){
       return[
        'title1.required'=>'لطفا فیلد مورد نظر را پر کنید',
        'p.required'=>'لطفا فیلد مورد نظر را پر کنید',
        'title.required'=>'لطفا فیلد مورد نظر را پر کنید',
        'description.required'=>'لطفا فیلد مورد نظر را پر کنید',
        'image.required'=>'لطفا فیلد مورد نظر را پر کنید',
       ];

    }
}
