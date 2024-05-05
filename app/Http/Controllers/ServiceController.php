<?php

namespace App\Http\Controllers;

use App\Models\HealthDestination;
use App\Models\Service;
use App\Models\tourist_destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Service::latest()->get();
        $healthDestination = HealthDestination::get();
        $touristDestination = tourist_destination::get();
        return view('admin.layanan.index', compact('healthDestination', 'touristDestination','items'));
        // return 'ok';
    }

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
            ],[
                'name.required' => 'Nama layanan wajib diisi',
            ]
        );

            $items = [
                'name'=>$request->name,
            ];

            Service::create($items);

        return redirect()->back()->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Session::flash('name', $request->name);
        $request->validate(
            [
                'name' => 'required',
            ],[
                'name.required' => 'Nama layanan wajib diisi',
            ]
        );

            $items = [
                'name'=>$request->name,
            ];

            Service::find($id)->update($items);

        return redirect()->back()->with('success-update', 'Berhasil update data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $items = Service::findOrFail($id);
        $items->delete();

        return back()->with('success-delete', 'Berhasil menghapus data');
    }
}
