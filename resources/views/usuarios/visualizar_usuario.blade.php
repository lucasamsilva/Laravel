@extends('layouts.app')

@section('title')
    Visualizar
@endsection

@section('content-header')
    <div class="col-6">
        <h1>Visualizar Usuario</h1>
    </div>
@endsection

@section('content')
    <form>
        @csrf
        @include('usuarios.__form')
        <div class="row mt-2">
            <div class="col-12">
                <div class="float-right">
                    <a href="{{ route('listar_usuarios') }}" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </div>
    </form>
@endsection
