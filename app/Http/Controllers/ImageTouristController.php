<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Models\tourist_destination;
use Illuminate\Support\Facades\Storage;

class ImageTouristController extends Controller
{
    public function index(string  $id)
    {
        $items = tourist_destination::findOrFail($id);
        $images = Gallery::where('tourist_destination_id', $id)->get();

        return view('admin.image_tourist.index', compact('items', 'images'));
    }

    public function store(Request $request, string  $id)
    {
        $request->validate([
            'url.*' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $faskes = tourist_destination::findOrFail($id);
        if ($request->hasFile('url')) {
            foreach ($request->file('url') as $file) {
                $extension = $file->getClientOriginalExtension();
                $fileName = uniqid() . '.' . $extension; // Simplified filename generation
                $path = $file->storeAs('public/gallery', $fileName);

                // Create and associate Gallery with HealthDestination
                $faskes->galeri()->create([
                    'url' => $fileName,
                ]);
            }
        }


        return redirect()->back()->with('success', 'Berhasil menambahkan data');
    }


    public function destroy(string $id)
    {
        $image = Gallery::findOrFail($id);
        // Corrected file path
        if (Storage::disk('public')->exists('gallery/' . $image->url)) {
            Storage::disk('public')->delete('gallery/' . $image->url);
        }
        $image->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus data');
        // return dd();
    }
}
