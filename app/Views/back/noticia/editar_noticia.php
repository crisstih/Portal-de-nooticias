


<?php if (session()->getFlashdata('mensaje_editado')) {
            echo "
            <div class='mt-3 mb-3 h4 text-center alert alert-success alert-dismissible'>
            <button type='button' class='btn-close' data-bs-dismiss='alert'></button>" . session()->getFlashdata('mensaje_editado') . "
            </div>";
        } ?>

<div class="container total">

    <h1 class="text-center mt-4">Edición de Noticia</h1>
    <div class="w-50 mx-auto"> 
        <?php echo form_open_multipart('actualizar')?>

        <div class="form-group">
            <label for="titulo">Título</label>
            <?php echo form_input(['name' => 'titulo', 'class' => 'form-control', 'autofocus' => 'autofocus', 'value' =>$noticia['titulo']]);?>
            <p class="is-danger"><?=session('errors.titulo')?></p>
        </div>

        <div class="form-group">
            <label for="autor">Autor</label>
            <?php echo form_input(['name' => 'autor', 'class' => 'form-control','value' => $noticia['autor']]);?>
            <p class="is-danger"><?=session('errors.autor')?></p>

        </div>

        <div class="form-group">
            <label for="copete">Copete</label>
            <?php echo form_input(['name' => 'copete', 'class' => 'form-control','value' => $noticia['copete']]);?>
            <p class="is-danger"><?=session('errors.copete')?></p>
        </div>

        <div class="form-group">
            <label for="cuerpo">Cuerpo</label>
            <?php echo form_input(['name' => 'cuerpo', 'class' => 'form-control','value' => $noticia['cuerpo']]);?>
            <p class="is-danger"><?=session('errors.cuerpo')?></p>
        </div>

        <div class="form-group"> 
            <label for="imagen"></label>
            <img src="<?php echo base_url('assets/img/'.$noticia['imagen']);?>" alt="" height="100" width="100">
            <?php echo form_input(['name' => 'imagen', 'id' => 'imagen', 'type' => 'file']);?>
            <p class="is-danger"><?=session('errors.imagen')?></p>
        </div>

        <?php echo form_hidden('id_noticia', $noticia['id_noticia']);?>


     
        <button type="submit" class='btn btn-success'>Modificar</button>

    </div>
    <?php form_close();?>

</div>

