<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class FormulirController extends Controller
{
    public function validateBiodata($data)
    {
        $validator = Validator::make($data, [
            'agama' => 'required|string|max:50',
            'alamat_rumah' => 'required|string|max:255',
            'anak_ke' => 'required|integer|min:1',
            'cita_cita' => 'required|string|max:100',
            'hobi' => 'required|string|max:100',
            'jumlah_saudara' => 'required|integer|min:0',
            'nama' => 'required|string|max:255',
            'nik' => 'required|string',
            'nisn' => 'required|string|max:20|unique:siswas,nisn',
            'no_kk' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required|string|max:100',
        ]);

        if ($validator->fails()) {
            throw ValidationException::withMessages($validator->errors()->toArray());
        }
        return $validator->validated();
    }
    public function simpan(Request $request)
    {
        if ($biodata = $request->input('biodata')) {
            $data = $this->validateBiodata($biodata);
            return $data;
        }
    }
}
