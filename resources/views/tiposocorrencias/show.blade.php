@extends('adminlte::page')

@section('title', 'Visualização de Tipo de Ocorrência')

@section('content_header')
    <h1>Visualização de Tipo de Ocorrência</h1>
@stop

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        Detalhes dos dados do Tipo de Ocorrência
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-2">
                Descrição
            </div>
            <div class="col-sm-10">
                {{ $tipoocorrencia->descricao }}
            </div>
        </div>
    </div>
    <div class="panel-footer">
        <a href="{{ route('tiposocorrencias.index') }}" class="btn btn-default">Voltar</a>
    </div>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop