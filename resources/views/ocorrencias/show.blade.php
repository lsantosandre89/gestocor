@extends('adminlte::page')

@section('title', 'Visualização de Aluno')

@section('content_header')
    <h1>Visualização de Aluno</h1>
@stop

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        Detalhes dos dados da Ocorrência
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-2">
                Nome do aluno
            </div>
            <div class="col-sm-10">
                {{ $ocorrencia->aluno->nome }}
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                Tipo
            </div>
            <div class="col-sm-10">
                {{ $ocorrencia->tipo->descricao }}
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                Matéria
            </div>
            <div class="col-sm-10">
                {{ $ocorrencia->materia->nome }}
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                Cadastrado por
            </div>
            <div class="col-sm-10">
                {{ $ocorrencia->usuario->name }}
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                Data da Ocorrência
            </div>
            <div class="col-sm-10">
                {{ $ocorrencia->data }}
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                Descrição
            </div>
            <div class="col-sm-10">
                {{ $ocorrencia->descricao }}
            </div>
        </div>
    </div>
    <div class="panel-footer">
        <a href="{{ route('ocorrencias.index') }}" class="btn btn-default">Voltar</a>
    </div>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop