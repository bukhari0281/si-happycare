<?php

namespace App\Http\Controllers;

use App\Models\HealthDestination;
use App\Models\Service;
use App\Models\tourist_destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $items = HealthDestination::with('faskesKategori', 'Language', 'Service')->latest()->get();

        // return view('admin.healthDestination.index', compact('items'));
        $items = Service::latest()->get();
        $healthDestination = HealthDestination::get();
        $touristDestination = tourist_destination::get();
        return view('admin.layanan.index', compact('healthDestination', 'touristDestination','items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $healthDestination = HealthDestination::get();
        $touristDestination = tourist_destination::get();

        return view('admin.layanan.create', compact('healthDestination', 'touristDestination'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('name', $request->name);
        $request->validate(
            [
                'name' => 'required',
                'description' => 'required',
            ],[
                'name.required' => 'Nama layanan wajib diisi',
                'description.required' => 'Deskripsi layanan wajib diisi',
            ]
        );

        $items = [
            'name'=>$request->name,
            'description'=>$request->description,
            'health_destination_id'=>$request->health_destination_id,
            'tourist_destination_id'=>$request->tourist_destination_id,
        ];

        Service::create($items);

        return redirect(url('layanan'))->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $items = Service::find($id);
        $healthDestination = HealthDestination::get();
        $touristDestination = tourist_destination::get();
        return view('admin.layanan.edit', compact('items', 'healthDestination', 'touristDestination'));
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
            ],[
                'name.required' => 'Nama layanan wajib diisi',
                'description.required' => 'Deskripsi layanan wajib diisi',
            ]
        );
        $items = [
            'name'=>$request->name,
            'description'=>$request->description,
            'health_destination_id'=>$request->health_destination_id,
            'tourist_destination_id'=>$request->tourist_destination_id,
        ];

        Service::find($id)->update($items);
        return redirect(url('admin/layanan'))->with('success', 'Berhasil mengubah data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $layanan = Service::find($id);
        $layanan->delete();

        return back()->with('success', 'Berhasil menghapus data');
    }
}
