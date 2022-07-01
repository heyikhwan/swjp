<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class ReservasiRequest extends FormRequest
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
        $now = Carbon::now()->format('Y-m-d');
        return [
            'tgl_mulai' => ['required','date', 'after_or_equal:' . $now],
            'tgl_akhir' => ['required','date', 'after_or_equal:tgl_mulai'],
            'leader' => ['required'],
            'guide' => ['required'],
            'name' => ['required','string'],
            'jenis' => ['required','string'],
            'keberangkatan' => ['required','string'],
        ];
    }
}
