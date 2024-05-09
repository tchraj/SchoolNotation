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
    // public function store(Request $request, $univ_id)
    // {
        
    //     // dd($request->all());
    //     // // Récupérer l'ID de l'utilisateur à partir de la session
    //     // $user_id = auth()->id();

    //     // // Récupérer les scores à partir de la demande
    //     // $scores = $request->input('scores');

    //     // // Parcourir les scores et les enregistrer dans la base de données
    //     // foreach ($scores as $critere_id => $score) {
    //     //     // Rechercher si une notation existe déjà pour ce critère, cet utilisateur et cette université
    //     //     $notation = Notation::where('users_id', $user_id)
    //     //         ->where('univ_id', $univ_id)
    //     //         ->where('criteria_id', $critere_id)
    //     //         ->first();

    //     //     // Si une notation existe, mettre à jour le score
    //     //     if ($notation) {
    //     //         $notation->score = $score;
    //     //         $notation->save();
    //     //     } else {
    //     //         // Sinon, créer une nouvelle notation
    //     //         $notation = new Notation();
    //     //         $notation->criteria_id = $critere_id;
    //     //         $notation->univ_id = $univ_id;
    //     //         $notation->users_id = $user_id;
    //     //         $notation->score = $score;
    //     //         $notation->save();
    //     //     }
    //     // }

    //     // // Rediriger avec un message de succès
    //     // return back()->with('success', 'Notations enregistrées avec succès');
    // }

    public function store(Request $request, $univId)
    {
        // Validez les données du formulaire
        $validatedData = $request->validate([
            // Ajoutez les règles de validation selon vos besoins
            'scores.*' => 'required|numeric|min:0|max:100',
            'univ_id' => 'required|exists:universities,id',
            'user_id' => 'required|exists:users,id',
        ]);

        // Enregistrez les données dans la base de données
        foreach ($validatedData['scores'] as $critereId => $score) {
            Notation::create([
                'univ_id' => $validatedData['univ_id'],
                'user_id' => $validatedData['user_id'],
                'critere_id' => $critereId,
                'score' => $score,
            ]);
        }

        // Redirigez l'utilisateur après l'enregistrement
        return redirect()->back()->with('success', 'Notation enregistrée avec succès');
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
