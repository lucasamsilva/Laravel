@extends('layouts.app')

@section('title')
    Alterar
@endsection

@section('content-header')
    <div class="col-6">
        <h1>Alterar Cliente</h1>
    </div>
@endsection

@section('content')
<form method="post" action="/alterar_cliente/{{$cliente->id}}">
            @csrf
            @include('cliente.__form')
            <input type="hidden" value="{{ $cliente->id }}">
            <div class="row mt-2">
                <div class="col-12">
                    <div class="float-right">
                        <button type="submit" class="btn btn-warning mr-1">Alterar</button>
                        <a href="{{ route('listar_clientes') }}" class="btn btn-danger">Cancelar</a>
                    </div>
                </div>
            </div>
        </form>
@endsection
    