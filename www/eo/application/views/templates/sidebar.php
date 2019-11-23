<!-- START OF SIDEBAR -->

<div class="d-flex align-items-stretch">
    <!-- QUERY DARI MENU -->
    <?php
    $role_id = $this->session->userdata('role_id');
    // - Select column mana yang mau ditampilin
    // - Dari table 1 JOIN ke tabel 2
    // - ON -> untuk mengunci primary key dari masing-masing tabelnya
    // - kondisinya
    // - ORDER BY -> untuk mengurutkan berdasarkan menu_id, ASC -> terurut naik
    $queryMenu = " SELECT `user_menu`.`id`,`menu` 
                        FROM `user_menu` JOIN `user_access_menu` 
                        ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                        WHERE `user_access_menu`.`role_id` = $role_id
                    ORDER BY `user_access_menu`.`menu_id` ASC
                        ";
    //run the query
    $menu = $this->db->query($queryMenu)->result_array();
    ?>

    <div id="sidebar" class="sidebar py-1">
        <!-- Looping Menu -->
        <?php foreach ($menu as $menus) : ?>
            <!-- access the role title menu -->
            <div class="text-gray-500 text-uppercase px-2 px-lg-3 py-1 font-weight-bold small headings-font-family"><?= $menus['menu']; ?></div>
            <!-- Sub-MENU sesuai Menu -->
            <?php
                // sub-menu
                $menuID = $menus['id'];
                //  - Select all submenu from table user_sub_menu
                //  - from table user sub menu JOIN ke tabel user_menu
                //  - foreign key user sub menu = primary key user_menu, PK di user_menu jadi FK di user_sub_menu
                //  - where kondisinya mengecek menu_id yg dari $menus ke menu_id di table user_sub_menu
                //  - AND -> untuk cek sub_menunya aktif atau tidak
                $querySubMenu = "SELECT *
                        FROM `user_sub_menu` JOIN `user_menu` 
                        ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                        WHERE `user_sub_menu`.`menu_id` = $menuID
                        AND `user_sub_menu`.`is_active` = 1";
                // run the query kumpulan submenu dari menu
                $subMenu = $this->db->query($querySubMenu)->result_array();
                ?>
            <?php foreach ($subMenu as $sm) : ?>
                <ul class="sidebar-menu list-unstyled">
                    <?php if ($title == $sm['title_submenu']) : ?>
                        <li class="sidebar-list-item active">
                            <a class="sidebar-link text-muted active" href="<?= base_url($sm['url']) ?>">
                            <?php else : ?>
                        <li class="sidebar-list-item">
                            <a class="sidebar-link text-muted" href="<?= base_url($sm['url']) ?>">
                            <?php endif; ?>
                            <i class="<?= $sm['icon'] ?>"></i>
                            <span><?= $sm['title_submenu'] ?></span>
                            </a>
                        </li>
                    <?php endforeach; ?>
                <?php endforeach; ?>
                <!-- End of Looping-menu -->
                <!-- Nav Item - Tables -->
                <li class="sidebar-list-item">
                    <a href="<?= base_url('home') ?>" class="sidebar-link text-muted">
                        <i class="fas fa-fw fa-sign-out-alt"></i>
                        <span>Log out</span></a></li>
    </div>

    <!-- END OF SIDEBAR -->