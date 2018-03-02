<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class contactRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'comment'=> 'required|min:2',
            
     
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Please fill your name',
            'email.required' => 'Please fill your email',
            'comment.required' => 'Please fill your message',
          
        ];
    }
}
