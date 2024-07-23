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

    private function validateAndStoreGalleryImages(Request $request, HealthDestination $healthDestination)
    {
        $request->validate(
            [
                'url.*' => 'nullable|image|max:1024|mimes:jpg,jpeg,png', // Allow null for existing images
            ],
            [
                'url.*.required' => 'Setiap gambar wajib diisi',
                'url.*.image' => 'File harus berupa gambar',
                'url.*.max' => 'Ukuran gambar tidak boleh lebih dari 1MB',
                'url.*.mimes' => 'Format gambar harus jpg, jpeg, atau png',
            ]
        );

        if ($request->hasFile('url')) {
            foreach ($request->file('url') as $file) {
                $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/gallery', $fileName);

                $healthDestination->galeri()->create([
                    'url' => $fileName,
                ]);
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HealthDestinasionRequest $request)
    {
        $destinasi = new HealthDestination;
        $destinasi->name = $request->name;
        $destinasi->description = $request->description;
        $this->validateAndStoreGalleryImages($request, $destinasi);
        $destinasi->faskes_kategori_id = $request->faskes_kategori_id;
        $destinasi->save();


        $destinasi->bahasa()->sync($request->bahasa_id);


        return redirect(url('admin/health-destination'))->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $items = HealthDestination::with('faskesKategori', 'bahasa', 'Layanan', 'Kontak','galeri')->find($id);
        return view(('admin.healthDestination.show'), compact('items'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $items = HealthDestination::with('faskesKategori', 'bahasa', 'Layanan', 'galeri')->find($id);
        $items->image = explode($items->image, ' '); // Assuming space is the separator
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
        $this->validateAndStoreGalleryImages($request, $destinasi);

        return redirect(url('admin/health-destination'))->with('success-update', 'Berhasil update data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hd = HealthDestination::findOrFail($id);
        $hd->Fasilitas()->delete();
        $hd->galeri()->delete();
        $hd->kontak()->delete();
        $hd->Layanan()->delete();
        $hd->bahasa()->detach();
        $hd->delete();

        return back()->with('success-delete', 'Berhasil menghapus data');
    }
}
