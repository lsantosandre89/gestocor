@extends('adminlte::page')

@section('title', 'Cadastro de Turmas')

@section('content_header')
<h1>Cadastro de Turmas</h1>
@stop

@section('content')

<form action="{{ route('turmas.store') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="panel panel-default">
        <div class="panel-heading">
            Informe os dados da Turma.
        </div>

        <div class="panel-body">

            <div class="form-group">
                <label for="descricao">Descrição</label>
                <input required type="text" id="descricao" name="descricao" class="form-control" placeholder="Ex.: 1ª Série">
            </div>
        </div>

        <div class="panel-footer">
            <a href="{{ route('turmas.index') }}" class="btn btn-default">Cancelar</a>
            <button type="submit" class="btn btn-success">Gravar</button>
        </div>
</form>

@stop

@section('css')
@stop

@section('js')
@stop
