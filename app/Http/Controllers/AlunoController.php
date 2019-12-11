<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\Turma;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::all();
        return view('alunos.index', compact('alunos'));
    }

    public function create()
    {
//        $alunos = Aluno::all();
        $turmas = Turma::all();
//        return view('alunos.create', compact('alunos'));
        return view('alunos.create', compact('turmas'));
    }

    public function store(Request $request)
    {
        Aluno::create($request->all());
        return redirect()->route('alunos.index');
    }

    public function show($id)
    {
        $aluno = Aluno::find($id);
        $turma = Turma::find($aluno->turmas_id);
        return view('alunos.show',compact('aluno'),compact('turma'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aluno = Aluno::find($id);
        $turmas = Turma::all();
        return view('alunos.edit',compact('aluno'),compact('turmas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Exibe os valores das variáveis entre parênteses
        //dd($id,$request);

        DB::table('alunos')
            ->where('id',$id)
            ->update([
                'ra'=>$request->ra,
                'nome'=>$request->nome,
                'turmas_id'=>$request->turmas_id,
            ]);
            
        return redirect()->route('alunos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Aluno::destroy($id);
        return redirect()->route('alunos.index');
    }
}
