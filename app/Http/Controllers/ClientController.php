<?php

namespace App\Http\Controllers;

use App\Models\HealthDestination;
use App\Models\tourist_destination;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function home()
    {
        $keyword = request()->keyword;

        if ($keyword) {
            $latest_faskes = HealthDestination::with('faskesKategori', 'bahasa', 'Layanan', 'kontak', 'galeri')
                ->where('name', 'like', '%' . $keyword . '%')
                ->latest()
                ->paginate(6);

            // Jika tidak ada hasil di latest_faskes, cari di latest_wisata
            if ($latest_faskes->isEmpty()) {
                $latest_wisata = tourist_destination::with('bahasa', 'kontak', 'galeri')
                                    ->where('name', 'like', '%' . $keyword . '%')
                                    ->latest()
                                    ->paginate(6);

                return view('client.wisata.index', compact('latest_wisata'));
            } else {
                return view('client.faskes.index', compact('latest_faskes'));
        }
        }

        // Jika tidak ada keyword, tampilkan halaman 'client.home.index'
        return view('client.home.index');
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
