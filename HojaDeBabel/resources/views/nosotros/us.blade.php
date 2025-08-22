@extends('layouts.app')

@section('title', 'Hoja de Babel')

@section('content')
    <div class="bg-dark">
        <div class="container">
            <div class="header-home">
                <div class="titulo2">¿Quiénes Somos?</div>
                <br>
                <br>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="textV2">
                        <div>Somos un punto de encuentro digital y colaborativo en el que confluyen distintas expresiones artísticas contemporáneas. Esperamos, a través del relacionamiento que ofrecemos entre obras, autores/as y personas que conforman  a la audiencia de Hoja de Babel, contribuir al tejido social a través de la generación de  una comunidad horizontal, dialogante y con una mirada crítica de los sucesos que atañen a nuestra sociedad. </div>
                        <br>
                        <div class="divisionV3"></div>
                        <br>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="cardV2">
                        <img src="{{ asset('img/nosotros/nosotrosXago.jpg') }}" alt="Santiago Garrido" class="imgV1">
                    </div>
                </div>
                <div class="col-md-6 mt-1">
                    <div class="textV2">
                        <div>Santiago Garrido y Díaz (San Felipe, 1996) es el miembro fundador de Hoja de Babel. Durante su formación como Comunicador Audiovisual y Escritor, vio la necesidad de ampliar los espacios disponibles para que las y los artistas desprovistos de recursos y redes de contacto en las "altas esferas de la cultura", pudieran publicar sus obras de manera íntegra y con alcance nacional, rompiendo con los límites del centralismo que caracteriza a nuestro país. Por este motivo, y movilizado por su sensibilidad hacia el arte incipiente, decidió fundar este espacio.</div>
                        <br>
                    </div>
                </div>
                
            </div>
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="divisionV3"></div>
                    <br>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 mt-1 order-2 order-md-1">
                    <div class="textV2">
                        <div>Javiera Carrillo Avendaño (Santiago, 1995), es Periodista y Comunicadora Social. Ha tenido la posibilidad de participar en distintos proyectos dedicados a la gestión cultural, entre ellos, un Plan de Fomento Lector para una empresa multinacional del sector privado de nuestro país, que devino en la conformación de su primera Comunidad Lectora. Este proyecto abrió una puerta en la vida laboral de Javiera que nunca más pudo ni quiso volver a cerrar desde entonces: aquella dedicada a la democratización de las artes y la cultura desde el ejercicio de su profesión, con la intención de contribuir al diálogo ciudadano, para que nadie quede fuera de él por falta de acceso, oportunidades de publicación o desconocimiento. Javiera colabora en Hoja de Babel como Editora y Productora Periodística.</div>
                        <br>
                    </div>
                </div>
                <div class="col-md-3 order-1 order-md-2">
                    <div class="cardV2">
                        <img src="{{ asset('img/nosotros/nosotrosJavi.jpg') }}" alt="Santiago Garrido" class="imgV1">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
