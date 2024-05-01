<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Support\Composer;

class UniversityController extends Controller
{
    public function list()
    {
        $univ = University::all();
        return view('univ.list', compact('univ'));
    }

    public function create()
    {
        $univ = University::all();
        $cities = City::all();
        return view('univ.create', compact('univ', 'cities'));
    }

    public function store(Request $request)
    {
        $univ = new University();
        $univ->univ_name = $request->univ_name;
        $univ->contacts = json_encode($request->input('contacts'));
        $univ->formations = $request->input('formations');
        $univ->type = $request->type;
        $univ->address = $request->address;
        $univ->city_id = $request->city;
        $univ->mails = $request->input('mails');
        $univ->websites = $request->input('websites');
        $univ->save();
        return view('univ.list');
    }
    public function edit(int $id)
    {   $cities = City::all();
        $univ = University::find($id);
        // $citie = $cities->where('id','=',$univ->city_id)->first()->name;
        // $mail_dec = json_decode($univ->mails);
        // $web_dec = json_decode($univ->websites);
        // // $univ->formations = json_decode($univ->formations, true);
        // dd(json_decode($univ->websites));
        $cont_decode = json_decode($univ->contacts);
        if (!isset($cont_decode)) {
            $cont_decode= (object)[];
        }
        // dd($cont_decode);
        return view("univ.edit",compact(['univ','cities','cont_decode']));
        // dd($univ->formations);
    }
    public function update(Request $request, $id)
    {
        
        $univ = University::find($id);
        $univ->univ_name = $request->univ_name;
        $univ->contacts = json_encode($request->input('contacts'));
        $univ->formations = $request->input('formations');
        $univ->type = $request->type;
        $univ->address = $request->address;
        $univ->city_id = $request->city;
        $univ->mails = $request->input('mails');
        $univ->websites = $request->input('websites');
        $univ->save();
        return redirect()->route('univs.list');
    }
    public function delete($id)
    {
        $univ = University::find($id);
        $univ->delete();
        return back();
    }
}
