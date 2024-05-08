<?php

namespace App\Http\Controllers;

use App\Models\Bahasa;
use App\Models\tourist_destination;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index');
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
