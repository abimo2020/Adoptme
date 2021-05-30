<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminHewan extends FormRequest
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
                'jenis_hewan' => 'required',
                'usia' => 'required|integer',
                'jenis_kelamin' =>'required',
                'ras' => 'required',
                'no_hp' => 'required',
                'alamat' => 'required',
                'deskripsi' => 'required',
                'foto' => 'required|file|mimes:png,jpg,jpeg|image|max:2000'
        ];
    }
}
