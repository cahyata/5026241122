<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class KeranjangController extends Controller
{
    public function index()
    {
        $kabel = DB::table('keranjangbelanja')->orderBy('ID')->get();
        return view('keranjangbelanja.index', compact('kabel'));


    }

    public function create()
    {
        return view('keranjangbelanja.create');
    }

    public function store(Request $request)
    {
        $request->validate([

            'KodeBarang' => 'required|integer|max:0',
            'Jumlah' => 'required|integer|min:0',
            'Harga' => 'required|integer|min:0',
        ]);

        DB::table('keranjangbelanja')->insert([

            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga,
        ]);

        return redirect()->route('keranjangbelanja.index')->with('success', 'Data keranjang berhasil ditambahkan.');
    }



    public function update(Request $request, $kodeKabel)
    {
        $request->validate([
            'KodeBarang' => 'required|integer|max:0',
            'Jumlah' => 'required|integer|min:0',
            'Harga' => 'required|integer|min:0',
        ]);

        DB::table('keranjangbelanja')
            ->where('ID', $kodeKabel)
            ->update([

                'KodeBarang' => $request->KodeBarang,
                'Jumlah' => $request->Jumlah,
                'Harga' => $request->Harga,
            ]);

        return redirect()->route('keranjangbelanja.index')->with('success', 'Data keranjang berhasil diubah.');
    }

    public function destroy($kodeBarang)
    {
        DB::table('keranjangbelanja')->where('ID', $kodeBarang)->delete();

        return redirect()->route('keranjangbelanja.index')->with('success', 'Data keranjang berhasil dihapus.');
    }


}
