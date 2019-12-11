@extends('adminlte::page')

@section('title', 'Cadastro de Ocorrências')

@section('content_header')
<h1>Cadastro de Ocorrências</h1>
@stop

@section('content')

<form action="{{ route('ocorrencias.store') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="panel panel-default">
        <div class="panel-heading">
            Informe os dados da Ocorrência.
        </div>

        <div class="panel-body">

            <div class="form-group">
                <label for="descricao">Descrição</label>
                <input required type="text" id="descricao" name="descricao" class="form-control" placeholder="Descreva a ocorrência">
            </div>

            <div class="form-group">
                <label for="data">Data da Ocorrência</label>
                <input required type="datetime-local" id="data" name="data" class="form-control" placeholder="Ex.: AAAA-MM-DD HH:MM:SS">
            </div>

            <div class="form-group">
                <div class="col-auto my-1">
                    <label class="mr-sm-2" for="alunos_id">Aluno</label>
                    <select required class="custom-select mr-sm-2" id="alunos_id" name="alunos_id">
                        <option selected disabled>Selecione</option>
                        @foreach($alunos as $aluno)
                        <option value="{{ $aluno->id }}">{{ $aluno->nome }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-auto my-1">
                    <label class="mr-sm-2" for="materias_id">Matéria</label>
                    <select required class="custom-select mr-sm-2" id="materias_id" name="materias_id">
                        <option selected disabled>Selecione</option>
                        @foreach($materias as $materia)
                        <option value="{{ $materia->id }}">{{ $materia->nome }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-auto my-1">
                    <label class="mr-sm-2" for="tipos_id">Tipo de Ocorrência</label>
                    <select required class="custom-select mr-sm-2" id="tipos_id" name="tipos_id">
                        <option selected disabled>Selecione</option>
                        @foreach($tiposocorrencias as $tipoocorrencia)
                        <option value="{{ $tipoocorrencia->id }}">{{ $tipoocorrencia->descricao }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <input type="hidden" id="users_id" name="users_id" value="{{ $user->id }}">

        </div>

        <div class="panel-footer">
                <a href="{{ route('ocorrencias.index') }}" class="btn btn-default">Cancelar</a>
                <button type="submit" class="btn btn-success">Gravar</button>

            </div>
</form>

@stop

@section('css')
@stop

@section('js')
@stop
