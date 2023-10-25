<?php

namespace App\Http\Controllers;

use App\Models\Voyageur;
use Illuminate\Http\Request;

class VoyageurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->search;

        if ($search) {
            $voyageurs = Voyageur::query()
                ->where('nom', 'LIKE', '%'.$search.'%')
                ->orWhere('prenom', 'LIKE', '%'.$search.'%')
                ->paginate(5);
        } else {
            $voyageurs = Voyageur::latest()->paginate(5);
        }
        return view('voyageurs.index', ['voyageurs'=> $voyageurs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('voyageurs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Voyageur::create([$request->all()]);

        Voyageur::create([
            'nom'=> $request->nom,
            'prenom'=> $request->prenom,
            'ville'=> $request->ville,
            'région'=> $request->région,
            'sexe'=> $request->sexe,
        ]);

        return redirect('/voyageurs')->with('Voyageur enregistrer avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $voyageur = Voyageur::FindOrFail($id);
        return view('voyageurs.edit',['voyageur'=> $voyageur]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $voyageur = Voyageur::FindOrFail($id);
        $voyageur->nom = $request->nom;
        $voyageur->prenom = $request->prenom;
        $voyageur->ville = $request->ville;
        $voyageur->région = $request->région;
        $voyageur->sexe = $request->sexe;

        $voyageur->update();
        return redirect('/voyageurs')->with('Voyageur modifier avec succès.');
            
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $voyageur = Voyageur::FindOrFail($id);
        $voyageur->delete();
        return redirect('/voyageurs');
    }
}
