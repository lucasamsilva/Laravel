@extends('layouts.app')

@section('title')
    Listar
@endsection

@section('content-header')
    <div class="col-6">
    <h1>Lista de Livros por Autor</h1>
    </div>
    <div class="col-6">
        <a href="{{ route('novo_livro') }}" class="btn btn-success float-sm-right"><i class="fa fa-plus mr-2"></i>Novo Livro</a>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12 table-responsive">
            <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                        <th>Título do Livro</th>
                        <th>Autor</th>
                        <th>Editora</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($livros as $livro)
                        <tr>
                            <td>{{ $livro->titulo }}</td>
                            <td>{{ $livro->autor->nome }}</td>
                            <td><a href="/livros/editora/{{ $livro->editora->id }}">{{ $livro->editora->nome }}</a></td>
                            <td>
                            <a class="btn btn-dark" href="/livros/{{ $livro->id }}"><i class="fa fa-address-card-o"></i></a>
                            <a class="btn btn-warning" href="/livros/alterar/{{ $livro->id }}"><i class="fa fa-pencil" style="color: #FFF"></i></a>
                            <a class="btn btn-danger" href="/livros/excluir/{{ $livro->id }}"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
