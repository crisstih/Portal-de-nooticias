<div class="container text-center">
        <div class="noticia-container">
            <h1 class="noticia-title mb-5 mt-3 titulo">Detalles de la Noticia</h1>
            <div>
                <div class="card-body">
                    <img src="<?php echo base_url('/assets/img/'.$noticia['imagen']); ?>" class="noticia-image img-fluid" alt="Imagen de la noticia">
                    <h4 class="card-title"><?php echo $noticia['titulo']; ?></h4>
                    <p class="card-text"><?php echo $noticia['copete']; ?></p>
                    <p class="card-text">Autor: <?php echo $noticia['autor']; ?></p>
                    <p class="card-text">Fecha: <?php echo $noticia['fecha']; ?></p>
                    <h6 class="text-justify lead"><?php echo $noticia['cuerpo']; ?></h6>
                </div>
            </div>
            <a href="<?php echo base_url('/'); ?>" class="btn btn-primary mt-4 mb-4">Volver a la lista de noticias</a>
        </div>
    </div>