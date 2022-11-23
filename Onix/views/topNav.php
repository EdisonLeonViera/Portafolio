<nav class="navbar navbar-expand-lg navbar-light bg-light  fst-italic">
    <div class="container-fluid">
        <a class="navbar-brand fs-2" href="<?php echo constant('URL') ?>/paciente">
            <img src="<?php echo constant('URL') ?>/public/img/logo.png" alt="" width="44" height="44" class="d-inline-block align-text-top">
            Hospital San Nicolas
        </a>
    </div>
    <div class="collapse navbar-collapse w-50 fs-4" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link " href="#"><?php echo $user->getNombre() . ' ' . $user->getapellidoP()." | " ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo constant('URL') ?>/logout">Cerrar Sesion</a>
            </li>
        </ul>
    </div>
</nav>