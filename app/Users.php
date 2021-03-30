<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
  protected $table = "users";
  protected $fillable = [
    'username',
    'password',
    'nama_petugas',
    'level'
  ];

  public $timestamps = false;

  public function pembayaran(){
      return $this->hasMany('App/Pembayaran', 'id_petugas');
  }
}
