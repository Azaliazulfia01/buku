<?php

namespace App\Controllers;

use App\Models\PenulisModel;
use CodeIgniter\Controller;
use PSpell\Config;

class Penulis extends BaseController
{
    protected $penulisModel;
    
    public function __construct()
    {
        $this->penulisModel = new PenulisModel();
    }

    public function index()
    {
        $pageSekarang = $this->request->getVar('page_penulis') ? $this->request->getVar('page_penulis') : 1;
        // keyword pencarian
        $kataKunci = $this->request->getVar('keyword');
    if ($kataKunci) {
        $penulis = $this->penulisModel->search($kataKunci);
    } else {
        $penulis = $this->penulisModel;
    }
        $data = [
            'title' => 'Daftar Penulis',
            //'penulis' => $this->penulisModel->findAll()
            'penulis' => $this->penulisModel->paginate(10, 'penulis'),
            'pager' => $this->penulisModel->pager,
            'pageSekarang' => $pageSekarang = $this->penulisModel->pager->getCurrentPage('penulis_pager'),
        ];

        return view('penulis/index', $data);
    }
}
