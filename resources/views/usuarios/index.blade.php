@extends('layouts.app')

@section('title')
    Listar Usuarios
@endsection

@section('content-header')
    <div class="col-6">
        <h1>Lista de Usuarios</h1>
    </div>
    <div class="col-6">
        <a href="{{ route('novo_usuario') }}" class="btn btn-success float-sm-right"><i class="fa fa-plus mr-2"></i>Novo Usuário</a>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12 table-responsive">
            <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Sexo</th>
                        <th>Ativo ?</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                        <tr>
                            <td>{{ $usuario->name }}</td>
                            <td>{{ $usuario->email }}</td>
                            <td>{{ $usuario->sexo }}</td>
                            <td><input type="checkbox" onclick="return false" @if ($usuario->is_active  == 1) checked @endif></td>
                            <td>
                            <a class="btn btn-dark" href="usuarios/{{ $usuario->id }}"><i class="fa fa-address-card-o"></i></a>
                            <a class="btn btn-warning" href="usuarios/alterar/{{ $usuario->id }}"><i class="fa fa-pencil" style="color: #FFF"></i></a>
                            <a class="btn btn-danger" href="usuarios/excluir/{{ $usuario->id }}"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="float-right">
                {{ $usuarios ?? ''->links() }}
            </div>
        </div>
    </div>
@endsection
