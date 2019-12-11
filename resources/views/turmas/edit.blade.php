@extends('adminlte::page')

@section('title', 'Edição de Turma')

@section('content_header')
    <h1>Edição de Turma</h1>
@stop

@section('content')
<form action="{{ route('turmas.update', $turma->id) }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}

    <input type="hidden" name="_method" value="PUT">
    <div class="panel panel-default">
        <div class="panel-heading">
            Informe os dados da Turma.
        </div>

        <div class="panel-body">

            <div class="form-group">
                <label for="ra">Descrição</label>
                <input required type="text" id="descricao" name="descricao" class="form-control" value="{{ $turma->descricao }}" placeholder="Ex.: 1ª Série">
            </div>

            <div class="panel-footer">
                <a href="{{ route('turmas.index') }}" class="btn btn-default">Cancelar</a>
                <button type="submit" class="btn btn-success">Gravar</button>

            </div>

        </div>
</form>
@stop

@section('css')
@stop

@section('js')
@stop