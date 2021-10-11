<?= $this->extend('plantilla/layout') ?>

<?= $this->section('titulo') ?>
<title>Iniciar Sesion</title>
<?= $this->endSection() ?>


<?= $this->section('contenido') ?>


<body class="contenedor">
  <div class="layer"></div>
<main class="page-center">
  <article class="sign-up">
    <h1 class="sign-up__title">Bienvenido</h1>
    <p class="sign-up__subtitle">Accede a tu cuenta</p>
    <form class="sign-up-form form" action="<?= base_url() ?>/validar" method="POST">
      <label class="form-label-wrapper">
        <p class="form-label">Correo</p>
        <input class="form-input" type="email" name="correo"  required>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Contraseña</p>
        <input class="form-input" type="password" name="contrasena"  required>
      </label>
      <a class="link-info forget-link" href="##">Olvidaste tu contraseña?</a><br>
      <a class="link-info forget-link" href="<?= base_url() ?>/registrarse">No tienes cuenta? Registrate</a>
      <label class="form-checkbox-wrapper">
        <input class="form-checkbox" type="checkbox">
        <span class="form-checkbox-label">Recordarme</span>
      </label>
      <button class="form-btn primary-default-btn transparent-btn">Ingresar</button>
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