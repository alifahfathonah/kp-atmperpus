    <body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon">
            <i class="fas fa-book-reader"></i>
            </div>
            <div class="sidebar-brand-text mx-3">ATM LIBRARY</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('dashboard/index') ?>">
            <i class="fas fa-home"></i>
            <span>Home</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            KATEGORI
        </div>
        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('kategori/umum') ?>">
            <i class="fas fa-book-open"></i>
            <span>Umum</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('kategori/pemasaran') ?>">
            <i class="fas fa-store"></i>
            <span>Pemasaran</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('kategori/pariwisata') ?>">
            <i class="fas fa-plane"></i>
            <span>Pariwisata</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('kategori/peternakan') ?>">
            <i class="fas fa-paw"></i>
            <span>Peternakan</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('kategori/motivasi') ?>">
            <i class="fas fa-fire"></i>
            <span>Motivasi</span></a>
        </li>

        
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        </ul>
        <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
        </button>
        <!-- Topbar Search -->
        <?php echo form_open('dashboard/search')?>

        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
            <input type="text" name="keyword" class="form-control bg-light border-0 small" placeholder="Cari Ebook..." aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
            <button class="btn btn-primary" type="submit">
                <i class="fas fa-search fa-sm"></i>
            </button>
            </div>
        </div>
        
        </form>
        <?php echo form_close()?>
        
        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">
        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-search fa-fw"></i>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
            
            <form class="form-inline mr-auto w-100 navbar-search">
                <div class="input-group">

                <?php echo form_open('dashboard/search')?>

                <input type="text" name="keyword" class="form-control bg-light border-0 small" placeholder="Cari Ebook..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>

                <?php echo form_close()?>

                </div>
            </form>
            </div>
        </li>

        <!-- Nav Item - Alerts -->
        <li class="nav-item dropdown no-arrow mx-1">

    </nav>
    <!-- End of Topbar -->
