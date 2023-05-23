<?php

namespace App\Controllers;

class Profile extends BaseController
{
    public function index()
    {
        $data = [
            'namaLengkap' => 'Annisa Fitria', // Ganti dengan nama lengkap praktikan
            'nim' => '2110817120004', // Ganti dengan NIM praktikan
            'prodi' => 'Teknologi Informasi', // Ganti dengan asal prodi praktikan
            'hobi' => 'Nonton Film', // Ganti dengan hobi praktikan
            'skill' => 'Desain graphis', // Ganti dengan skill praktikan
            'informasiLainnya' => 'Informasi Lainnya' // Ganti dengan informasi tambahan yang diinginkan
        ];

        return view('profile', $data);
    }

    
}
