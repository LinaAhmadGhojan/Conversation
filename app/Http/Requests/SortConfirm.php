<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SortConfirm extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'email'=>'required|unique:seats',
            'job'=>'required',
            'phone'=>'required',
            'question'=>'required',
            'destination'=>'required',
        ];
    }

    public function messages():array
    {
     
        return [
            'name.required'=>'The name is required',
            'email.required'=>'The name is required',
            'email.unique'=>'The Seat has been Register ',
            'job.required'=>'The job is required',
            'phone.required'=>'The phone is required',
            'question.required'=>'The question is required',
            'destination.required'=>'The destination is required',
        ];
    }
}
