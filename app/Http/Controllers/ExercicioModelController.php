<?php

namespace App\Http\Controllers;

use App\Models\ExercicioModel;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
        $users = User::all();
        return view('exercicios.createExercicios', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validatedData = $request->validate([
            'type'            => 'required|string|max:255', // O nome da atividade (campo 'type' no form)
            'duration'        => 'required|integer|min:1',  // Usa validação para formato TIME (HH:MM)
            'calories_burned' => 'required|integer|min:1',
            'date'            => 'required|date',
        ]);

        $exercicio = ExercicioModel::create([
            'user_id'         => Auth::id(), // ID do usuário logado
            'name_activiry'   => $validatedData['type'], // Mapeando o valor do form para a coluna correta
            'duration'        => $validatedData['duration'],
            'calories_burned' => $validatedData['calories_burned'],
            'date'            => $validatedData['date'],
        ]);

        return redirect()->route('exercicios.index')->with('success', 'O exercício foi registrado com sucesso!');
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
