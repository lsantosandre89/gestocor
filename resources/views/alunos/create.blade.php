@extends('adminlte::page')

@section('title', 'Cadastro de Alunos')

@section('content_header')
<h1>Cadastro de Alunos</h1>
@stop

@section('content')

<form action="{{ route('alunos.store') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="panel panel-default">
        <div class="panel-heading">
            Informe os dados do Aluno.
        </div>

        <div class="panel-body">

            <div class="form-group">
                <label for="ra">Matricula</label>
                <input required type="text" id="ra" name="ra" class="form-control" placeholder="Ex.: 0125147">
            </div>
            <div class="form-group">
                <label for="nome">Nome</label>
                <input required type="text" id="nome" name="nome" class="form-control" placeholder="Ex.: João Silva">
            </div>
            <div class="form-group">
                <div class="col-auto my-1">
                    <label class="mr-sm-2" for="turmas_id">Turmas</label>
                    <select required class="custom-select mr-sm-2" id="turmas_id" name="turmas_id">
                        <option selected disabled>Selecione</option>
                        @foreach($turmas as $turma)
                        <option value="{{ $turma->id }}">{{ $turma->descricao }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        
        <div class="panel-footer">
                <a href="{{ route('alunos.index') }}" class="btn btn-default">Cancelar</a>
                <button type="submit" class="btn btn-success">Gravar</button>

            </div>
</form>

@stop

@section('css')
@stop

@section('js')
@stop
