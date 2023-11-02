<!--Navbar-->

<?php
$session = session();
$nombre = $session->get('nombre');
?>


<nav id="navbar" class="navbar custom-navbar navbar-expand-lg sticky-top bg-white">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img class="rounded-circle" src="<?php echo base_url('/assets/img/logo.png'); ?>" alt="logo"
            width="100" height="100">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!--navbar para administradores-->


        <div class="collapse navbar-collapse gap-2" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('inicio_admin'); ?>">INICIO</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('listar_noticias'); ?>">NOTICIAS</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('usuarios'); ?>">USUARIOS</a>
                </li>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('logout'); ?>">SALIR</a>
                    </li>

                    <li>
                        <div class="btn">
                            <a href="" class="text-decoration-none text-success">ADMINISTRADOR:
                                <?php echo session('nombre'); ?>
                            </a>
                        </div>
        </div>



    </div>

</nav>