<div class="container mt-0 mb-0">
  <div class="card-header text-justify">
    <div class="row d-flex justify-content-center">
      <div class="card col-lg-3" style="width: 50%;">
        <h4>Registrarse</h4>

        <?php $validation = \Config\Services::validation(); ?>
        <form method="post" action="<?php echo base_url('/enviar form') ?>">
          <?= csrf_field(); ?>

          <?php if (!empty(session()->getFlashdata('fail'))) : ?>
            <section>
              <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
            </section>
          <?php endif; ?>

          <?php if (!empty(session()->getFlashdata('success'))): ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('success'); ?></div>
          <?php endif; ?>

          <div class="card-body justify-content-center" media="(max-width:768px)">
            <div class="form">
              <label for="exampleFormControlInput1" class="form-label">Nombre</label>
              <input name="nombre" type="text" class="form-control" placeholder="nombre">
              <?php if ($validation->getError('nombre')) : ?>
                <div class='alert alert-danger mt-2'>
                  <?= $error = $validation->getError('nombre'); ?>
                </div>
              <?php endif; ?>

              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Apellido</label>
                <input type="text" name="apellido" class="form-control" placeholder="apellido">
                <?php if ($validation->getError('apellido')) : ?>
                  <div class='alert alert-danger mt-2'>
                    <?= $error = $validation->getError('apellido'); ?>
                  </div>
                <?php endif; ?>
              </div>

              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">email</label>
                <input name="email" type="email" class="form-control" placeholder="correo@algo.com">
                <?php if ($validation->getError('email')) : ?>
                  <div class='alert alert-danger mt-2'>
                    <?= $error = $validation->getError('email'); ?>
                  </div>
                <?php endif; ?>
              </div>

              <div class="mb-3">
                <label for="exampleControlInput1" class="form-label">Usuario</label>
                <input type="text" name="username" class="form-control" placeholder="usuario"