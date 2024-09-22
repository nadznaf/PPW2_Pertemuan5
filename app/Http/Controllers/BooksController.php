<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index(){
        $data_book = Buku::all()->sortByDesc('id');
        $jumlah_buku = Buku::count();
        $total_harga = Buku::sum('harga');
        return view ('bookView', compact ('data_book', 'jumlah_buku', 'total_harga'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $buku = new Buku();
        $buku->judul = $request->input('judul');
        $buku->penulis = $request->input('penulis');
        $buku->harga = $request->input('harga');
        $buku->tgl_terbit = $request->input('tgl_terbit');
        $buku->save();
        return redirect()->route('buku.view')->with('success', 'Buku berhasil ditambahkan');
    }

    public function destroy($id){
        $buku = Buku::find($id);
        $buku->delete();

        return redirect('/buku');
    }

    public function edit($id){
        $buku = Buku::find($id);
        return view('edit', compact('buku'));
    }
    public function update(Request $request, $id){
        $buku = Buku::findOrFail($id);
        $buku->judul = $request->input('judul');
        $buku->penulis = $request->input('penulis');
        $buku->harga = $request->input('harga');
        $buku->tgl_terbit = $request->input('tgl_terbit');
        $buku->save();
        return redirect()->route('buku.view')->with('success', 'Buku berhasil diupdate');
    }
}


