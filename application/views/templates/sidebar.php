<style>
    .sidebar {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: -20px;
        left: 0;
        background-color: #272626;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 50px;
    }

    .sidebar .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
    }

    img {
        width: 80px;
        height: 80px;
    }
</style>


<div class="container-fluid ">
    <div class="row">
        <div id="mySidebar" class="sidebar" style="margin-top:80px;">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>

            <div style="text-align:center;">
                <img src="<?php echo base_url('/assets/images/') . $user['image']; ?>">
                <br></br>
                <h5 id="brand"><?= $user['nama_depan']; ?></h5>
            </div>

            <!-- query menu -->
            <?php
            $role_id = $this->session->userdata('role_id');

            $queryMenu = "SELECT `user_menu`.`id`, `menu`
                            FROM `user_menu` JOIN `user_access_menu`
                            ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                            WHERE `user_access_menu`.`role_id` = $role_id
                            ORDER BY `user_access_menu`.`menu_id` ASC
                            ";
            $menu = $this->db->query($queryMenu)->result_array();
            ?>

            <!-- LOOPING MENU -->
            <?php foreach ($menu as $m) : ?>
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span><?= $m['menu']; ?></span>
                </h6>

                <!-- SUBMENU SESUAI MENU -->
                <?php
                $menuId = $m['id'];
                $querySubMenu = "SELECT *
                                    FROM `user_sub_menu` JOIN `user_menu`
                                    ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                                    WHERE `user_sub_menu`.`menu_id` = $menuId
                                    AND `user_sub_menu`.`is_active` = 1
                                ";
                $subMenu = $this->db->query($querySubMenu)->result_array();
                ?>

                <ul class="nav flex-column">
                    <?php foreach ($subMenu as $sm) : ?>
                        <li class="nav-item">
                            <?php if ($title == $sm['title']) : ?>
                                <a class="nav-link active" href="<?= base_url($sm['url']); ?>">
                                <?php else : ?>
                                    <a class="nav-link" href="<?= base_url($sm['url']); ?>">
                                    <?php endif; ?>
                                    <span data-feather="<?= $sm['icon']; ?>"></span>
                                    <?= $sm['title']; ?>
                                    </a>
                        </li>
                    <?php endforeach; ?>
                </ul>

            <?php endforeach;  ?>
            <hr>
            </hr>
            <a class="nav-link" href="<?= base_url('auth/logout'); ?>"><span data-feather="log-out"></span>Logout</a>

        </div>