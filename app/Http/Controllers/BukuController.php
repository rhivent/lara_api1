<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;

class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::all();
        return response()->json([
          'pesan' => 'berhasil',
          'buku' => $buku
        ],200);
    }

    public function search($pengarang)
    {
        $buku = Buku::where('pengarang','like',"%{$pengarang}%")->get();
        return response()->json([
          'buku' => $buku
        ]);
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
