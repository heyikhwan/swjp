<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'min:5', 'max:255', Rule::unique('users', 'username')->ignore($this->user)],
            'nik' => ['sometimes', 'required', 'numeric'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users', 'email')->ignore($this->user)],
            'password' => ['sometimes', 'string', 'min:6', 'nullable'],
            'avatar' => ['image' ,'mimes:jpg,jpeg,png','max:1024', 'nullable'],
            'tempat_lahir' => ['string', 'nullable'],
            'tanggal_lahir' => ['date', 'nullable'],
            'no_passport' => ['string', 'nullable'],
        ];
    }
}