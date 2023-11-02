<div class="container-fluid ">
    <h1 class="titulos mt-5 mb-5 text-center titulo">NOTICIAS</h1>

    <?php
    usort($noticias, function ($a, $b) {
        $dateComparison = strtotime($b['fecha']) - strtotime($a['fecha']);
        if ($dateComparison === 0) {
            return $b['id_noticia'] - $a['id_noticia'];
        }
        return $dateComparison;
    });

    ?>

    <a href="<?php echo base_url('nueva_noticia'); ?>" class="btn btn-primary">Nueva Noticia</a>
    <table class="table mt-3">
        <thhead>
            <th>Titulo</th>
            <th>Copete</th>
            <th>Cuerpo</th>
            <th>Imagen</th>
            <th>Editar</th>
            <th>Borrar</th>
            </thead>


            <tbody>
                <?php foreach ($noticias as $row) { ?>

                    <tr>
                        <td>
                            <?php echo $row['titulo']; ?>
                        </td>
                        <td>
                            <?php echo $row['copete']; ?>
                        </td>
                        <td>
                            <?php echo $row['cuerpo']; ?>
                        </td>

                        <td><img src="<?php echo base_url('assets/img/' . $row['imagen']); ?>" alt="" height="100"
                                width="100">
                        </td>
                        <td><a class="btn btn-success"
                                href="<?php echo base_url('editar/' . $row['id_noticia']); ?>">Editar</a></td>
                        <?php
                        if ($row['noticia_estado'] == 1) { ?>
                            <td><a class="btn btn-danger"
                                    href="<?php echo base_url('eliminar/' . $row['id_noticia']); ?>">Desactivar</a></td>
                        <?php } else {
                            ?>
                            <td><a class="btn btn-danger"
                                    href="<?php echo base_url('activar/' . $row['id_noticia']); ?>">Activar</a></td>
                        <?php } ?>
                    </tr>

                <?php } ?>
            </tbody>

    </table>
</div>