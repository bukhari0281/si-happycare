<?php

namespace App\Http\Controllers;

use App\Http\Requests\TouristDestinationRequest;
use App\Models\Bahasa;
use App\Models\tourist_destination;
use App\Models\WisataKategori;
use Hamcrest\Core\AllOf;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TouristController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = tourist_destination::with('bahasa', 'wisataKategori')->latest()->get();

        return view('admin.touristDestination.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bahasas = Bahasa::orderBy('name', 'asc')->get()->pluck('name', 'id');
        $wisataKategori = WisataKategori::get();

        return view('admin.touristDestination.create', compact('bahasas', 'wisataKategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TouristDestinationRequest $request)
    {
         // Membuat destinasi baru
        $destinasi = new tourist_destination;
        $destinasi->name = $request->name;
        $destinasi->description = $request->description;
        $destinasi->wisata_kategori_id = $request->wisata_kategori_id;
        $destinasi->save();

        // Menyinkronkan bahasa_id dengan tabel pivot
        $destinasi->bahasa()->sync($request->bahasa_id);

        return redirect(url('admin/tourist-destination'))->with('success', 'Added!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $items = tourist_destination::with('bahasa', 'wisataKategori', 'kontak')->find($id);
        return view(('admin.touristDestination.show'), compact('items'));
        // return dd($items->toArray());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $td = tourist_destination::find($id);
        $wisataKategori = WisataKategori::get();
        $bahasa = Bahasa::orderBy('name', 'asc')->get()->pluck('name', 'id');

        return view('admin.touristDestination.edit', compact('td', 'wisataKategori', 'bahasa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $destinasi = tourist_destination::findOrFail($id);
        $destinasi->name = $request->name;
        $destinasi->description = $request->description;
        $destinasi->wisata_kategori_id = $request->wisata_kategori_id;
        $destinasi->update();
        $destinasi->bahasa()->sync($request->bahasa_id);

        return redirect(url('admin/tourist-destination'))->with('success-update', 'Berhasil update data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hd = tourist_destination::findOrFail($id);
        $hd->bahasa()->detach();
        $hd->delete();

        return back()->with('success-delete', 'Berhasil menghapus data');
    }
}
