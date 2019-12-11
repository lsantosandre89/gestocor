@extends('adminlte::page')

@section('title', 'Cadastro de Tipos de Ocorrências')

@section('content_header')
<h1>Cadastro de Tipos de Ocorrências</h1>
@stop

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">
        <div class="pull-rigth">
            <a href="{{route('tiposocorrencias.index') }}" class="btn btn-info"><i class="fas fa-fx fa-sync-alt"></i> Atualizar a Tela</a>
            <a href="{{route('tiposocorrencias.create') }}" class="btn btn-success"><i class="fas fa-fx fa-plus"></i> Incluir Novo Registro</a>
        </div>
    </div>

    <div class="panel body">
        <table id="table-tiposocorrencias" class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>Descricão</th>
                </tr>
            </thead>

            <tbody>
                @foreach($tiposocorrencias as $tipoocorrencia)
                <tr>
                    <td>{{$tipoocorrencia->descricao}}</td>
                    <td>
                        <a href="{{ route('tiposocorrencias.edit', $tipoocorrencia->id) }}" class="btn btn-warning"><i class="fas fa-fx fa-edit"></i></a>
                        <a href="{{ route('tiposocorrencias.show', $tipoocorrencia->id) }}" class="btn btn-info"><i class="fas fa-fx fa-eye"></i></a>
                        <form action="{{ route('tiposocorrencias.destroy', $tipoocorrencia->id) }}" method="POST" onsubmit="return confirm('Você tem certeza que deseja excluir este registro?');" style="display: inline-block;">
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
            $('#table-tiposocorrencias').DataTable({
                language: {
                    url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json",
                },
            });
        });
    </script>
    @stop
