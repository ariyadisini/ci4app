<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function tentang()
    {
        echo view("Tentang Kami");
    }

    public function keanggotaan()
    {
        echo view("Keanggotaan");
    }

    public function pelatihan()
    {
        echo view("Pelatihan");
    }
    public function sertifikasi()
    {
        echo view("Sertifikasi");
    }
    public function peraturan()
    {
        echo view("Peraturan, Publikasi, Standar Profesi");
    }
    public function international()
    {
        echo view("International Corner");
    }
}
