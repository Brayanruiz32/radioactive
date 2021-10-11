<?= $this->extend('plantilla/layout') ?>
<?= $this->section('titulo') ?>
<title>Registro</title>
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
<body>
  <div class="layer"></div>
<main class="page-center">
  <article class="sign-up">
    <h1 class="sign-up__title">Registrate</h1>
    <p class="sign-up__subtitle">Empezemos con tus datos</p>
    <form class="sign-up-form form" action="<?= base_url() ?>/registro" method="POST">
      <label class="form-label-wrapper">
        <p class="form-label">Nombre</p>
        <input class="form-input" type="text" name="nombre"  required>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Apellido</p>
        <input class="form-input" type="email" name="apellido"  required>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Correo</p>
        <input class="form-input" type="email" name="correo"  required>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Contraseña</p>
        <input class="form-input" type="password" name="contrasena" required>
      </label>

      <button class="form-btn primary-default-btn transparent-btn" type="submit">Registrarse</button>
    </form>
  </article>
</main>
<!-- Chart library -->
<script src="<?= base_url() ?>/public/plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="<?= base_url() ?>/public/plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="<?= base_url() ?>/public/js/script.js"></script>
</body>


<?= $this->endSection() ?>