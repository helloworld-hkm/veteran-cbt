<?php

namespace App\Models;

use CodeIgniter\Model;

class KelasModel extends Model
{
    protected $table = 'kelassmk';
    protected $useTimestamps = true;
    protected $primarykey = 'id';
    protected $allowedFields = ['kd_kelas', 'kelas'];

    public function getKelas($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
