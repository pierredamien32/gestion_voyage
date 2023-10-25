<?php

namespace App\Http\Controllers;

use App\Models\Logement;
use App\Models\Sejour;
use App\Models\Voyageur;
use Illuminate\Http\Request;

class SejourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->search;

        if ($search) {
            $sejours = Sejour::query()
                ->join('voyageurs', 'sejours.id_sejour', '=', 'voyageurs.id_voyageur')
                ->where('voyageurs.nom', 'LIKE', '%'.$search.'%')
                ->orWhere('voyageurs.prenom', 'LIKE', '%'.$search.'%')
                ->paginate(5);
        } else {
            $sejours = Sejour::latest()->paginate(5);
        }
        return view('sejours.index', ['sejours'=> $sejours]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('sejours.create',[
            'voyageurs' => Voyageur::all(),
            'logements' => Logement::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Sejour::create([
            'debut'=> $request->debut,
            'fin'=> $request->fin,
            'id_voyageur'=> $request->id_voyageur,
            'code'=> $request->id_code
        ]);

        return redirect('/sejours')->with('Séjour enregistrer avec succès.');
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
        $sejour = Sejour::FindOrFail($id);
        return view('sejours.edit',[
            'voyageurs' => Voyageur::all(),
            'logements' => Logement::all(),
            'sejour' => $sejour
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sejour = Sejour::FindOrFail($id);

        $sejour->debut = $request->debut;
        $sejour->fin = $request->fin;
        $sejour->id_voyageur = $request->id_voyageur;
        $sejour->code = $request->id_code;

        $sejour->update();
        return redirect('/sejours')->with('Séjour modifier avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sejour = Sejour::FindOrFail($id);
        $sejour->delete();
        return redirect('/');
    }
}
