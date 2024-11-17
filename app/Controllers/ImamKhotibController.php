<?php

namespace App\Controllers;

use App\Models\ImamKhotibModel;

class ImamKhotibController extends BaseController
{
    protected $imamKhotibModel;

    public function __construct()
    {
        $this->imamKhotibModel = new ImamKhotibModel();
    }

    // Tampilkan semua data imam/khotib
    public function index()
    {
        $data['imam_khotib'] = $this->imamKhotibModel->findAll();
        return view('imam_khotib/index', $data);
    }

    // Form untuk menambahkan data imam/khotib
    public function create()
    {
        return view('imam_khotib/create');
    }

    // Simpan data imam/khotib baru
    public function store()
    {
        $this->imamKhotibModel->save([
            'nama' => $this->request->getPost('nama'),
            'peran' => $this->request->getPost('peran'),
            'kontak' => $this->request->getPost('kontak'),
            'masjid' => $this->request->getPost('masjid'),
        ]);

        return redirect()->to('/imam-khotib');
    }

    // Form untuk mengedit data imam/khotib
    public function edit($id)
    {
        $data['imam_khotib'] = $this->imamKhotibModel->find($id);
        return view('imam_khotib/edit', $data);
    }

    // Update data imam/khotib
    public function update($id)
    {
        $this->imamKhotibModel->update($id, [
            'nama' => $this->request->getPost('nama'),
            'peran' => $this->request->getPost('peran'),
            'kontak' => $this->request->getPost('kontak'),
        ]);

        return redirect()->to('/imam-khotib');
    }

    // Hapus data imam/khotib
    public function delete($id)
    {
        $this->imamKhotibModel->delete($id);
        return redirect()->to('/imam-khotib');
    }
}
