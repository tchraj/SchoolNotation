<?php

namespace App\Http\Controllers;

use App\Models\Critere;
use App\Models\Notation;
use App\Models\University;
use Illuminate\Http\Request;

class ClassementController extends Controller
{

    public function partiel($critereId)
    {
        $criteres = Critere::all();
        $universites = University::all();
        $notations = Notation::where('criteria_id', $critereId)->get();
        $notationsGroupedByUniversity = $notations->groupBy('univ_id');

        // Calculer le total des points pour chaque université
        $classement = [];
        foreach ($notationsGroupedByUniversity as $univId => $notations) {
            $totalPoints = $notations->sum('score');
            $classement[$univId] = $totalPoints;
        }

        // Trier les universités en fonction des points de notation
        arsort($classement);

        // Retourner le classement sous forme de vue partielle
        return view('classements.index', [
            'classement' => $classement,
            'universites' => $universites,
            'criteres' => $criteres,
        ])->render();
    }
    public function index($critere_id = null)
    {

        // $selectedCritereId = 1;
        $criteres = Critere::all();

        // Si aucun critère n'est spécifié, utilisez l'identifiant du premier critère
        if (!$critere_id && $criteres->isNotEmpty()) {
            $critere_id = $criteres->first()->id;
        }

        $universites = University::all();
        $notations = Notation::where('criteria_id', $critere_id)->get();
        $notationsGroupedByUniversity = $notations->groupBy('univ_id');

        // Calculer le total des points pour chaque université
        $classement = [];
        foreach ($notationsGroupedByUniversity as $univId => $notations) {
            $totalPoints = $notations->sum('score');
            $classement[$univId] = $totalPoints;
        }

        // Trier les universités en fonction des points de notation
        arsort($classement);

        // Retourner le classement sous forme de vue partielle
        return view('classements.index', [
            'classement' => $classement,
            'universites' => $universites,
            'criteres' => $criteres,
            'selectedCritereId' => $critere_id,
        ])->render();


        // A ne pas toucher ca marrrrrrrrrrrrrrrrrrrrcheeeeeeeeeeee

        // $universites = University::all();
        // $criteres = Critere::all();
        // $notations = Notation::where('criteria_id', 2)->get();
        // $notationsGroupedByUniversity = $notations->groupBy('univ_id');

        // $classement = [];
        // foreach ($notationsGroupedByUniversity as $univId => $notations) {
        //     $totalPoints = $notations->sum('score');
        //     $classement[$univId] = $totalPoints;
        // }

        // // Trier les universités en fonction des points de notation
        // arsort($classement);

        // return view('classements.index', [
        //     'classement' => $classement,
        //     'universites' => $universites,
        //     'criteres' => $criteres,
        //     'totalPoints' => $totalPoints,
        // ]);
    }




    public function getClassement(Request $request)
    {
        $critereId = $request->input('critere_id');

        // Récupérer le classement en fonction du critère sélectionné
        $classement = University::with(['notations' => function ($query) use ($critereId) {
            $query->where('criteria_id', $critereId);
        }])->get();

        // Retourner les données au format JSON
        return response()->json($classement);
    }
}
