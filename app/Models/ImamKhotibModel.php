<?php

namespace App\Models;

use CodeIgniter\Model;

class ImamKhotibModel extends Model
{
    protected $table = 'imam_khotib';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'peran', 'kontak'];
}
