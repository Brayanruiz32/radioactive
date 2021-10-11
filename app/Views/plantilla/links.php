
<aside class="sidebar">
            <div class="sidebar-start">
                <div class="sidebar-head">
                    <a href="/" class="logo-wrapper" title="Home">
                        <img src="<?= base_url() ?>/public/svg/Logo.png" class="Logo" alt="">
                        <div class="logo-text">
                            <span class="logo-title">RADIOACTIVE</span>
                            <span class="logo-subtitle">Panel de Control</span>
                        </div>

                    </a>
                    <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                        <span class="sr-only">Toggle menu</span>
                        <span class="icon menu-toggle" aria-hidden="true"></span>
                    </button>
                </div>
                <div class="sidebar-body">
                    <ul class="sidebar-body-menu">
                        <li>
                            <a class="active" href="inicio"><span class="icon home" aria-hidden="true"></span>Panel de Control</a>
                        </li>
                        <li>
                            <a class="" href="<?= base_url() ?>/clientes">
                                <span class="icon user-3" aria-hidden="true"></span>Clientes
                            </a>
                        </li>
                        <li>
                            <a class="show-cat-btn" href="##">
                                <span class="icon folder" aria-hidden="true"></span>Almacén
                                <span class="category__btn transparent-btn" title="Open list">
                                    <span class="sr-only">Open list</span>
                                    <span class="icon arrow-down" aria-hidden="true"></span>
                                </span>
                            </a>
                            <ul class="cat-sub-menu">
                                <li>
                                    <a href="<?= base_url() ?>/categorias">Categorias</a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>/productos">Productos</a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>/marcas">Marcas</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="" href="<?= base_url() ?>/ventas">
                                <span class="icon image" aria-hidden="true"></span>Ventas
                            </a>
                        </li>
                        <li>
                            <a class="" href="<?= base_url() ?>/reportes">
                                <span class="icon paper" aria-hidden="true"></span>Reportes
                            </a>
                        </li>
                        <li>
                            <a class="show-cat-btn" href="##">
                                <span class="icon category" aria-hidden="true"></span>Seguridad
                                <span class="category__btn transparent-btn" title="Open list">
                                    <span class="sr-only">Open list</span>
                                    <span class="icon arrow-down" aria-hidden="true"></span>
                                </span>
                            </a>
                            <ul class="cat-sub-menu">
                                <li>
                                    <a href="<?= base_url() ?>/usuarios">Usuarios</a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>/perfiles">Perfiles</a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>/configuracion">Configuración</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sidebar-footer">
                <div class="center">
                    <h5>Radioactive © 2021</h5>
                </div>
            </div>
        </aside>
