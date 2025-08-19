<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use App\Http\Requests\StoreEmployeRequest;
use App\Http\Requests\UpdateEmployeRequest;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employe.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeRequest $request)
    {
        $employe = Employe::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
        ]);
            // d'abord on vérifie qu'il y a un file dans l'input photo
            // J'ai bien un file, je récupère celui-ci dans un variable image
            $image=$request->file('photo');
            // je vais créer un nom unique généré a partir du temps php + _ + le nom du fichier uploadé. 
            $nomfichier = time().'_'.$image->getClientOriginalName();
            // Ensuite on va sauvegarder et dans ma fonction storeAs j'ai ('dossier', nom du fichier, 'accessible par publique' 
            $path = $request->file('photo')->storeAs('avatars', $nomfichier, 'public');
            // Ici j'enregistre le chemin puisque dans ma db, je stock que le chemin de l'image 
            $employe->photo = $path;
            $employe->save();
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Employe $employe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employe $employe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeRequest $request, Employe $employe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employe $employe)
    {
        //
    }
}
