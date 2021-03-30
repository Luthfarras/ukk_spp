<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
  protected $table = "pembayaran";

  protected $fillable = [
      'id_petugas',
      'id_siswa',
      'spp_bulan',
      'tgl_bayar',
      'jumlah_bayar',
      'tunggakan'
  ];



  public function users(){
      return $this->belongsTo('App\Users', 'id_petugas');
  }

  public function siswa(){
      return $this->belongsTo('App\Siswa', 'id_siswa');
  }
}
