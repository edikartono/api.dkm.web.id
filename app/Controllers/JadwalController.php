<?php

namespace App\Controllers;

use App\Models\JadwalModel;
use App\Models\ImamKhotibModel;

class JadwalController extends BaseController
{
    protected $jadwalModel;
    protected $imamKhotibModel;

    public function __construct()
    {
        $this->jadwalModel = new JadwalModel();
        $this->imamKhotibModel = new ImamKhotibModel();
    }

    public function index()
    {
        $data['jadwal'] = $this->jadwalModel->select('jadwal.*, imam.nama as imam_nama, khotib.nama as khotib_nama')
                        ->join('imam_khotib as imam', 'jadwal.imam_id = imam.id', 'left')
                        ->join('imam_khotib as khotib', 'jadwal.khotib_id = khotib.id', 'left')
                        ->findAll();
        return view('jadwal/index', $data);
    }

    public function create()
    {
        $data['imam_khotib'] = $this->imamKhotibModel->findAll();
        return view('jadwal/create', $data);
    }

    public function store()
    {
        $this->jadwalModel->save([
            'tanggal' => $this->request->getPost('tanggal'),
            'imam_id' => $this->request->getPost('imam_id'),
            'khotib_id' => $this->request->getPost('khotib_id'),
        ]);

        return redirect()->to('/jadwal');
    }
}
