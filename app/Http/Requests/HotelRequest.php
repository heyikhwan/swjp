<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HotelRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:3'],
            'bintang' => ['required', 'numeric'],
            'provinsi' => ['sometimes', 'required'],
            'kabupaten' => ['sometimes', 'required'],
            'kecamatan' => ['sometimes', 'required'],
            'desa' => ['sometimes', 'required'],
        ];
    }
}
