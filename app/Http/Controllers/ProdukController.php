<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::all(); // Ambil semua data produk
        return view('produk.index', compact('produks'));
    }
}
