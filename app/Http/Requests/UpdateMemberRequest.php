<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateMemberRequest extends Request
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
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'email' => 'required|email',
            'maritalStatus' => 'required|string',
            'address' => 'required|string',
        ];
    }
}
