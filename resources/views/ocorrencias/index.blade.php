@extends('adminlte::page')

@section('title', 'Cadastro de Ocorrências')

@section('content_header')
<h1>Cadastro de Ocorrências</h1>
@stop

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">
        <div class="pull-rigth">
            <a href="{{route('ocorrencias.index') }}" class="btn btn-info"><i class="fas fa-fx fa-sync-alt"></i> Atualizar a Tela</a>
            <a href="{{route('ocorrencias.create') }}" class="btn btn-success"><i class="fas fa-fx fa-plus"></i> Incluir Novo Registro</a>
        </div>
    </div>

    <div class="panel body">
        <table id="table-ocorrencias" class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>Aluno</th>
                    <th>Matéria</th>
                    <th>Tipo Ocorrência</th>
                    <th>Usuário</th>
                    <th>Data Ocorrência</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                @foreach($ocorrencias as $ocorrencia)
                <tr>
                    <td>{{$ocorrencia->aluno->nome}}</td>
                    <td>{{$ocorrencia->materia->nome}}</td>
                    <td>{{$ocorrencia->tipo->descricao }}</td>
                    <td>{{$ocorrencia->usuario->name }}</td>
                    <td>{{$ocorrencia->data}}</td>
                    <td>
                        <a href="{{ route('ocorrencias.edit', $ocorrencia->id) }}" class="btn btn-warning"><i class="fas fa-fx fa-edit"></i></a>
                        <a href="{{ route('ocorrencias.show', $ocorrencia->id) }}" class="btn btn-info"><i class="fas fa-fx fa-eye"></i></a>
                        <form action="{{ route('ocorrencias.destroy', $ocorrencia->id) }}" method="POST" onsubmit="return confirm('Você tem certeza que deseja excluir este registro?');" style="display: inline-block;">
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
    @stop
    @section('js')
    <script>
        $(document).ready(function() {
            $('#table-ocorrencias').DataTable({
                language: {
                    url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json",
                },
            });
        });
    </script>
    @stop
