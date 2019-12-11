@extends('adminlte::page')

@section('title', 'Visualização de Aluno')

@section('content_header')
    <h1>Visualização de Aluno</h1>
@stop

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        Detalhes dos dados do aluno
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-2">
                Nome
            </div>
            <div class="col-sm-10">
                {{ $aluno->nome }}
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                RA
            </div>
            <div class="col-sm-10">
                {{ $aluno->ra }}
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                Turma
            </div>
            <div class="col-sm-10">
                {{ $turma->descricao }}
            </div>
        </div>
    </div>
    <div class="panel-footer">
        <a href="{{ route('alunos.index') }}" class="btn btn-default">Voltar</a>
    </div>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop