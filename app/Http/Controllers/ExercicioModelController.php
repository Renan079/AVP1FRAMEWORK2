<?php

namespace App\Http\Controllers;

use App\Models\ExercicioModel;
use Illuminate\Http\Request;

class ExercicioModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exercicios = ExercicioModel::all();
        return view('exercicios.index', compact('exercicios'));
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
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(ExercicioModel $exercicioModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ExercicioModel $exercicioModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ExercicioModel $exercicioModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExercicioModel $exercicioModel)
    {
        //
    }
}
