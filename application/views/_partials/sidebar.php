<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <?php if ($this->session->userdata('role') == "admin"): ?>
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url('dashboard/dashboard') ?>">

                <div class="sidebar-brand-text mx-3">Selamat Datang <?php echo $this->session->userdata('nama'); ?> !<sup></sup></div>
            </a>
            <?php endif?>
            <?php if ($this->session->userdata('role') == "juri"): ?>
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url('dashboard/dashboard') ?>">

                <div class="sidebar-brand-text mx-3">Selamat Datang <?php echo $this->session->userdata('nama'); ?>!<sup></sup></div>
            </a>
            <?php endif?>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo site_url('dashboard/index') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Tabel
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <?php if ($this->session->userdata('role') == "admin" || $this->session->userdata('role') == "juri"): ?>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Menu Tabel</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">List :</h6>
                        <?php if ($this->session->userdata('role') == "admin"): ?>
                        <a class="collapse-item" href="<?php echo site_url('banjar/index') ?>">Tabel Banjar</a>
                        <a class="collapse-item" href="<?php echo site_url('nilai/index') ?>">Tabel Nilai</a>
                        <a class="collapse-item" href="<?php echo site_url('periode/index') ?>">Tabel Periode</a>
                        <a class="collapse-item" href="<?php echo site_url('user/index') ?>">Tabel User</a>
                        <a class="collapse-item" href="<?php echo site_url('juri/index') ?>">Tabel Juri</a>
                        <?php endif?>
                        <?php if ($this->session->userdata('role') == "juri"): ?>
                        <a class="collapse-item" href="<?php echo site_url('banjar/index') ?>">Tabel Banjar</a>
                        <?php endif?>
                        <div class="collapse-divider"></div>
                    </div>
                </div>
            </li>
            <?php endif?>
            <hr class="sidebar-divider">
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('login/logout') ?>">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
<div id="content-wrapper" class="d-flex flex-column">
<div id="content">