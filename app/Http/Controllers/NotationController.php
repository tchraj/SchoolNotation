<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Notation;
use Illuminate\Http\Request;
use Illuminate\Support\Composer;

class NotationController extends Controller
{
    public function list()
    {
        $user = Auth::user();
        $notations = Notation::where('users_id', $user->id)->get();
        return view('notations.list', compact('notations'));
    }

    public function create()
    {
        $notations = Notation::all();
        return view('notations.create', ['notations' => $notations]);
    }
    public function store(Request $request)
    {
        $univ_id = $request->input('univ_id');
        $user_id = $request->input('user_id');
        $scores = $request->input('scores');
        foreach ($scores as $critere_id => $score) {
            $notation = new Notation();
            $notation->criteria_id = $critere_id;
            $notation->univ_id = $univ_id;
            $notation->users_id = $user_id;
            $notation->score = $score;
            $notation->save();
            return redirect()->route('notations.list');
        }
        // $notation = new Notation();
        // $user = Auth::user();
        // $data = $request->all();
        // $notation->users_id = $user->id;
        // $notation->score = $request->score;
        // $notation->university()->associate($data['univ_id']); // Assurez-vous que la clé étrangère est correctement définie dans votre modèle Notation
        // $notation->criteria()->associate($data['criteria_id']); // Assurez-vous que la clé étrangère est correctement définie dans votre modèle Notation
        // $notation->save();
        // return back();
    }
    public function edit(int $id)
    {
        $city = Notation::find($id);
        return view('notations.edit', compact('city'));
    }
    public function update(Request $request, $id)
    {
        $city = Notation::find($id);
        $city->city_name = $request->city_name;
        $city->save();
        return redirect()->route('notations.list');
    }
    public function delete($id)
    {
        $city = Notation::find($id);
        $city->delete();
        return back();
    }
}
