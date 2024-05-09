<?php

namespace App\Http\Controllers;

use App\Models\Bahasa;
use App\Models\HealthDestination;
use App\Models\Language;
use App\Models\tourist_destination;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Bahasa::with('healthDestination','touristDestination')->latest()->get();
        return view('admin.language.index', compact('items'));
    }

    public function create()
    {
        $healthDestination = HealthDestination::get();
        $touristDestination = tourist_destination::get();

        return view('admin.language.create', compact('healthDestination', 'touristDestination'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
            ],[
                'name.required' => 'Bahasa wajib diisi',
            ]
        );

            $items = [
                'name'=>$request->name,
                'health_destination_id'=>$request->health_destination_id,
                'tourist_destination_id'=>$request->tourist_destination_id,
            ];

            Language::create($items);

        return redirect(url('bahasa'))->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
