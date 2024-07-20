<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\HealthDestination;
use App\Models\tourist_destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Gallery::with('healthDestination', 'touristDestination')->get();
        return view('admin.gallery.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $healthDestination = HealthDestination::get();
        $touristDestination = tourist_destination::get();
        return view('admin.gallery.create', compact('healthDestination', 'touristDestination'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'url.*' => 'required|image|max:1024|mimes:jpg,jpeg,png', // Adjusted for an array of files
            ],[
                'url.*.required' => 'Setiap gambar wajib diisi',
                'url.*.image' => 'File harus berupa gambar',
                'url.*.max' => 'Ukuran gambar tidak boleh lebih dari 1MB',
                'url.*.mimes' => 'Format gambar harus jpg, jpeg, atau png',
            ]
        );

        $galleryItems = []; // Array to hold multiple gallery items

        if($request->hasfile('url'))
        {
            foreach($request->file('url') as $file)
            {
                $fileName = uniqid().'.'.$file->getClientOriginalExtension(); // Get the file extension
                $file->storeAs('public/gallery', $fileName); // Store the file in the public/gallery directory

                $galleryItems[] = [
                    'url' => $fileName,
                    'health_destination_id' => $request->health_destination_id,
                    'tourist_destination_id' => $request->tourist_destination_id,
                ];
            }
        }

        Gallery::insert($galleryItems); // Insert multiple records at once

        return redirect(url('admin/galeri'))->with('success', 'Berhasil menambahkan data');
        // return dd($galleryItems);
        // return dd($galleryItems)->toArray();
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
        //
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
        $gallery = Gallery::findOrFail($id);

        // Delete the image file from storage before deleting the record (optional)
        if (Storage::disk('public')->exists('gallery/' . $gallery->url)) {
            Storage::disk('public')->delete('gallery/' . $gallery->url);
        }

        $gallery->delete();

        return back()->with('success', 'Berhasil menghapus data');
    }
}
