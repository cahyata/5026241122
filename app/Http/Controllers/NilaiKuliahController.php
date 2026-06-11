<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class NilaiKuliahController extends Controller
{
    public function index()
    {
        $nilaikuliah = DB::table('nilaikuliah')->orderBy('ID')->get();
        return view('nilaikuliah.index', compact('nilaikuliah'));


    }

    public function create()
    {
        return view('nilaikuliah.create');
    }

    public function store(Request $request)
    {
        $request->validate([

            'nrp' => 'required|max:6',
            'nilaiangka' => 'required|integer|',
            'sks' => 'required|integer',
        ]);

        DB::table('nilaikuliah')->insert([


            'NRP' => $request->nrp,
            'NilaiAngka' => $request->nilaiangka,
            'SKS' => $request->sks,
        ]);

        return redirect()->route('nilaikuliah.index')->with('success', 'Data nilai kuliah berhasil ditambahkan.');
    }





}
