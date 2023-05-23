<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'nama' => 'Annisa Fitria', // Ganti dengan nama praktikan dari Model
            'nim' => '2110817120004' // Ganti dengan NIM praktikan dari Model
        ];

        return view('home', $data);
    }
}
