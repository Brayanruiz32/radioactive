<?= $this->extend('plantilla/layout') ?>

<?= $this->section('titulo') ?>
<title>Ventas</title>
<?= $this->endSection() ?>


<?= $this->section('contenido') ?>

<body>
    <div class="layer"></div>
    <!-- ! Body -->
    <a class="skip-link sr-only" href="#skip-target">Saltar al contenido</a>
    <div class="page-flex">
        <!-- ! Sidebar -->
        <?= $this->include('plantilla/links') ?>
        <div class="main-wrapper">
            <!-- ! Main nav -->
            <nav class="main-nav--bg">
                <div class="container main-nav">
                <div><?= $_SESSION['datos'][0]['NombreU'] ?> <?= $_SESSION['datos'][0]['ApellidoU'] ?></div>
                    <div class="main-nav-end">
                        <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                            <span class="sr-only">Toggle menu</span>
                            <span class="icon menu-toggle--gray" aria-hidden="true"></span>
                        </button>
                        <div class="main-nav-start">
                        </div>
                        <div class="lang-switcher-wrapper">
                            <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
                                <span class="sr-only">My profile</span>
                                <span class="nav-user-img">
                                    <picture>
                                        <source srcset="<?= base_url() ?>/public/img/avatar/avatar-illustrated-02.webp" type="image/webp"><img src="./img/avatar/avatar-illustrated-02.png" alt="User name">
                                    </picture>
                                </span>
                            </button>
                            <ul class="users-item-dropdown nav-user-dropdown dropdown">
                                <li>
                                    <a href="##">
                                        <i data-feather="user" aria-hidden="true"></i>
                                        <span>Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <i data-feather="settings" aria-hidden="true"></i>
                                        <span>Account settings</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="danger" href="<?= base_url() ?>/salir">
                                        <i data-feather="log-out" aria-hidden="true"></i>
                                        <span>Log out</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- ! Main -->
            <main class="main users chart-page" id="skip-target">
                <div class="container">
                    <h2 class="main-title titulo">Ventas</h2>

                    <div class="row">
                        <div class="col-lg-9 tabla-perfiles" >
                            
                        </div>
                    </div>
                </div>
            </main>
            <!-- ! Footer -->

        </div>
    </div>
    <!-- Chart library -->
    <script src="<?= base_url() ?>/public/plugins/chart.min.js"></script>
    <!-- Icons library -->
    <script src="<?= base_url() ?>/public/plugins/feather.min.js"></script>
    <!-- Custom scripts -->
    <script src="<?= base_url() ?>/public/js/script.js"></script>
</body>
<?= $this->endSection() ?>