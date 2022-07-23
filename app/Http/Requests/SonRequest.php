<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SonRequest extends FormRequest
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
            'Name' => ['required','max:100','string'],
            'Age' => ['required','max:100','integer'],
            'Email' => ['required','max:100','email'],
        ];
    }
}
