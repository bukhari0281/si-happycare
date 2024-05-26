<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use App\Models\HealthDestination;
use App\Models\tourist_destination;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Facility::latest()->get();

        return view('admin.fasilitas.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $healthDestination = HealthDestination::get();
        $touristDestination = tourist_destination::get();

        return view('admin.fasilitas.create', compact('healthDestination', 'touristDestination'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'qty' => 'required',
            ],[
                'name.required' => 'Nama layanan wajib diisi',
                'qty.required' => 'Deskripsi layanan wajib diisi',
            ]
        );

        $items = [
            'name'=>$request->name,
            'qty'=>$request->qty,
            'health_destination_id'=>$request->health_destination_id,
            'tourist_destination_id'=>$request->tourist_destination_id,
        ];

        Facility::create($items);

        return redirect(url('admin/fasilitas'))->with('success', 'Berhasil menambahkan data');
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
        $items = Facility::find($id);
        $healthDestination = HealthDestination::get();
        $touristDestination = tourist_destination::get();
        return view('admin.fasilitas.edit', compact('items', 'healthDestination', 'touristDestination'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'name' => 'required',
                'qty' => 'required',
            ],[
                'name.required' => 'Nama layanan wajib diisi',
                'qty.required' => 'Deskripsi layanan wajib diisi',
            ]
        );

        $items = [
            'name'=>$request->name,
            'qty'=>$request->qty,
            'health_destination_id'=>$request->health_destination_id,
            'tourist_destination_id'=>$request->tourist_destination_id,
        ];

        Facility::find($id)->update($items);
        return redirect(url('admin/fasilitas'))->with('success', 'Berhasil mengubah data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $fasilitas = Facility::find($id);
        $fasilitas->delete();

        return back()->with('success', 'Berhasil menghapus data');
    }
}
