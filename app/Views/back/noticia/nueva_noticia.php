<div class="container-fluid">
    <h1 class="text-center  mt-5 mb-5 titulo">NUEVA NOTICIA</h1>
    <div class="w-50 mx-auto mt-5">
        <?php if (isset($validation)){ ?>
        <div class="alert-danger">
            <?= $validation -> listErrors();?>
        </div>
        <?php }?>

        <?php echo form_open_multipart('agregar_noticia');?>
        <div class="form-group">
        <h4><label for="titulo" class="titulos">Título</label></h4>
            <?php echo form_input(['name'=> 'titulo', 'id' => 'titulo', 'class' => 'form-control', 'placeholder' => 'Ingrese título de la noticia', 'value' => set_value('titulo')]);?>
            <p class="is-danger">
                <?=session('errors.titulo')?>
            </p>
        </div>

        <div class="form-group">
            
            <div class="form-group">
                <h4><label for="copete" class="titulos">Copete</label></h4>
                <?php echo form_input(['name'=> 'copete', 'id' => 'copete', 'class' => 'form-control', 'placeholder' => 'Ingrese copete de la noticia', 'value' => set_value('copete')]);?>
                <p class="is-danger">
                    <?=session('errors.copete')?>
                </p>

                <h4><label for="autor" class="titulos">Autor</label></h4>
            <?php echo form_input(['name'=> 'autor', 'id' => 'autor', 'class' => 'form-control', 'placeholder' => 'Ingrese autor de la noticia', 'value' => set_value('autor')]);?>
            <p class="is-danger">
                <?=session('errors.autor')?>
            </p>

            </div>

            <div class="form-group">
                <h4><label for="cuerpo" class="titulos">Cuerpo</label></h4>
                <?php echo form_textarea(['name'=> 'cuerpo', 'id' => 'cuerpo', 'class' => 'form-control', 'placeholder' => 'Ingrese cuerpo de la noticia', 'value' => set_value('cuerpo')]);?>
                <p class="is-danger">
                    <?=session('errors.cuerpo')?>
                </p>
            </div>


            <div class="form-group">
                <h4><label for="imagen" class="titulos">Imagen</label></h4>
                <?php echo form_input(['name'=> 'imagen', 'id' => 'imagen', 'type' => 'file', 'value' => set_value('imagen')]);?>
                <p class="is-danger">
                    <?=session('errors.imagen')?>
                </p>
            </div>

            <div class="form-group mt-3 mb-4">
                <?php echo form_submit('Agregar', 'Agregar', "class='btn btn-success btn-expand'");?>
            </div>

            <?php echo form_close();?>

        </div>
    </div>
    </div>
</div>