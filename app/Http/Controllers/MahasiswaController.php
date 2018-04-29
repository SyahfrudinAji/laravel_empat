<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
    	$mahasiswa = Mahasiswa::orderBy('created_at','desc')->get();
    	return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function insert(Request $request)
    {
        $request->validate([
            'first_name' => 'required|min:20',
            'last_name' => 'required',
            'email' => 'required',
            'password' => 'required|min:8',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required',
            'agama_id' => 'required'
        ]);


    	Mahasiswa::create($request->all());
    	return redirect('mahasiswa');
    }

    public function create()
    {
    	return view('mahasiswa.create');
    }

    public function edit($id)
    {
    	$mahasiswa = Mahasiswa::find($id);
    	return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'first_name' => 'required|min:20',
            'last_name' => 'required',
            'email' => 'required',
            'password' => 'required|min:8',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required',
            'agama_id' => 'required'
        ]);


    	$mahasiswa = Mahasiswa::find($request->id)->update($request->all());
    	return redirect('mahasiswa')->with('mahasiswa', 'Daa mahasiswa behasil diperbaharui');
    }

    public function hapus($id)
    {
    	Mahasiswa::find($id)->delete();
    	return redirect('mahasiswa')->with('mahasiswa','Data mahasiswa berhasil dihapus');
    }

    public function show($id)
    {
    	$mahasiswa = Mahasiswa::find($id);
    	return view('mahasiswa.show', compact('mahasiswa'));
    }
}
