<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class petugascontroller extends Controller
{
  public function __construct(){
    $this->middleware('cek_login');
  }

    public function petugas()
    {

        $halaman = 'petugas';
        $petugas_list = Users::all();
        return view('datapetugas.index', compact('halaman', 'petugas_list'));
    }
    public function create()
    {
        $halaman = 'petugas';
        return view('datapetugas.create', compact('halaman'));
    }
    public function store(Request $request)
    {
        Users::create([
            'nama_petugas'=>$request->nama_petugas,
            'username'=>$request->username,
            'password'=>md5($request->password),
            'level'=>$request->level
        ]);
        return redirect('petugas');
    }
    public function show($id)
    {
        $halaman = 'petugas';
        $petugas = Users::findOrFail($id);
        return view('datapetugas.show', compact('halaman', 'petugas'));
    }
    public function edit($id)
    {
        $halaman = 'petugas';
        $petugas = Users::findOrFail($id);
        return view('datapetugas.edit', compact('halaman', 'petugas'));
    }
    public function update($id, Request $request)
    {

        // $this->validate($request,[
        //     'nisn' => 'required|string|size:4|unique:siswa, nisn'
        // ])

        $halaman = 'petugas';
        $petugas = Users::findOrFail($id);
        $petugas->nama_petugas = $request->nama_petugas;
        $petugas->username = $request->username;
        $petugas->password = md5($request->password);
        $petugas->level = $request->level;
        $petugas->save();
        return redirect('petugas');
    }
    public function delete($id)
    {
        $petugas = Users::findOrFail($id);
        $petugas->delete();
        return redirect('petugas');
    }
}
