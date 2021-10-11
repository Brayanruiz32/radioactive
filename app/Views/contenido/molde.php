<?= $this->extend('plantilla/layout') ?>

<?= $this->section('titulo') ?>
<title>Perfiles</title>
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
                                    <a class="danger" href="##">
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
                    <h2 class="main-title titulo">Perfiles</h2>

                    <div class="row">
                        <div class="col-lg-9 tabla-perfiles" >
                            <div class="users-table table-wrapper">
                                <table class="posts-table">
                                    <thead>
                                        <tr class="users-table-info">
                                            <th>
                                                <label class="users-table__checkbox ms-20">
                                                    <input type="checkbox" class="check-all">Thumbnail
                                                </label>
                                            </th>
                                            <th>Title</th>
                                            <th>Author</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <label class="users-table__checkbox">
                                                    <input type="checkbox" class="check">
                                                    <div class="categories-table-img">
                                                        <picture>
                                                            <source srcset="<?= base_url() ?>/public/img/categories/01.webp" type="image/webp"><img src="<?= base_url() ?>/public/img/categories/01.jpg" alt="category">
                                                        </picture>
                                                    </div>
                                                </label>
                                            </td>
                                            <td>
                                                Starting your traveling blog with Vasco
                                            </td>
                                            <td>
                                                <div class="pages-table-img">
                                                    <picture>
                                                        <source srcset="<?= base_url() ?>/public/img/avatar/avatar-face-04.webp" type="image/webp"><img src="<?= base_url() ?>/public/img/avatar/avatar-face-04.png" alt="User Name">
                                                    </picture>
                                                    Jenny Wilson
                                                </div>
                                            </td>
                                            <td><span class="badge-pending">Pending</span></td>
                                            <td>17.04.2021</td>
                                            <td>
                                                <span class="p-relative">
                                                    <button class="dropdown-btn transparent-btn" type="button" title="More info">
                                                        <div class="sr-only">More info</div>
                                                        <i data-feather="more-horizontal" aria-hidden="true"></i>
                                                    </button>
                                                    <ul class="users-item-dropdown dropdown">
                                                        <li><a href="##">Edit</a></li>
                                                        <li><a href="##">Quick edit</a></li>
                                                        <li><a href="##">Trash</a></li>
                                                    </ul>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="users-table__checkbox">
                                                    <input type="checkbox" class="check">
                                                    <div class="categories-table-img">
                                                        <picture>
                                                            <source srcset="./img/categories/02.webp" type="image/webp"><img src="<?= base_url() ?>/public/img/categories/02.jpg" alt="category">
                                                        </picture>
                                                    </div>
                                                </label>
                                            </td>
                                            <td>
                                                Start a blog to reach your creative peak
                                            </td>
                                            <td>
                                                <div class="pages-table-img">
                                                    <picture>
                                                        <source srcset="<?= base_url() ?>/public/img/avatar/avatar-face-03.webp" type="image/webp"><img src="<?= base_url() ?>/public/img/avatar/avatar-face-03.png" alt="User Name">
                                                    </picture>
                                                    Annette Black
                                                </div>
                                            </td>
                                            <td><span class="badge-pending">Pending</span></td>
                                            <td>23.04.2021</td>
                                            <td>
                                                <span class="p-relative">
                                                    <button class="dropdown-btn transparent-btn" type="button" title="More info">
                                                        <div class="sr-only">More info</div>
                                                        <i data-feather="more-horizontal" aria-hidden="true"></i>
                                                    </button>
                                                    <ul class="users-item-dropdown dropdown">
                                                        <li><a href="##">Edit</a></li>
                                                        <li><a href="##">Quick edit</a></li>
                                                        <li><a href="##">Trash</a></li>
                                                    </ul>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="users-table__checkbox">
                                                    <input type="checkbox" class="check">
                                                    <div class="categories-table-img">
                                                        <picture>
                                                            <source srcset="<?= base_url() ?>/public/img/categories/03.webp" type="image/webp"><img src="<?= base_url() ?>/public/img/categories/03.jpg" alt="category">
                                                        </picture>
                                                    </div>
                                                </label>
                                            </td>
                                            <td>
                                                Helping a local business reinvent itself
                                            </td>
                                            <td>
                                                <div class="pages-table-img">
                                                    <picture>
                                                        <source srcset="<?= base_url() ?>/public/img/avatar/avatar-face-02.webp" type="image/webp"><img src="<?= base_url() ?>/public/img/avatar/avatar-face-02.png" alt="User Name">
                                                    </picture>
                                                    Kathryn Murphy
                                                </div>
                                            </td>
                                            <td><span class="badge-active">Active</span></td>
                                            <td>17.04.2021</td>
                                            <td>
                                                <span class="p-relative">
                                                    <button class="dropdown-btn transparent-btn" type="button" title="More info">
                                                        <div class="sr-only">More info</div>
                                                        <i data-feather="more-horizontal" aria-hidden="true"></i>
                                                    </button>
                                                    <ul class="users-item-dropdown dropdown">
                                                        <li><a href="##">Edit</a></li>
                                                        <li><a href="##">Quick edit</a></li>
                                                        <li><a href="##">Trash</a></li>
                                                    </ul>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="users-table__checkbox">
                                                    <input type="checkbox" class="check">
                                                    <div class="categories-table-img">
                                                        <picture>
                                                            <source srcset="./img/categories/04.webp" type="image/webp"><img src="<?= base_url() ?>/public/img/categories/04.jpg" alt="category">
                                                        </picture>
                                                    </div>
                                                </label>
                                            </td>
                                            <td>
                                                Caring is the new marketing
                                            </td>
                                            <td>
                                                <div class="pages-table-img">
                                                    <picture>
                                                        <source srcset="<?= base_url() ?>/public/img/avatar/avatar-face-05.webp" type="image/webp"><img src="<?= base_url() ?>/public/img/avatar/avatar-face-05.png" alt="User Name">
                                                    </picture>
                                                    Guy Hawkins
                                                </div>
                                            </td>
                                            <td><span class="badge-active">Active</span></td>
                                            <td>17.04.2021</td>
                                            <td>
                                                <span class="p-relative">
                                                    <button class="dropdown-btn transparent-btn" type="button" title="More info">
                                                        <div class="sr-only">More info</div>
                                                        <i data-feather="more-horizontal" aria-hidden="true"></i>
                                                    </button>
                                                    <ul class="users-item-dropdown dropdown">
                                                        <li><a href="##">Edit</a></li>
                                                        <li><a href="##">Quick edit</a></li>
                                                        <li><a href="##">Trash</a></li>
                                                    </ul>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="users-table__checkbox">
                                                    <input type="checkbox" class="check">
                                                    <div class="categories-table-img">
                                                        <picture>
                                                            <source srcset="<?= base_url() ?>/public/img/categories/01.webp" type="image/webp"><img src="<?= base_url() ?>/public/img/categories/01.jpg" alt="category">
                                                        </picture>
                                                    </div>
                                                </label>
                                            </td>
                                            <td>
                                                How to build a loyal community online and offline
                                            </td>
                                            <td>
                                                <div class="pages-table-img">
                                                    <picture>
                                                        <source srcset="<?= base_url() ?>/public/img/avatar/avatar-face-03.webp" type="image/webp"><img src="<?= base_url() ?>/public/img/avatar/avatar-face-03.png" alt="User Name">
                                                    </picture>
                                                    Robert Fox
                                                </div>
                                            </td>
                                            <td><span class="badge-active">Active</span></td>
                                            <td>17.04.2021</td>
                                            <td>
                                                <span class="p-relative">
                                                    <button class="dropdown-btn transparent-btn" type="button" title="More info">
                                                        <div class="sr-only">More info</div>
                                                        <i data-feather="more-horizontal" aria-hidden="true"></i>
                                                    </button>
                                                    <ul class="users-item-dropdown dropdown">
                                                        <li><a href="##">Edit</a></li>
                                                        <li><a href="##">Quick edit</a></li>
                                                        <li><a href="##">Trash</a></li>
                                                    </ul>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="users-table__checkbox">
                                                    <input type="checkbox" class="check">
                                                    <div class="categories-table-img">
                                                        <picture>
                                                            <source srcset="<?= base_url() ?>/public/img/categories/03.webp" type="image/webp"><img src="<?= base_url() ?>/public/img/categories/03.jpg" alt="category">
                                                        </picture>
                                                    </div>
                                                </label>
                                            </td>
                                            <td>
                                                How to build a loyal community online and offline
                                            </td>
                                            <td>
                                                <div class="pages-table-img">
                                                    <picture>
                                                        <source srcset="./img/avatar/avatar-face-03.webp" type="image/webp"><img src="<?= base_url() ?>/public/img/avatar/avatar-face-03.png" alt="User Name">
                                                    </picture>
                                                    Robert Fox
                                                </div>
                                            </td>
                                            <td><span class="badge-active">Active</span></td>
                                            <td>17.04.2021</td>
                                            <td>
                                                <span class="p-relative">
                                                    <button class="dropdown-btn transparent-btn" type="button" title="More info">
                                                        <div class="sr-only">More info</div>
                                                        <i data-feather="more-horizontal" aria-hidden="true"></i>
                                                    </button>
                                                    <ul class="users-item-dropdown dropdown">
                                                        <li><a href="##">Edit</a></li>
                                                        <li><a href="##">Quick edit</a></li>
                                                        <li><a href="##">Trash</a></li>
                                                    </ul>
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <!-- ! Footer -->
            <footer class="footer">
                <div class="container footer--flex">
                    <div class="footer-start">
                        <p>2021 © Elegant Dashboard - <a href="elegant-dashboard.com" target="_blank" rel="noopener noreferrer">elegant-dashboard.com</a></p>
                    </div>
                    <ul class="footer-end">
                        <li><a href="##">About</a></li>
                        <li><a href="##">Support</a></li>
                        <li><a href="##">Puchase</a></li>
                    </ul>
                </div>
            </footer>
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