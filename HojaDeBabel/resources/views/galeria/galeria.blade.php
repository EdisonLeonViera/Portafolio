@extends('layouts.app')

@section('title', 'Hoja de Babel')

@section('content')
    <div class="bg-dark">
        <div class="container">
            <div class="header-home">
                <div class="titulo2">Galeria</div>
            </div>
            <div class="row justify-content-center" style="text-align: center;">
                <div class="col-md-3">
                    <div class="cardV1">
                      <a  href="{{ route('paginasEstaticas.pasajesmetadimensionales') }}" class="linkV1" style="text-decoration: none;">
                        <img src="{{ asset('img/pasajesportada.jpg') }}" alt="Pasajes (meta) Dimensionales" class="imgV1">
                      </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
