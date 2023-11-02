<div class="container-fluid text-center">
    <div class="container-imagen">
        <img src="<?php echo base_url('assets/img/logo.png'); ?>" class="mx-auto" alt="logo" height="200" width="300">
    </div>

    <h1 class="mt-5 mb-5 justify-content-start titulo">¡ULTIMAS NOTICIAS!</h1>
    <div class="row">
        <?php
        usort($noticias, function ($a, $b) {
            $dateComparison = strtotime($b['fecha']) - strtotime($a['fecha']);
            if ($dateComparison === 0) {
                return $b['id_noticia'] - $a['id_noticia'];
            }
            return $dateComparison;
        });
        ?>

        <?php
        $contador = 0;
        $ultima_noticia = null;
        ?>
        <?php foreach ($noticias as $row) {
            if ($contador < 10) {
                $ultima_noticia = $row;
        ?>
                <div class="col-md-6">
                    <a href="<?php echo base_url('ver_noticia/' . $row['id_noticia']); ?>" class="text-decoration-none">
                        <div class="card">
                        <div>
                            <img src="<?php echo base_url('../assets/img/' . $row['imagen']); ?>" class="d-block mx-auto img-fluid" alt="imagen-noticia">
                        </div>    
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?php echo $row['titulo']; ?>
                                </h5>
                                <p>
                                    <?php echo $row['fecha']; ?>
                                </p>
                                <p class="card-text">
                                    <?php echo $row['copete']; ?>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
        <?php
                $contador++;
            }
        }
        ?>
    </div>
</div>
