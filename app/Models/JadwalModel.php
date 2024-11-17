<?php

namespace App\Models;

use CodeIgniter\Model;

class JadwalModel extends Model
{
    protected $table = 'jadwal';
    protected $primaryKey = 'id';
    protected $allowedFields = ['tanggal', 'imam_id', 'khotib_id'];
}
