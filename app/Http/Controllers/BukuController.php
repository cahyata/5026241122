<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class BukuController extends Controller
{
    public function index()
    {
        $buku = DB::table('buku')->orderBy('id')->get();
        return view('buku.index', compact('buku'));
    }



    public function pinjam($id){
    {

        DB::table('buku')->where('id', $id)->update(['sedang_dipinjam' => 1]);

        return redirect()->route('buku.index')->with('success', 'Buku berhasil dipinjam.');
    }

    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'sedang_dipinjam' => 'required|boolean',
        ]);

        DB::table('buku')->where('id', $id)
            ->update([
                'sedang_dipinjam' => $request->sedang_dipinjam ? 0 : 1,
            ]);

        return redirect()->route('buku.index')->with('success', 'Data buku berhasil diubah.');
    }


}
