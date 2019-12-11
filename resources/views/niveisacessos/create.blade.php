@extends('adminlte::page')

@section('title', 'Cadastro de Níveis de Acesso')

@section('content_header')
<h1>Cadastro de Níveis de Acesso</h1>
@stop

@section('content')

<form action="{{ route('niveisacessos.store') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="panel panel-default">
        <div class="panel-heading">
            Informe os dados do Acesso.
        </div>

        <div class="panel-body">

            <div class="form-group">
                <label for="nome">Descrição</label>
                <input required type="text" id="nome" name="nome" class="form-control" placeholder="Ex.: Padrão">
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
