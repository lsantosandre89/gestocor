<?php

namespace App\Http\Controllers;

use App\NiveisAcesso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NiveisAcessoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $niveisacessos = NiveisAcesso::all();
        return view('niveisacessos.index', compact('niveisacessos'));
    }
    public function create()
    {
        $niveisacessos = NiveisAcesso::all();
        return view('niveisacessos.create', compact('niveisacessos'));
    }
    public function store(Request $request)
    {
        NiveisAcesso::create($request->all());
        return redirect()->route('niveisacessos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NiveisAcesso  $niveisAcesso
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $niveisacesso = NiveisAcesso::find($id);
        return view('niveisacessos.show',compact('niveisacesso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NiveisAcesso  $niveisAcesso
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $niveisacesso = NiveisAcesso::find($id);
        return view('niveisacessos.edit',compact('niveisacesso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NiveisAcesso  $niveisAcesso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('niveisacesso')
            ->where('id',$id)
            ->update([
                'nome'=>$request->nome,
            ]);
            
        return redirect()->route('niveisacessos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NiveisAcesso  $niveisAcesso
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        NiveisAcesso::destroy($id);
        return redirect()->route('niveisacessos.index');
    }
}
