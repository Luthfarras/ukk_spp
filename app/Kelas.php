<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
  protected $table = 'kelas';
  protected $primaryKey = 'id';
  protected $fillable = [
      'nama_kelas', 'kompetensi_keahlian'
  ];

  public function siswa(){
      return $this->hasMany('App\Siswa','id_kelas');
  }
}
