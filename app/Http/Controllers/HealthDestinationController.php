<?php

namespace App\Http\Controllers;

use App\Http\Requests\HealthDestinasionRequest;
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
        $items = HealthDestination::with('faskesKategori', 'Language', 'Layanan')->latest()->get();

        return view('admin.healthDestination.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $faskesKategori = FaskesKategori::get();

        return view('admin.healthDestination.create', compact('faskesKategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'description' => 'required',
                'faskes_kategori_id' => 'required',

            ],[
                'name.required' => 'Nama layanan wajib diisi',
                'description.required' => 'Deskripsi layanan wajib diisi',
                'faskes_kategori_id.required' => 'Kategori layanan wajib diisi',
            ]
        );

        $items = [
            'name'=>$request->name,
            'description'=>$request->description,
            'faskes_kategori_id'=>$request->faskes_kategori_id,
        ];

        // // Insert Img
        // $file = $request->file('img'); // img
        // $fileName = uniqid().'.'.$file->getClientOriginalExtension(); // jpg, jpeg
        // $file->storeAs('public/healthDestination/', $fileName); // public/healthDestination/gambar.jpg

        // $data['img'] = $fileName;

        HealthDestination::create($items);

        // return dd($items);
        return redirect(url('health-destination'))->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $items = HealthDestination::with('faskesKategori', 'Language', 'Layanan')->find($id);
        return view(('admin.healthDestination.show'), compact('items'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $items = HealthDestination::with('faskesKategori', 'Language', 'Layanan')->find($id);
        $faskesKategori = FaskesKategori::get();

        return view('admin.healthDestination.edit', compact('faskesKategori', 'items'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'name' => 'required',
                'description' => 'required',
                'faskes_kategori_id' => 'required',

            ],[
                'name.required' => 'Nama layanan wajib diisi',
                'description.required' => 'Deskripsi layanan wajib diisi',
                'faskes_kategori_id.required' => 'Kategori layanan wajib diisi',
            ]
        );

        $items = [
            'name'=>$request->name,
            'description'=>$request->description,
            'faskes_kategori_id'=>$request->faskes_kategori_id,
        ];

        HealthDestination::find($id)->update($items);

        return redirect(url('health-destination'))->with('success-update', 'Berhasil update data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
