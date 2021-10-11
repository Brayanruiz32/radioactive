<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $this->renderSection('titulo') ?>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>/public/img/svg/logo.svg" type="image/x-icon">
    <!-- Custom styles -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/css/style.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/css/style.css">
</head>


<?= $this->renderSection('contenido') ?>



</html>