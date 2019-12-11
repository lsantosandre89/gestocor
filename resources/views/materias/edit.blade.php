@extends('adminlte::page')

@section('title', 'Edição de Matéria')

@section('content_header')
    <h1>Edição de Matéria</h1>
@stop

@section('content')
<form action="{{ route('materias.update', $materia->id) }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}

    <input type="hidden" name="_method" value="PUT">
    <div class="panel panel-default">
        <div class="panel-heading">
            Informe os dados da Matéria.
        </div>

        <div class="panel-body">

            <div class="form-group">
                <label for="ra">Nome</label>
                <input required type="text" id="nome" name="nome" class="form-control" value="{{ $materia->nome }}" placeholder="Ex.: Matemática">
            </div>
        </div>

        <div class="panel-footer">
                <a href="{{ route('materias.index') }}" class="btn btn-default">Cancelar</a>
                <button type="submit" class="btn btn-success">Gravar</button>

            </div>
</form>
@stop

@section('css')
@stop

@section('js')
@stop