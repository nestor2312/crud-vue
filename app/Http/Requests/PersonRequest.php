<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonRequest extends FormRequest
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
            'Address' => ['required','max:100','string'],
            'city_id' => ['required','max:100','string'],
            'Phone' => ['required','min:10','integer'],
            'Date_of_birth' => ['required','max:100','date'],
        ];
    }
}
