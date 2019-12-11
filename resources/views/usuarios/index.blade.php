@extends('adminlte::page')

@section('title', 'Cadastro de Alunos')

@section('content_header')
<h1>Cadastro de Alunos</h1>
@stop

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">
        <div class="pull-rigth">
            <a href="{{route('usuarios.index') }}" class="btn btn-info"><i class="fas fa-fx fa-sync-alt"></i> Atualizar a Tela</a>
            <a href="{{route('usuarios.create') }}" class="btn btn-success"><i class="fas fa-fx fa-plus"></i> Incluir Novo Registro</a>
        </div>
    </div>

    <div class="panel body">
        <table id="table-users" class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Turma</th>
                </tr>
            </thead>

            <tbody>
                @foreach($usuarios as $usuario)
                <tr>
                    <td>{{$usuario->ra}}</td>
                    <td>{{$usuario->nome}}</td>
                    <td>{{$usuario->turma->descricao}}</td>
                    <td>
                        <a href="#" class="btn btn-warning"><i class="fas fa-fx fa-edit"></i></a>
                        <a href="#" class="btn btn-info"><i class="fas fa-fx fa-eye"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-fx fa-trash-alt"></i></a>
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
