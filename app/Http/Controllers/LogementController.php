<?php

namespace App\Http\Controllers;

use App\Models\Logement;
use Illuminate\Http\Request;

class LogementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->search;

        if ($search) {
            $logements = Logement::query()
                ->where('nom', 'LIKE', '%'.$search.'%')
                ->paginate(5);
        } else {
            $logements = Logement::latest()->paginate(5);
        }
        return view('logements.index', ['logements'=> $logements]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('logements.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $image = $request->file;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->file->move('imageLogement', $imagename);

        Logement::create([
            'nom'=> $request->nom,
            'capacite'=> $request->capacite,
            'type'=> $request->type,
            'lieu'=> $request->lieu,
            'photo'=> $imagename,
            'disponibilite'=> $request->disponibilite,
        ]);

        return redirect('/')->with('Logement enregistrer avec succès.');
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
        $logement = Logement::FindOrFail($id);
        return view('logements.edit',['logement'=> $logement]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $logement = Logement::FindOrFail($id);
        $image = $request->file;

        if($image){
            // $image = $request->file;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->file->move('imageLogement', $imagename);
            $logement->photo = $imagename;
        }

        $logement->nom = $request->nom;
        $logement->capacite = $request->capacite;
        $logement->type = $request->type;
        $logement->lieu = $request->lieu;
        $logement->disponibilite = $request->disponibilite;
        dd($request->disponibilite);
        $logement->update();
        return redirect('/')->with('Logement modifier avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $logement = Logement::FindOrFail($id);
        $logement->delete();
        return redirect('/');
    }
}
