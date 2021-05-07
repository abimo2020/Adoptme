<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TambahKucing extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'kode_hewan' => 'required|size:4|unique:catties',
            'jenis_hewan' => 'required',
            'usia' => 'required|integer',
            'ras' => 'required',
            'alamat' => 'required',
            'deskripsi' => '',
            'foto' => 'required|file|mimes:png,jpg,jpeg|image|max:2000'
        ];
    }
}
