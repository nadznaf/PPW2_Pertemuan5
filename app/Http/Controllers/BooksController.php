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
}


