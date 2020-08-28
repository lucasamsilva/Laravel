@extends('layouts.app')

@section('title')
    Consultar
@endsection

@section('content-header')
    <div class="col-6">
        <h1>Consultar Cliente</h1>
    </div>
@endsection

@section('content')
        <form>
            @csrf
            @include('cliente.__form')
            <input type="hidden" value="{{ $cliente->id }}">
            <div class="row mt-2">
                <div class="col-12">
                    <div class="float-right">
                        <a href="{{ route('listar_clientes') }}" class="btn btn-warning"><i class="fa fa-arrow-left mr-1"></i>Voltar</a>
                    </div>
                </div>
            </div>
        </form>
@endsection
    