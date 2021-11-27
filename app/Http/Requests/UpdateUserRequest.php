<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'address.city' => 'required|max:255',
            'address.zip_code' => 'required|max:6',
            'address.street' => 'required|max:255',
            'address.street_no' => 'required|max:5',
            'address.home_no' => 'required|max:5'
        ];
    }
}
