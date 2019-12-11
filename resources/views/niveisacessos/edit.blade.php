@extends('adminlte::page')

@section('title', 'Edição de Nível de Acesso')

@section('content_header')
    <h1>Edição de Nível de Acesso</h1>
@stop

@section('content')
<form action="{{ route('niveisacessos.update', $niveisacesso->id) }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}

    <input type="hidden" name="_method" value="PUT">
    <div class="panel panel-default">
        <div class="panel-heading">
            Informe os dados do Nível de Acesso.
        </div>

        <div class="panel-body">

            <div class="form-group">
                <label for="ra">Descrição</label>
                <input required type="text" id="nome" name="nome" class="form-control" value="{{ $niveisacesso->nome }}" placeholder="Ex.: Padrão">
            </div>

            <div class="panel-footer">
                <a href="{{ route('niveisacessos.index') }}" class="btn btn-default">Cancelar</a>
                <button type="submit" class="btn btn-success">Gravar</button>

            </div>

        </div>
</form>
@stop

@section('css')
@stop

@section('js')
@stop