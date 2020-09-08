@extends('layouts.app')

@section('title')
    Excluir
@endsection

@section('content-header')
    <div class="col-6">
        <h1>Excluir Livro</h1>
    </div>
@endsection

@section('content')
        <form method="post" action="/livros/excluir/{{ $livro->id }}">
            @csrf
            @include('livros.__form')
            <div class="row mt-2">
                <div class="col-12">
                    <div class="float-right">
                        <button type="submit" class="btn btn-warning mr-1">Excluir</button>
                        <a href="{{ route('listar_livros') }}" class="btn btn-danger">Cancelar</a>
                    </div>
                </div>
            </div>
        </form>
@endsection
    