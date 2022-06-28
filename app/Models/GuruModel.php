<?php

namespace App\Models;

use CodeIgniter\Model;

class GuruModel extends Model
{
    protected $table = 'gurusmk';
    protected $useTimestamps = true;
    protected $primarykey = 'id';
    protected $allowedFields = ['id', 'nik', 'nama_guru', 'alamat', 'tgl_lahir', 'foto'];

    public function getGuru($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
