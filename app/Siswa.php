<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
  protected $table = "siswa";
  protected $fillable = [
    'id',
    'nisn',
    'nis',
    'nama',
    'id_kelas',
    'alamat',
    'no_telp',
    'foto',
    'id_spp',
    'tunggakan'
  ];
  protected $primaryKey = "id";


  public function pembayaran(){
      return $this->hasMany('App\Pembayaran','id_siswa');
  }

  public function kelas(){
      return $this->belongsTo('App\Kelas','id_kelas');
  }

  public function spp(){
      return $this->belongsTo('App\Spp','id_spp');
  }
}
