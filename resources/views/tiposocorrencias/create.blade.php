@extends('adminlte::page')

@section('title', 'Cadastro de Tipos de Ocorrências')

@section('content_header')
<h1>Cadastro de Tipos de Ocorrências</h1>
@stop

@section('content')

<form action="{{ route('tiposocorrencias.store') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="panel panel-default">
        <div class="panel-heading">
            Informe os dados do Tipo de Ocorrência.
        </div>

        <div class="panel-body">

            <div class="form-group">
                <label for="descricao">Descrição</label>
                <input required type="text" id="descricao" name="descricao" class="form-control" placeholder="Ex.: Disciplinar">
            </div>
        </div>

        <div class="panel-footer">
            <a href="{{ route('tiposocorrencias.index') }}" class="btn btn-default">Cancelar</a>
            <button type="submit" class="btn btn-success">Gravar</button>
        </div>
</form>

@stop

@section('css')
@stop

@section('js')
@stop
