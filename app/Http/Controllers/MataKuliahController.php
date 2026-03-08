<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function index()
    {
        // Pastikan variabelnya bernama $data_mk agar sesuai dengan View Anda
        $data_mk = Matakuliah::all(); 
        return view('matakuliah.index', compact('data_mk'));
    }

    public function create()
    {
        return view('matakuliah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_mk' => 'required|unique:matakuliahs',
            'nama_mk' => 'required',
            'sks'     => 'required|numeric',
            'semester'=> 'required|numeric',
        ]);

        Matakuliah::create($request->all());
        return redirect()->route('matakuliah.index')->with('success', 'Mata Kuliah berhasil ditambah!');
    }
}