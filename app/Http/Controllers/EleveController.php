<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use App\Http\Requests\StoreEleveRequest;
use App\Http\Requests\UpdateEleveRequest;

class EleveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eleves= Eleve::all();
        return view('eleves', compact('eleves'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('eleves.create');
        
    }
    
    /**
     * Store a newly created resource in storage.
    */
    public function store(StoreEleveRequest $request)
    {
        Eleve::create([
        'nom' => $request->nom,
        'prenom' => $request->prenom,
        'age' => $request->age,
        'employe' => $request->has('employe'),
        ]);
        return redirect()->route('eleves')->with('success', 'Élève créé avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Eleve $Eleve)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Eleve $eleves)
    {
        return view('eleves.edit', compact('eleves'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEleveRequest $request, Eleve $eleves)
    {
        $eleves->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'age' => $request->age,
            'employe' => $request->has('employe'),
        ]);
        
        return redirect()->route('eleves')->with('success', 'Élève modifié avec succès');
    }    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Eleve $eleves)
    {
        $eleves->delete();
        return redirect()->route('eleves')->with('success', 'Élève supprimé avec succès');

    }
}

