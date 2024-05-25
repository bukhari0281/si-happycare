<?php

namespace App\Http\Controllers;

use App\Models\Bahasa;
use App\Models\HealthDestination;
use App\Models\tourist_destination;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $total_wisata = tourist_destination::count();
        $total_faskes = HealthDestination::count();
        $faskes = HealthDestination::get();
        $wisata = tourist_destination::get();
        return view('admin.dashboard.index', compact('total_wisata', 'total_faskes', 'faskes', 'wisata'));
    }

    public function store(Request $request)
    {
        // $items = $request->validated();

        // if ($td = tourist_destination::create($items)) {
        //     $td->bahasa()->sync($items['bahasa_id']);

        //     // return redirect(url('tourist-destination'))->with('success', 'Added!');
        //     return redirect(dd($request));
        // }
        $product = new tourist_destination();
        $product->name = 'God of War';
        $product->description = 'Lorem ipsum';

        $product->save();


        $category = Bahasa::find([3, 4]);
        $product->bahasa()->attach($category);

        return 'Success';

        return redirect(dd($request));

    }
}
