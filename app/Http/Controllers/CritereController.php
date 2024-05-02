<?php

namespace App\Http\Controllers;

use App\Models\Critere;
use Illuminate\Http\Request;
use Illuminate\Support\Composer;

class CritereController extends Controller
{
    public function list()
    {
        $criteria = Critere::paginate(5);
        return view('criteria.list', compact('criteria'));
    }

    public function create()
    {
        $criteria = Critere::paginate(5);
        return view('criteria.create', ['criteria' => $criteria]);

    }
    public function store(Request $request)
    {
        $city = new Critere();
        $city->city_name = $request->city_name;
        $city->save();
        return back();
        // return view('criteria.create');
    }
    public function edit(int $id)
    {
        $city = Critere::find($id);
        return view('criteria.edit', compact('city'));
    }
    public function update(Request $request, $id)
    {
        $city = Critere::find($id);
        $city->city_name = $request->city_name;
        $city->save();
        return redirect()->route('criteria.list');
    }
    public function delete($id)
    {
        $city = Critere::find($id);
        $city->delete();
        return back();
    }
}
