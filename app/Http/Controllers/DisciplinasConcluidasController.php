<?php

namespace App\Http\Controllers;

use App\Models\DisciplinasConcluidas;
use Illuminate\Http\Request;

class DisciplinasConcluidasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($diciplina)
    {
        try {
            $dados = DisciplinasConcluidas::where('diciplina', '=', $diciplina)->count();
            return Response()->json($dados, 200);
        } catch (\Throwable $th) {
            return Response()->json(['Error' => $th], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        try {
            $comc = new DisciplinasConcluidas();
            $comc->diciplina = $request->diciplina;
            $comc->save();
            return Response()->json([], 200);
        } catch (\Throwable $th) {
            return Response()->json(['Error' => $th], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DisciplinasConcluidas  $disciplinasConcluidas
     * @return \Illuminate\Http\Response
     */
    public function show(DisciplinasConcluidas $disciplinasConcluidas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DisciplinasConcluidas  $disciplinasConcluidas
     * @return \Illuminate\Http\Response
     */
    public function edit(DisciplinasConcluidas $disciplinasConcluidas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DisciplinasConcluidas  $disciplinasConcluidas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DisciplinasConcluidas $disciplinasConcluidas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DisciplinasConcluidas  $disciplinasConcluidas
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        try {
            DisciplinasConcluidas::truncate();
            return Response()->json([], 200);
        } catch (\Throwable $th) {
            return Response()->json(['Error' => $th], 500);
        }

    }
}
