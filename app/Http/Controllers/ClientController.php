<?php

namespace App\Http\Controllers;

use App\Models\HealthDestination;
use App\Models\tourist_destination;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function home()
    {
        return view('client.home.index' );
    }
    public function about()
    {
        return view('client.home.about_us');
    }
    public function contact()
    {
        return view('client.home.contact_us');
    }
    public function faskes() // FASKES
    {
        $latest_faskes = HealthDestination::with('faskesKategori', 'bahasa', 'Layanan', 'kontak', 'galeri')->latest()->paginate(9);
        return view('client.faskes.index', compact('latest_faskes'));
    }
    public function detail_faskes() // DETAIL FASKES
    {
        return view('client.faskes.show');
    }
    public function wisata() // WISATA
    {
        $latest_wisata = tourist_destination::with('bahasa', 'kontak', 'galeri')->latest()->paginate(9);
        return view('client.wisata.index', compact('latest_wisata'));
    }
    public function detail_wisata() // DETAIL WISATA
    {
        return view('client.wisata.show');
    }
}
