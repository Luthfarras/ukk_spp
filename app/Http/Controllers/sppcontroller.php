<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Spp;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class sppcontroller extends Controller
{
  public function __construct(){
    $this->middleware('cek_login');
  }

  public function spp()
  {

      $halaman = 'spp';
      $spp_list = Spp::all();
      return view('dataspp.index', compact('halaman', 'spp_list'));
  }
  public function create()
  {
      $halaman = 'spp';
      return view('dataspp.create', compact('halaman'));
  }
  public function store(Request $request){
    $this->validate($request,
      [
        'tahun'=>'required|unique:spp',
        'nominal'=>'required'
      ]
    );
      Spp::create([
          'tahun'=>$request->tahun,
          'nominal'=>$request->nominal
      ]);
      return redirect('spp')->with('message', 'Tambah Data Berhasil!');
  }
  public function show($id)
  {
      $halaman = 'spp';
      $spp = Spp::findOrFail($id);
      return view('dataspp.show', compact('halaman', 'spp'));
  }
  public function edit($id)
  {
      $halaman = 'spp';
      $spp = Spp::findOrFail($id);
      return view('dataspp.edit', compact('halaman', 'spp'));
  }
  public function update($id, Request $request)
  {
    $this->validate($request,
      [
        'tahun' => 'required|unique:spp',
        'nominal' => 'required'
      ]);
      $spp = Spp::findOrFail($id);
      $spp->tahun = $request->tahun;
      $spp->nominal = $request->nominal;
      $spp->save();
      return redirect('spp');
  }

  public function delete($id)
  {
      $spp = Spp::findOrFail($id);
      $spp->delete();
      return redirect('spp');
  }
}
