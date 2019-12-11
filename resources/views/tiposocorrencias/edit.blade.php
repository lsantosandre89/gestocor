@extends('adminlte::page')

@section('title', 'Edição de Tipo de Ocorrência')

@section('content_header')
    <h1>Edição de Tipo de Ocorrência</h1>
@stop

@section('content')
<form action="{{ route('tiposocorrencias.update', $tipoocorrencia->id) }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}

    <input type="hidden" name="_method" value="PUT">
    <div class="panel panel-default">
        <div class="panel-heading">
            Informe os dados do Tipo de Ocorrência.
        </div>

        <div class="panel-body">

            <div class="form-group">
                <label for="ra">Descrição</label>
                <input required type="text" id="descricao" name="descricao" class="form-control" value="{{ $tipoocorrencia->descricao }}" placeholder="Ex.: Comportamental">
            </div>

            <div class="panel-footer">
                <a href="{{ route('tiposocorrencias.index') }}" class="btn btn-default">Cancelar</a>
                <button type="submit" class="btn btn-success">Gravar</button>

            </div>

        </div>
</form>
@stop

@section('css')
@stop

@section('js')
@stop