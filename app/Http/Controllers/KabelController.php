<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class KabelController extends Controller
{
    public function index()
    {
        $kabel = DB::table('kabel')->orderBy('KodeKabel')->get();
        return view('kabel.index', compact('kabel'));
    }

    public function create()
    {
        return view('kabel.create');
    }

    public function store(Request $request)
    {
        $request->validate([

            'merkkabel' => 'required|string|max:20',
            'stockkabel' => 'required|integer|min:0',
            'tersedia' => 'required|boolean',
        ]);

        DB::table('kabel')->insert([

            'MerkKabel' => $request->merkkabel,
            'StockKabel' => $request->stockkabel,
            'Tersedia' => $request->tersedia,
        ]);

        return redirect()->route('kabel.index')->with('success', 'Data kabel berhasil ditambahkan.');
    }

    public function edit($kodeKabel)
    {
        $kabel = DB::table('kabel')->where('KodeKabel', $kodeKabel)->first();

        if (!$kabel) {
            abort(404);
        }

        return view('kabel.edit', compact('kabel'));
    }

    public function update(Request $request, $kodeKabel)
    {
        $request->validate([
            'merkkabel' => 'required|string|max:20',
            'stockkabel' => 'required|integer|min:0',
            'tersedia' => 'required|boolean',
        ]);

        DB::table('kabel')
            ->where('KodeKabel', $kodeKabel)
            ->update([

                'MerkKabel' => $request->merkkabel,
                'StockKabel' => $request->stockkabel,
                'Tersedia' => $request->tersedia,
            ]);

        return redirect()->route('kabel.index')->with('success', 'Data kabel berhasil diubah.');
    }

    public function destroy($kodeKabel)
    {
        DB::table('kabel')->where('KodeKabel', $kodeKabel)->delete();

        return redirect()->route('kabel.index')->with('success', 'Data kabel berhasil dihapus.');
    }
}
