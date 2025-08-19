<?php

namespace App\Http\Controllers;

use App\Models\TypeFormation;
use App\Http\Requests\StoreTypeFormationRequest;
use App\Http\Requests\UpdateTypeFormationRequest;

class TypeFormationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $typeformations= TypeFormation::all();
        return view('typeformation', compact('typeformations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTypeFormationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TypeFormation $TypeFormation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TypeFormation $TypeFormation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTypeFormationRequest $request, TypeFormation $TypeFormation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TypeFormation $TypeFormation)
    {
        //
    }
}
