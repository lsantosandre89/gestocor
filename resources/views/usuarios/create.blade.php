@extends('adminlte::page')

@section('title', 'Cadastro de Usuários')

@section('content_header')
<h1>Cadastro de Usuários</h1>
@stop

@section('content')

<form action="{{ route('usuarios.store') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="panel panel-default">
        <div class="panel-heading">
            Informe os dados do Usuário.
        </div>

        <div class="panel-body">

            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Ex.: José Silva">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" class="form-control" placeholder="Ex.: jsilva@gmail.com">
            </div>
            <div class="form-group">
                <label for="password">Senha</label>
                <input type="text" id="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <div class="col-auto my-1">
                    <label class="mr-sm-2" for="niveis_id">Tumas</label>
                    <select class="custom-select mr-sm-2" id="niveis_id" name="niveis_id">
                        <option selected>Selecione</option>
                        @foreach($niveis as $nivel)
                        <option value="{{ $nivel->id }}">{{ $nivel->nome }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="panel-footer">
                <a href="{{ route('usuarios.index') }}" class="btn btn-default">Voltar</a>
                <button type="submit" class="btn btn-success">Gravar</button>
                <button type="cancel" class="btn btn-danger">Deletar</button>

            </div>

        </div>
</form>

@stop

@section('css')
@stop

@section('js')
@stop
