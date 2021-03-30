<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Siswa;
use Auth;
use App\Pembayaran;

class siswalogin extends Controller
{
  public function siswaLogin(){

      if(session('nama') != null) :
        return redirect('siswa.index');
      endif;

      return view('masuk');
  }
  public function mmasuk(){
    return view('masuk');

  }

   public function login(Request $req){

        $exists = Siswa::where('nisn', $req->nisn)->exists();

        if($exists) :
              $siswa = Siswa::where('nisn', $req->nisn)->get();

              foreach($siswa as $val) :
                  Session::put('id', $val->id);
                  $nama = $val->nama;
              endforeach;

              if(strtolower($nama) == strtolower($req->nama_siswa)) :

                    Session::put('nama', $nama);
                    Session::put('nisn', $req->nisn);

                    return redirect('dashsiswa');
              // else :
              //
              //        Alert::error('Gagal Login!', 'NISN dan nama siswa tidak sesuai');
              //       return back();
              //
              endif;

           // else :
           //    Alert::error('Gagal Login!', 'Data siswa dengan NISN ini tidak ditemukan');
           //    return back();
           endif;
   }

   public function logout(){

       Session::flush();
       return redirect('loginsiswa');

   }

   public function index(){

     if(session('nama') == null) :
        return redirect('login/siswa');
    endif;

    $data = [
        'pembayaran' => Pembayaran::where('id_siswa', Session::get('id'))->paginate(10)
    ];

     return view('siswa.index', $data);
   }
}
