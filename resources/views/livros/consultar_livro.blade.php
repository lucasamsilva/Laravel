@extends('layouts.app')

@section('title')
    Incluir
@endsection

@section('content-header')
    <div class="col-6">
        <h1>Novo Livro</h1>
    </div>
@endsection

@section('content')
        <form>
            @csrf
            @include('livros.__form')
            <div class="row mt-2">
                <div class="col-12">
                    <div class="float-right">
                        <a href="{{ route('listar_livros') }}" class="btn btn-warning">Voltar</a>
                    </div>
                </div>
            </div>
        </form>
@endsection
    