@extends('adminlte::page')

@section('title', 'Cadastro de Níveis de Acesso')

@section('content_header')
<h1>Cadastro de Níveis de Acesso</h1>
@stop

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">
        <div class="pull-rigth">
            <a href="{{route('niveisacessos.index') }}" class="btn btn-info"><i class="fas fa-fx fa-sync-alt"></i> Atualizar a Tela</a>
            <a href="{{route('niveisacessos.create') }}" class="btn btn-success"><i class="fas fa-fx fa-plus"></i> Incluir Novo Registro</a>
        </div>
    </div>

    <div class="panel body">
        <table id="table-niveisacesso" class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>Descricão</th>
                </tr>
            </thead>

            <tbody>
                @foreach($niveisacessos as $niveisacesso)
                <tr>
                    <td>{{$niveisacesso->nome}}</td>
                    <td>
                        <a href="{{ route('niveisacessos.edit', $niveisacesso->id) }}" class="btn btn-warning"><i class="fas fa-fx fa-edit"></i></a>
                        <a href="{{ route('niveisacessos.show', $niveisacesso->id) }}" class="btn btn-info"><i class="fas fa-fx fa-eye"></i></a>
                        <form action="{{ route('niveisacessos.destroy', $niveisacesso->id) }}" method="POST" onsubmit="return confirm('Você tem certeza que deseja excluir este registro?');" style="display: inline-block;">
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
            $('#table-niveisacesso').DataTable({
                language: {
                    url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json",
                },
            });
        });
    </script>
    @stop
