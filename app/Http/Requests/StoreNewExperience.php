<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewExperience extends FormRequest
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
            //
            'company_name' => 'required|min:3',
            'role' => 'required|min:3',
            'city' => 'required|min:3',
            'start_date' => 'required',
            'end_date' => 'required',
        ];
    }
}
