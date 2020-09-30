@extends('layouts.app')

@section('title')
    Incluir
@endsection

@section('content-header')
    <div class="col-6">
        <h1>Novo Usuario</h1>
    </div>
@endsection

@section('content')
    <form method="post" action="{{ route('salvar_usuario') }}" enctype=”multipart/form-data”>
        @csrf
        @include('usuarios.__form')
        <div class="row mt-2">
            <div class="col-12">
                <div class="float-right mb-1">
                    <button type="submit" class="btn btn-success mr-1">Salvar</button>
                    <a href="{{ route('listar_usuarios') }}" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </div>
    </form>
@endsection
