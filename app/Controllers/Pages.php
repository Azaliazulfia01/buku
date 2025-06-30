<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
    $data = [
        'title' => 'Beranda | Halaman Senja',
    ];
    echo view('pages/home', $data);
    }

    public function about()
    {
    $data = [
        'title' => 'Tentang Kami | Halaman Senja',
    ];
    echo view('pages/about', $data);
    }


    public function contact()
    {
        $data = [
            'title' => 'Kontak Kami | BukuKita',
            'kontak' => [
                'email' => 'bukukita.ac.id',
                'whatsapp' => '+62 87723710329',
                'instagram' => '@bukita.id'
            ]
        ];
        echo view('pages/contact', $data);
    }
}
