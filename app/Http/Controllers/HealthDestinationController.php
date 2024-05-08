<?php

namespace App\Http\Controllers;

use App\Http\Requests\HealthDestinasionRequest;
use App\Models\Bahasa;
use App\Models\FaskesKategori;
use App\Models\HealthDestination;
use App\Models\Language;
use App\Models\Service;
use Illuminate\Http\Request;

class HealthDestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = HealthDestination::with('faskesKategori', 'bahasa', 'Layanan', 'kontak')->latest()->get();

        return view('admin.healthDestination.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $faskesKategori = FaskesKategori::get();
        $bahasa = Bahasa::orderBy('name', 'asc')->get()->pluck('name', 'id');

        return view('admin.healthDestination.create', compact('faskesKategori', 'bahasa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HealthDestinasionRequest $request)
    {
        $destinasi = new HealthDestination;
        $destinasi->name = $request->name;
        $destinasi->description = $request->description;
        $destinasi->faskes_kategori_id = $request->faskes_kategori_id;
        $destinasi->save();

        // Menyinkronkan bahasa_id dengan tabel pivot

        // // Insert Img
        // $file = $request->file('img'); // img
        // $fileName = uniqid().'.'.$file->getClientOriginalExtension(); // jpg, jpeg
        // $file->storeAs('public/healthDestination/', $fileName); // public/healthDestination/gambar.jpg

        // $data['img'] = $fileName;

        // Menyinkronkan bahasa_id dengan tabel pivot
        $destinasi->bahasa()->sync($request->bahasa_id);

        // return dd($items);
        return redirect(url('health-destination'))->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $items = HealthDestination::with('faskesKategori', 'bahasa', 'Layanan', 'Kontak')->find($id);
        return view(('admin.healthDestination.show'), compact('items'));
        // return dd($items->toArray());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $items = HealthDestination::with('faskesKategori', 'bahasa', 'Layanan')->find($id);
        $faskesKategori = FaskesKategori::get();
        $bahasa = Bahasa::orderBy('name', 'asc')->get()->pluck('name', 'id');

        return view('admin.healthDestination.edit', compact('faskesKategori', 'items', 'bahasa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $destinasi = HealthDestination::findOrFail($id);
        $destinasi->name = $request->name;
        $destinasi->description = $request->description;
        $destinasi->faskes_kategori_id = $request->faskes_kategori_id;
        $destinasi->update();
        $destinasi->bahasa()->sync($request->bahasa_id);

        return redirect(url('health-destination'))->with('success-update', 'Berhasil update data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hd = HealthDestination::findOrFail($id);
        $hd->Layanan()->delete();
        $hd->bahasa()->detach();
        $hd->delete();

        return back()->with('success-delete', 'Berhasil menghapus data');
    }
}
