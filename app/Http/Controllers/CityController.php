<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Composer;

class CityController extends Controller
{
    public function list()
    {
        $cities = City::paginate(5);
        return view('cities.list', compact('cities'));
    }

    public function create()
    {
        $cities = City::paginate(5);
        return view('cities.create', ['cities' => $cities]);

    }
    public function store(Request $request)
    {
        $city = new City();
        $city->city_name = $request->city_name;
        $city->save();
        return back();
        // return view('cities.create');
    }
    public function edit(int $id)
    {
        $city = City::find($id);
        return view('cities.edit', compact('city'));
    }
    public function update(Request $request, $id)
    {
        $city = City::find($id);
        $city->city_name = $request->city_name;
        $city->save();
        return redirect()->route('cities.list');
    }
    public function delete($id)
    {
        $city = City::find($id);
        $city->delete();
        return back();
    }
}
