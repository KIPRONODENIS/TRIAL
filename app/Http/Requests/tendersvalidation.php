<?php

namespace trial\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class tendersvalidation extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
             'name'=>'required|max:20',
     'email'=>'required|max:35',
     'PhoneNo'=>'required|max:10|min:10',
     
        ];
    }

     public function messages() {

    return ['name.required'=>'Enter your name',


    'email.required'=>'Enter your email',
    'name.max'=>'Name should be less than 20 characters',
     'email.max'=>'email should be less than 35 characters',
     'PhoneNo'=>'Enter your phone number',
     'PhoneNo.max'=>'invalid phone number',
     'PhoneNo.min'=>'invalid phone number'
   

    ];
 }
}
