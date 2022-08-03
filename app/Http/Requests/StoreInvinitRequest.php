<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInvinitRequest extends FormRequest
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

        public function rules()
    {
        return [
            'name'=>'required',
            'email'=>'required|unique:invinits',
          
        ];
    }

    public function messages():array
    {
     
        return [
            'name.required'=>'The name is required',
            'email.required'=>'The name is required',
            'email.unique'=>'The Email Invinit',
        ];
    }

}

