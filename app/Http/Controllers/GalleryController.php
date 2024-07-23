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
        $items = Gallery::with([
            'healthDestination' => function ($query) {
                $query->select('id', 'name'); // Hanya ambil kolom yang diperlukan
            },
            'touristDestination' => function ($query) {
                $query->select('id', 'name');
            }
        ])->get();
        $faskes = HealthDestination::with('galeri')->get();
        $tourist = tourist_destination::with('galeri')->get();
        return view('admin.gallery.index', compact('items', 'faskes', 'tourist'));
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
    public function edit(Gallery $gallery)
    {
        $healthDestination = HealthDestination::get();
        $touristDestination = tourist_destination::get();

        // Retrieve the current gallery images
        $galleryImages = Gallery::where('health_destination_id', $gallery->health_destination_id)
                                ->orWhere('tourist_destination_id', $gallery->tourist_destination_id)
                                ->get();

        return view('admin.gallery.edit', compact('gallery', 'galleryImages', 'healthDestination', 'touristDestination'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'url.*' => 'nullable|image|max:1024|mimes:jpg,jpeg,png',
        ], [
            'url.*.image' => 'File harus berupa gambar',
            'url.*.max' => 'Ukuran gambar tidak boleh lebih dari 1MB',
            'url.*.mimes' => 'Format gambar harus jpg, jpeg, atau png',
        ]);

        // Handle new image uploads
        if ($request->hasFile('url')) {
            foreach ($request->file('url') as $file) {
                $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/gallery', $fileName);

                Gallery::create([
                    'url' => $fileName,
                    'health_destination_id' => $gallery->health_destination_id,
                    'tourist_destination_id' => $gallery->tourist_destination_id,
                ]);
            }
        }

        // Handle image deletions
        if ($request->has('delete_images')) {
            foreach ($request->input('delete_images') as $imageId) {
                $image = Gallery::find($imageId);
                Storage::delete('public/gallery/' . $image->url);
                $image->delete();
            }
        }

        // Redirect back with success message (adjust URL as needed)
        return redirect(url('admin/galeri'))->with('success', 'Berhasil memperbarui data');
    }


    public function destroy(Gallery $gallery)
    {
        // Hapus file gambar dari penyimpanan
        Storage::delete('public/gallery/' . $gallery->url);

        // Hapus data galeri dari database
        $gallery->delete();

        if($gallery){
            //redirect dengan pesan sukses
            return back()->with('success', 'Galeri berhasil dihapus');
        }else{
            //redirect dengan pesan error
            return back()->with(['error' => 'Data Gagal Dihapus!']);
        }

    }
}
