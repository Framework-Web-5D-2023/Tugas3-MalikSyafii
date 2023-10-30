<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function about(): string
    {
        dd($this->mahasiswaModel->getAllMahasiswa());
        $mahasiswa = $this->mahasiswaModel->getAllMahasiswa();
        $data = [
            "title" => "Home",
            "mahasiswa" => $mahasiswa
        ];
        var_dump($data);
        return view('index', $data);
        // return view('index');
    }
}
