


<?php if (session()->getFlashdata('mensaje_editado')) {
            echo "
            <div class='mt-3 mb-3 h4 text-center alert alert-success alert-dismissible'>
            <button type='button' class='btn-close' data-bs-dismiss='alert'></button>" . session()->getFlashdata('mensaje_editado') . "
            </div>";
        } ?>

<div class="container-fluid">

    <h1 class="text-center titulos mt-5 mb-5">Edición de Usuario</h1>
    <div class="w-50 mx-auto"> 
        <?php echo form_open_multipart('update')?>

        <div class="form-group">
            <h4><label for="nombre" class="titulos">Nombre</label></h4>
            <?php echo form_input(['name' => 'nombre', 'class' => 'form-control', 'autofocus' => 'autofocus', 'value' =>$usuario['nombre']]);?>
            <p class="is-danger"><?=session('errors.nombre')?></p>

        </div>

        <div class="form-group">
            <h4><label for="apellido" class="titulos">Apellido</label></h4>
            <?php echo form_input(['name' => 'apellido', 'class' => 'form-control','value' => $usuario['apellido']]);?>
            <p class="is-danger"><?=session('errors.apellido')?></p>
        </div>

        <div class="form-group">
            <h4><label for="correo" class="titulos">Correo</label></h4>
            <?php echo form_input(['name' => 'correo', 'class' => 'form-control','value' => $usuario['correo']]);?>
            <p class="is-danger"><?=session('errors.correo')?></p>
        </div>

        <div class="form-group">
            <h4><label for="usuario" class="titulos">Usuario</label></h4>
            <label for="usuario">Usuario</label>
            <?php echo form_input(['name' => 'usuario', 'class' => 'form-control','value' => $usuario['usuario']]);?>
            <p class="is-danger"><?=session('errors.usuario')?></p>
        </div>



        <?php echo form_hidden('id', $usuario['id']);?>


        <div class="form-group mt-3 mb-4">
                <?php echo form_submit('Modificar', 'Modificar', "class='btn btn-success'");?>
            </div>

        <?php form_close();?>
    </div>
    

</div>

