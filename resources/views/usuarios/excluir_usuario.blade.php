@extends('layouts.app')

@section('title')
    Alterar
@endsection

@section('content-header')
    <div class="col-6">
        <h1>Alterar Usuario</h1>
    </div>
@endsection

@section('content')
    <form method="post" action="">
        @csrf
        @include('usuarios.__form')
        <div class="row mt-2">
            <div class="col-12">
                <div class="float-right">
                    <button type="submit" class="btn btn-danger mr-1">Excluir</button>
                    <a href="{{ route('listar_usuarios') }}" class="btn btn-success">Cancelar</a>
                </div>
            </div>
        </div>
    </form>
@endsection
