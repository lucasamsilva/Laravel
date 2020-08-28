@extends('layouts.app')

@section('content-header')
    <div class="col-6">
        <h1>Lista de Clientes</h1>
    </div>
    <div class="col-6">
        <a href="{{ route('novo_cliente') }}" class="btn btn-success float-sm-right"><i class="fa fa-plus mr-2"></i>Novo Cliente</a>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12 table-responsive">
            <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Endereço</th>
                        <th>CPF</th>
                        <th>RG</th>
                        <th>Telefone</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)
                        <tr>
                            <td>{{ $cliente->id }}</td>
                            <td>{{ $cliente->nome }}</td>
                            <td>{{ $cliente->endereco }}</td>
                            <td>{{ $cliente->cpf }}</td>
                            <td>{{ $cliente->rg }}</td>
                            <td>{{ $cliente->telefone }}</td>
                            <td>
                            <a class="btn btn-warning" href="clientes/{{ $cliente->id }}"><i class="fa fa-pencil"></i></a>
                            <a class="btn btn-danger" href="clientes/excluir/{{ $cliente->id }}"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $clientes->links() }}
        </div>
    </div>
@endsection
