<?php

namespace trial\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class contactusValidation extends FormRequest
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
       'name'=>'required|max:40',
     'phone'=>'required|max:13',
     'subject'=>'required|max:15',
     'textarea'=>'required'

        ];
    }

 public function messages() {

    return ['name.required'=>'please enter name',


    'email.required'=>'Enter your email',
    'name.max'=>'Name should be less than 20 characters',
     'email.max'=>'email should be less than 35 characters',
     'subject.max'=>'subject should be less than 15 characters',
    'subject.required'=>'Enter type your title',
    'textarea.required'=>'Please type your message'


    ];
 }

}
