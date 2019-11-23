<body>
    <!-- START OF TOPBAR -->
    <!-- navbar-->
    <header class="header">
        <nav class="navbar navbar-expand-lg px-4 py-2 bg-white shadow"><a class="sidebar-toggler text-gray-500 mr-4 mr-lg-5 lead"><i class="fas fa-align-left"></i></a><a href="" class="navbar-brand font-weight-bold text-uppercase text-base"> <?= $user['name'] ?> Dashboard</a>
            <ul class="ml-auto d-flex align-items-center list-unstyled mb-0">
                <li class="nav-item dropdown ml-auto"><a id="userInfo" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><img src=" <?= base_url('assets/'); ?>img/avatar-6.jpg" alt="<?= $user['name'] ?>" style="max-width: 2.5rem;" class="img-fluid rounded-circle shadow"></a>
                    <div aria-labelledby="userInfo" class="dropdown-menu"><a href="#" class="dropdown-item"><strong class="d-block text-uppercase headings-font-family"><?= $user['name'] ?></strong><small>Web Developer</small></a>
                        <a href="#" class="dropdown-item">Edit Profile </a>
                        <div class="dropdown-divider"></div><a href="<?= base_url('home') ?>" class="dropdown-item">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
    <!-- END OF TOPBAR -->