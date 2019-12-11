@extends('adminlte::page')

@section('title', 'Cadastro de Ocorrências')

@section('content_header')
<h1>Cadastro de Ocorrências</h1>
@stop

@section('content')

<form action="{{ route('ocorrencias.store') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="panel panel-default">
        <div class="panel-heading">
            Informe os dados da Ocorrência.
        </div>

        <div class="panel-body">

            <div class="form-group">
                <label for="nome">Descrição</label>
                <input type="text" id="descricao" name="descricao" class="form-control" placeholder="Ex.: ...">
            </div>

            <div class="panel-footer">
                <a href="{{ route('ocorrencias.index') }}" class="btn btn-default">Cancelar</a>
                <button type="submit" class="btn btn-success">Gravar</button>

            </div>

        </div>
</form>

@stop

@section('css')
@stop

@section('js')
@stop
