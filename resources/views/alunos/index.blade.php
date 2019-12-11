@extends('adminlte::page')

@section('title', 'Cadastro de Alunos')

@section('content_header')
<h1>Cadastro de Alunos</h1>
@stop

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">
        <div class="pull-rigth">
            <a href="{{route('alunos.index') }}" class="btn btn-info"><i class="fas fa-fx fa-sync-alt"></i> Atualizar a Tela</a>
            <a href="{{route('alunos.create') }}" class="btn btn-success"><i class="fas fa-fx fa-plus"></i> Incluir Novo Registro</a>
        </div>
    </div>

    <div class="panel body">
        <table id="table-alunos" class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>Matricula</th>
                    <th>Nome</th>
                    <th>Turma</th>
                </tr>
            </thead>

            <tbody>
                @foreach($alunos as $aluno)
                <tr>
                    <td>{{$aluno->ra}}</td>
                    <td>{{$aluno->nome}}</td>
                    <td>{{$aluno->turma->descricao}}</td>
                    <td>
                        <a href="{{ route('alunos.edit', $aluno->id) }}" class="btn btn-warning"><i class="fas fa-fx fa-edit"></i></a>
                        <a href="{{ route('alunos.show', $aluno->id) }}" class="btn btn-info"><i class="fas fa-fx fa-eye"></i></a>
                        <form action="{{ route('alunos.destroy', $aluno->id) }}" method="POST" onsubmit="return confirm('Você tem certeza que deseja excluir este registro?');" style="display: inline-block;">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-danger"><i class="fas fa-fx fa-trash-alt"></i></button>
                            </form>
                    </td>
                </tr>
                @endforeach
            </tbody>


        </table>
    </div>

    @stop

    @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @stop

    @section('js')
    <script>
        $(document).ready(function() {
            $('#table-alunos').DataTable({
                language: {
                    url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json",
                },
            });
        });
    </script>
    @stop
