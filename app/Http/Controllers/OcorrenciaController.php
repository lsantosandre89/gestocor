<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\Ocorrencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OcorrenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ocorrencias = Ocorrencia::all();
        return view('ocorrencias.index', compact('ocorrencias'));
    }

    public function create()
    {
        //        $alunos = Aluno::all();
        //$ocorrencias = Ocorrencia::all();
        $alunos = Aluno::all();
        //        return view('alunos.create', compact('alunos'));
        return view('ocorrencias.create', compact('alunos'));
    }

    public function store(Request $request)
    {
        Ocorrencia::create($request->all());
        return redirect()->route('ocorrencias.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Ocorrencia  $ocorrencia
     * @return \Illuminate\Http\Response
     */
    public function show(Ocorrencia $ocorrencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ocorrencia  $ocorrencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Ocorrencia $ocorrencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ocorrencia  $ocorrencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ocorrencia $ocorrencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ocorrencia  $ocorrencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ocorrencia $ocorrencia)
    {
        //
    }
}
