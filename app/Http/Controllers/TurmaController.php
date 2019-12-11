<?php

namespace App\Http\Controllers;

use App\Turma;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TurmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $turmas = Turma::all();
        return view('turmas.index', compact('turmas'));
    }
    public function create()
    {
        $turmas = Turma::all();
        return view('turmas.create', compact('turmas'));
    }
    public function store(Request $request)
    {
        Turma::create($request->all());
        return redirect()->route('turmas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $turma = Turma::find($id);
        return view('turmas.show',compact('turma'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $turma = Turma::find($id);
        return view('turmas.edit',compact('turma'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('turmas')
            ->where('id',$id)
            ->update([
                'descricao'=>$request->descricao,
            ]);
            
        return redirect()->route('turmas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Turma::destroy($id);
        return redirect()->route('turmas.index');
    }
}
