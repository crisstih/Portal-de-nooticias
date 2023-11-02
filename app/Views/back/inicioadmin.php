
<?php if (session()->getFlashdata('msg')) : ?>
                <div class="alert alert-success text-center">
                    <?= session()->getFlashdata('msg') ?>
                </div>
            <?php endif; ?>



<div class="container total  mb-3 text-center">
  <h1 class="mt-5 mb-5 titulos">Administra Tu Portal</h1>


  <div class="options row mb-5">


    <a href="<?php echo base_url('listar_noticias');?>"
      class="col-md-4 text-decoration-none btn btn-light btn-unstyled btn-block  ">
      <div class="text-center">
        <span class="d-block mt-4 ">
          <img src="<?php echo base_url('assets/img/admin_news.png');?>" alt="" height="150" width="170">
          <h4 class="mt-4 mb-4 titulos">Administar noticias</h4>
        </span>
      </div>
    </a>

    <a href="<?php echo base_url('nueva_noticia');?>"
      class="col-md-4 text-decoration-none btn btn-light btn-unstyled btn-block  ">
      <div class="text-center">
        <span class="d-block mt-4 ">
        <img src="<?php echo base_url('assets/img/new_new.png');?>" alt="" height="150" width="170">
          <h4 class="mt-4 mb-4 titulos">Agregar noticia</h4>
        </span>
      </div>
    </a>

    <a href="<?php echo base_url('usuarios');?>" class="col-md-4 text-decoration-none btn btn-light btn-block ">
      <div class="text-center">
        <span class="d-block mt-4 ">
        <img src="<?php echo base_url('assets/img/admin_users.png');?>" alt="" height="150" width="170">
          <h4 class="mt-4 mb-4 titulos">Administrar usuarios</h4>
        </span>
      </div>
    </a>


  </div>
</div>