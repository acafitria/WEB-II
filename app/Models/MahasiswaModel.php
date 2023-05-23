<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $allowedFields = [
        'namaLengkap',
        'foto1',
        'nim',
        'prodi',
        'hobi',
        'skill'
    ];

    protected $namaLengkap = "Annisa Fitria";
    protected $foto1 = "aca.jpeg";
    protected $nim = "2110817120004";
    protected $prodi = "Informatika";
    protected $hobi = "Nonton Film";
    protected $skill = "Desain Grafis";

    public function getNama()
    {
        return $this->namaLengkap;
    }

    public function getFoto1()
    {
        return $this->foto1;
    }

    public function getNim()
    {
        return $this->nim;
    }

    public function getProdi()
    {
        return $this->prodi;
    }

    public function getHobi()
    {
        return $this->hobi;
    }

    public function getSkill()
    {
        return $this->skill;
    }
}
