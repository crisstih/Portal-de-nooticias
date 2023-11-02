
<?php if (session()->get('mensaje_registro')) { ?>
    <div class="alert alert-success" role="alert">
        <?php echo session()->get('mensaje_registro'); ?>
        <?php } ?>
    </div>

<div class="container-fluid">
    <h1 class="text-center titulos mt-5 mb-5">Listado de Usuarios</h1>


    <table id="mytable" class="mt-5 table  table-striped table-hover">
        <thead>
            <tr>
                <th>N° de usuario</th>
                <th>Apellido</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Usuario</th>
                <th>Editar</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $row) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['apellido']; ?></td>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><?php echo $row['correo']; ?></td>
                    <td><?php echo $row['usuario']; ?></td>
                    <td><a class="btn btn-success" href="<?php echo base_url('editar_usuario/'. $row['id']); ?>">Editar</a></td>
                    <?php
                if ($row['estado']==1)
                {?>
                    <td><a class="btn btn-danger" href="<?php echo base_url('eliminar_usuario/'.$row['id']);?>">Desactivar</a></td>
                    <?php } else {
                    ?>
                    <td><a class="btn btn-danger" href="<?php echo base_url('activar_usuario/'.$row['id']);?>">Activar</a></td>
                    <?php } ?>
                </tr>
                <?php } ?>
                </tr>
        </tbody>
    </table>
</div>