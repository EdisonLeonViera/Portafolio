@extends('layouts.app')

@section('title', 'Hoja de Babel')

@section('content')
    <div class="bg-dark">
        <div class="container">
            <div class="header-home">
                <div class="titulo">hoja<div class="tituloP2">de</div>babel</div>
            </div>
            <div class="row justify-content-center">

              <!-- Imagen versión móvil -->
                <div class="col-md-3 d-md-none">
                    <div class="cardV1">
                      <a href="{{ route('paginasEstaticas.pasajesmetadimensionales') }}" class="linkV1">
                        <img src="{{ asset('img/inicio/fotoportadaitacacuadrada.jpg') }}" alt="Ítaca de Cavafis" class="imgV1">
                      </a>
                    </div>
                </div>


              <!-- Imagen versión escritorio -->
                <div class="col-md-9 mt-1 d-md-block">
                    <div class="cardV1">
                      <a href="{{ route('paginasEstaticas.pasajesmetadimensionales') }}" class="linkV1">
                        <img src="{{ asset('img/inicio/portadainicioV1.jpg') }}" alt="Ítaca de Cavafis" class="imgV1">
                      </a>
                    </div>
                </div>

            </div>
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="cardV1">
                      <a href="#" class="linkV1">
                        <img src="{{ asset('img/pasajesportada.jpg') }}" alt="Ítaca de Cavafis" class="imgV1">
                      </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cardV1">
                      <a href="#" class="linkV1">
                        <img src="{{ asset('img/pasajesportada.jpg') }}" alt="Una noche de malviajarse" class="imgV1">
                      </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cardV1">
                      <a href="#" class="linkV1">
                        <img src="{{ asset('img/pasajesportada.jpg') }}" alt="Sinfonía del instinto" class="imgV1">
                      </a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="cardV1">
                      <a href="#" class="linkV1">
                        <img src="{{ asset('img/pasajesportada.jpg') }}" alt="Ítaca de Cavafis" class="imgV1">
                      </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cardV1">
                      <a href="#" class="linkV1">
                        <img src="{{ asset('img/pasajesportada.jpg') }}" alt="Una noche de malviajarse" class="imgV1">
                      </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cardV1">
                      <a href="#" class="linkV1">
                        <img src="{{ asset('img/pasajesportada.jpg') }}" alt="Sinfonía del instinto" class="imgV1">
                      </a>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
@endsection
