<?php

namespace App\Http\Controllers;

use App\Models\FaskesKategori;
use App\Models\WisataKategori;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index_jenis_wisata() {

        $wisataKategori = WisataKategori::get();

        return view('admin.kategori.indexW', compact('wisataKategori'));

    }

    public function index_jenis_faskes() {

        $faskesKategori = FaskesKategori::get();

        return view('admin.kategori.indexF', compact('faskesKategori'));

    }

}
