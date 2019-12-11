<?php

namespace App\Http\Controllers;

use App\TipoOcorrencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TipoOcorrenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiposocorrencias = TipoOcorrencia::all();
        return view('tiposocorrencias.index', compact('tiposocorrencias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tiposocorrencias = TipoOcorrencia::all();
        return view('tiposocorrencias.create', compact('tiposocorrencias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        TipoOcorrencia::create($request->all());
        return redirect()->route('tiposocorrencias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TipoOcorrencia  $tipoOcorrencia
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoocorrencia = TipoOcorrencia::find($id);
        return view('tiposocorrencias.show',compact('tipoocorrencia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TipoOcorrencia  $tipoOcorrencia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoocorrencia = TipoOcorrencia::find($id);
        return view('tiposocorrencias.edit',compact('tipoocorrencia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipoOcorrencia  $tipoOcorrencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('tiposocorrencias')
            ->where('id',$id)
            ->update([
                'descricao'=>$request->descricao,
            ]);
            
        return redirect()->route('tiposocorrencias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipoOcorrencia  $tipoOcorrencia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TipoOcorrencia::destroy($id);
        return redirect()->route('tiposocorrencias.index');
    }
}
