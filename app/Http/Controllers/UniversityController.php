<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Comment;
use App\Models\Critere;
use App\Models\Notation;
use App\Models\University;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use Illuminate\Support\Composer;
use Illuminate\Support\Facades\Auth;

class UniversityController extends Controller
{

    public function home_classement($critereId)
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
        return view('classements.partial', [
            'classement' => $classement,
            'universites' => $universites,
            'criteres' => $criteres,
        ])->render();
    }

    public function details($univ_id)
    {
        $univ = University::find($univ_id);
        if ($univ) {
            $comments = $univ->comments()->where('status', 'Actif')->get();
        }
        $user_id = Auth::id();
        $criteria = Critere::all();
        $formations = $univ->formations;
        $contacts = json_decode($univ->contacts, true);
        $contacts = array_filter($contacts, function ($contact) {
            return !empty(trim($contact));
        });
        $univ->contacts = $contacts;
        $authors = []; // Tableau pour stocker les auteurs des commentaires
        foreach ($comments as $comment) {
            $authors[] = $comment->user; // Ajoute l'utilisateur à la liste des auteurs
        }
        $notations = Notation::where('users_id', $user_id)->get();
        return view('univ.infos', compact(['univ', 'comments', 'univ_id', 'formations', 'authors', 'criteria', 'notations', 'contacts']));
    }

    public function welcome($critere_id = null)
    {
        $universities = University::all();
        // $selectedCritereId = 1;
        $criteres = Critere::all();

        // Si aucun critère n'est spécifié, utilisez l'identifiant du premier critère
        if (!$critere_id && $criteres->isNotEmpty()) {
            $critere_id = $criteres->first()->id;
        }

        // $universites = University::all();
        $notations = Notation::where('criteria_id', $critere_id)->get();
        $notationsGroupedByUniversity = $notations->groupBy('univ_id');

        // Calculer le total des points pour chaque université
        $classement = [];
        foreach ($notationsGroupedByUniversity as $univId => $notations) {
            $totalPoints = $notations->sum('score');
            $classement[$univId] = $totalPoints;
        }
        $univs = University::all();
        // Trier les universités en fonction des points de notation
        arsort($classement);
        $universities = [];
        $points = [];

        foreach ($classement as $univId => $totalPoints) {
            $universite = University::find($univId);
            $universities[] = $universite->univ_name;
            $points[] = $totalPoints;
        }
        return view('welcome', compact(['universities', 'criteres', 'univs']));
    }
    public function list()
    {
        // $univs = University::all();
        $univs = University::with('city')->get();
        $criteria = Critere::all();
        $univers = University::all();
        return view('univ.list', compact(['univs', 'criteria', 'univers']));
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
        // if ($request->hasFile('logo')) {
        //     // Récupère le fichier téléchargé
        //     $logo = $request->file('logo');

        //     // Déplace le fichier téléchargé vers le dossier de stockage approprié (par exemple, le dossier "public/storage")
        //     $path = $logo->store('logos', 'public');

        //     // Stocke le chemin du fichier dans la base de données
        //     $univ->logo = $path;
        // }
        $univ->logo = $request->logo;
        $univ->univ_name = $request->univ_name;
        $univ->contacts = json_encode($request->input('contacts'));
        $univ->formations = $request->input('formations');
        $univ->type = $request->type;
        $univ->address = $request->address;
        $univ->city_id = $request->city;
        $univ->description  = $request->description;
        $univ->mails = $request->input('mails');
        $univ->websites = $request->input('websites');
        $univ->save();
        $univers = University::all();
        $criteria = Critere::all();
        return view('univ.list', compact(['univers', 'criteria']))->with('success', 'Opération éffectuée avec succès');
    }
    public function edit(int $id)
    {
        $id = (int)$id;
        $cities = City::all();
        $univ = University::find($id);
        // $citie = $cities->where('id','=',$univ->city_id)->first()->name;
        // $mail_dec = json_decode($univ->mails);
        // $web_dec = json_decode($univ->websites);
        // // $univ->formations = json_decode($univ->formations, true);
        // dd(json_decode($univ->websites));
        $cont_decode = json_decode($univ->contacts);
        if (!isset($cont_decode)) {
            $cont_decode = (object)[];
        }
        // dd($cont_decode);
        return view("univ.edit", compact(['univ', 'cities', 'cont_decode']));
        // dd($univ->formations);
    }
    public function update(Request $request, $id)
    {

        $univ = University::find($id);
        $univ->logo = $request->logo;
        // if ($request->hasFile('logo')) {
        //     // Récupère le fichier téléchargé
        //     $logo = $request->file('logo');

        //     // Déplace le fichier téléchargé vers le dossier de stockage approprié (par exemple, le dossier "public/storage")
        //     $path = $logo->store('logos', 'public');

        //     // Stocke le chemin du fichier dans la base de données
        //     $univ->logo = $path;
        // }
        $univ->univ_name = $request->univ_name;
        $univ->contacts = json_encode($request->input('contacts'));
        $univ->formations = $request->input('formations');
        $univ->type = $request->type;
        $univ->address = $request->address;
        $univ->city_id = $request->city;
        $univ->description  = $request->description;
        $univ->mails = $request->input('mails');
        $univ->websites = $request->input('websites');
        $univ->save();
        return redirect()->route('univs.list')->with('success', 'Opération éffectuée avec succès');
    }
    public function delete($id)
    {
        $univ = University::find($id);
        $univ->delete();
        return back();
    }
}
