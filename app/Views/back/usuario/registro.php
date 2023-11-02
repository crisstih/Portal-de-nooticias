<div class="container-fluid bg-color p-4 d-flex justify-content-center ">

  <div class="container col-md-10 p-4 m-5 rounded">

    <div class="container row">

      <div class="text-center mb-5">
        <h2 class="text-center mt-5 titulo">REGISTRARSE</h2>

      </div>

    </div>

    <!--form de registro -->

    <?php $validation = \Config\Services::validation();?>
    <form method="post" action="<?php echo base_url('enviar-form')?>">
      <?=csrf_field();?>
      <?=csrf_field();?>
      <?php if(!empty (session()->getFlashdata('fail'))):?>
      <div class="alert alert-danger"><?=session()->getFlashdata('fail');?></div>
      <?php endif;?>
      <?php if(!empty (session()->getFlashdata('msg'))):?>
      <div class="alert alert-danger"><?=session()->getFlashdata('msg');?></div>
      <?php endif?>


      <div class="row">
        <div class="form mb-3 col-md-6">
          <label for="exampleFormControlInput1" class="form-label text-dark subtitle-form">
            <h4 class="titulos">Nombre</h4>
          </label>
          <input name="nombre" type="text" class="form-control borde-color bg-form" id="exampleFormControlInput1"
            placeholder="Ingrese nombre">

          <!--validacion-->
          <?php if($validation->getErrors('nombre')){?>
          <div class="alert alert-danger mt-2">
            <?= $error = $validation->getError('nombre');?>
          </div>
          <?php } ?>

        </div>

        <div class="mb-3 col-md-6">
          <label for="exampleFormControlInput1" class="form-label text-dark subtitle-form">
            <h4 class="titulos">Apellido</h4>
          </label>
          <input name="apellido" type="text" class="form-control borde-color bg-form" id="exampleFormControlInput1"
            placeholder="Ingrese apellido">

          <!--validacion-->
          <?php if($validation->getErrors('apellido')){?>
          <div class="alert alert-danger mt-2">
            <?= $error = $validation->getError('apellido');?>
          </div>
          <?php } ?>
        </div>

      </div>

      <div class="mt-4">
        <label for="exampleFormControlInput1" class="form-label text-dark subtitle-form">
          <h4 class="titulos">Correo electrónico</h4>
        </label>
        <input name="correo" type="email" class="form-control borde-color bg-form" id="exampleFormControlInput1"
          placeholder="Ingrese correo electrónico">

        <!--validacion-->
        <?php if($validation->getErrors('correo')){?>
        <div class="alert alert-danger mt-2">
          <?= $error = $validation->getError('correo');?>
        </div>
        <?php } ?>
      </div>


        <div class="mb-3 mt-4">
          <label for="exampleFormControlInput1" class="form-label text-dark subtitle-form">
            <h4 class="titulos">Usuario</h4>
          </label>
          <input name="usuario" type="text" class="form-control borde-color bg-form" id="exampleFormControlInput1"
            placeholder="Ingrese usuario">

          <!--validacion-->
          <?php if($validation->getErrors('usuario')){?>
          <div class="alert alert-danger mt-2">
            <?= $error = $validation->getError('usuario');?>
          </div>
          <?php } ?>
      </div>

      <div class="mb-3 mt-4">
        <label for="exampleFormControlInput1" class="form-label text-dark subtitle-form">
          <h4 class="titulos">Contraseña</h4>
        </label>
        <input name="pass" type="password" class="form-control borde-color bg-form" id="exampleFormControlInput1"
          placeholder="Ingrese contraseña">

        <!--validacion-->
        <?php if($validation->getErrors('pass')){?>
        <div class="alert alert-danger mt-2">
          <?= $error = $validation->getError('pass');?>
        </div>
        <?php } ?>
      </div>

      <div class="mb-3 mt-5 button-container d-grid d-md-flex justify-content-md-end">
        <input type="submit" value="Registrarse" class="btn btn-primary btn-lg mx-2">
        <input type="reset" value="Cancelar" class="btn btn-danger btn-lg">
      </div>

      <div class="mt-3 text-center">
        <p >¿Ya tienes una cuenta? <a href="<?php echo base_url('login'); ?>" class=" parrafos text-color">Inicia
            sesión</a></p>
      </div>

    </form>
  </div>

</div>