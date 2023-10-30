<?php
namespace App\Models;

use CodeIgniter\Model;


class MahasiswaModel extends Model
{
    protected $table = 'mahasiswa';
    protected $protectFields = false;
    
    public function getAllMahasiswa()
  {
    return $this->findAll();
  }
}
