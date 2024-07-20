<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Contact;
use App\Models\HealthDestination;
use App\Models\tourist_destination;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Contact::with('city', 'healthDestination', 'touristDestination')->latest()->get();

        return view('admin.kontak.index', compact('items'));
        // return dd($items);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kotas = City::get();
        $healthDestination = HealthDestination::get();
        $touristDestination = tourist_destination::get();

        return view('admin.kontak.create', compact('healthDestination', 'touristDestination', 'kotas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'email' => 'required',
                'address' => 'required',
                'phone' => 'required',
                'city_id' => 'required',
            ],[
                'email.required' => 'email wajib diisi',
                'address.required' => 'alamat wajib diisi',
                'phone.required' => 'nomer hp wajib diisi',
                'city_id.required' => 'kota wajib diisi',
            ]
        );

        $items = [
            'email'=>$request->email,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'city_id'=>$request->city_id,
            'health_destination_id'=>$request->health_destination_id,
            'tourist_destination_id'=>$request->tourist_destination_id,
        ];

        Contact::create($items);

        return redirect(url('admin/kontak'))->with('success', 'Berhasil menambahkan data');
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
        $items = Contact::find($id);
        $kotas = City::get();
        $healthDestination = HealthDestination::get();
        $touristDestination = tourist_destination::get();
        return view('admin.kontak.edit', compact('items','kotas', 'healthDestination', 'touristDestination'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'email' => 'required',
                'address' => 'required',
                'phone' => 'required',
                'city_id' => 'required',
            ],[
                'email.required' => 'email wajib diisi',
                'address.required' => 'alamat wajib diisi',
                'phone.required' => 'nomer hp wajib diisi',
                'city_id.required' => 'kota wajib diisi',
            ]
        );

        $items = [
            'email'=>$request->email,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'city_id'=>$request->city_id,
            'health_destination_id'=>$request->health_destination_id,
            'tourist_destination_id'=>$request->tourist_destination_id,
        ];

        Contact::find($id)->update($items);

        return redirect(url('admin/kontak'))->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kontak = Contact::find($id);
        $kontak->delete();

        return back()->with('success', 'Berhasil menghapus data');
    }
}
