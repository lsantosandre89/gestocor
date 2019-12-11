<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\Materia;
use App\TipoOcorrencia;
use App\Ocorrencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
        $alunos = Aluno::all();
        $materias = Materia::all();
        $tiposocorrencias = TipoOcorrencia::all();
        $user = Auth::user();
        return view('ocorrencias.create', compact('alunos','materias','tiposocorrencias','user'));
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
    public function show($id)
    {
        $ocorrencia = Ocorrencia::find($id);
        return view('ocorrencias.show',compact('ocorrencia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ocorrencia  $ocorrencia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ocorrencia = Ocorrencia::find($id);
        $alunos = Aluno::all();
        $materias = Materia::all();
        $tiposocorrencias = TipoOcorrencia::all();
        $user = Auth::user();
        return view('ocorrencias.edit',compact('ocorrencia','alunos','materias','tiposocorrencias','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ocorrencia  $ocorrencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('ocorrencias')
            ->where('id',$id)
            ->update([
                'alunos_id'=>$request->alunos_id,
                'materias_id'=>$request->materias_id,
                'tipos_id'=>$request->tipos_id,
                'users_id'=>$request->users_id,
                'descricao'=>$request->descricao,
                'data'=>$request->data,
            ]);
            
        return redirect()->route('ocorrencias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ocorrencia  $ocorrencia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ocorrencia::destroy($id);
        return redirect()->route('ocorrencias.index');
    }
}
