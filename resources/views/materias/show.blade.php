@extends('adminlte::page')

@section('title', 'Visualização de Matéria')

@section('content_header')
    <h1>Visualização de Matéria</h1>
@stop

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        Detalhes dos dados da matéria
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-2">
                Nome
            </div>
            <div class="col-sm-10">
                {{ $materia->nome }}
            </div>
        </div>
    </div>
    <div class="panel-footer">
        <a href="{{ route('materias.index') }}" class="btn btn-default">Voltar</a>
    </div>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop