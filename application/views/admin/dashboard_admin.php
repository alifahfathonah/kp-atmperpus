<div class="container-fluid">
    
    <!-- Content Row -->
    <div class="row">
    <?php
        $data = $this->db->get('tb_ebook')->num_rows();
        $umum = $this->db->get_where('tb_ebook', array('kategori' => 'umum'))->num_rows();
        $pemasaran = $this->db->get_where('tb_ebook', array('kategori' => 'pemasaran'))->num_rows();
        $pariwisata = $this->db->get_where('tb_ebook', array('kategori' => 'pariwisata'))->num_rows();
        $peternakan = $this->db->get_where('tb_ebook', array('kategori' => 'peternakan'))->num_rows();
        $motivasi = $this->db->get_where('tb_ebook', array('kategori' => 'motivasi'))->num_rows();
    ?>
        <!-- SEMUA DATA -->
        <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah Ebook</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $data ?> Modul</div>
                </div>
                <div class="col-auto">
                <i class="fas fa-book-reader fa-2x text-gray-300"></i>
                </div>
            </div>
            </div>
        </div>
        </div>

        <!-- UMUM -->
        <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-dark shadow h-100 py-2">
            <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Umum</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $umum ?> Modul</div>
                </div>
                <div class="col-auto">
                <i class="fas fa-book-open fa-2x text-gray-300"></i>
                </div>
            </div>
            </div>
        </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <!-- <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
                <div class="row no-gutters align-items-center">
                    <div class="col-auto">
                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                    </div>
                    <div class="col">
                    <div class="progress progress-sm mr-2">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-auto">
                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                </div>
            </div>
            </div>
        </div>
        </div> -->

        <!-- PEMASARAN -->
        <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Pemasaran</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $pemasaran ?> Modul</div>
                </div>
                <div class="col-auto">
                <i class="fas fa-store fa-2x text-gray-300"></i>
                </div>
            </div>
            </div>
        </div>
        </div>

        <!-- PARIWISATA -->
        <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pariwisata</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $pariwisata ?> Modul</div>
                </div>
                <div class="col-auto">
                <i class="fas fa-plane fa-2x text-gray-300"></i>
                </div>
            </div>
            </div>
        </div>
        </div>

        <!-- PETERNAKAN -->
        <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Peternakan</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $peternakan ?> Modul</div>
                </div>
                <div class="col-auto">
                <i class="fas fa-paw fa-2x text-gray-300"></i>
                </div>
            </div>
            </div>
        </div>
        </div>

        <!-- MOTIVASI -->
        <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Motivasi</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $motivasi ?> Modul</div>
                </div>
                <div class="col-auto">
                <i class="fas fa-fire fa-2x text-gray-300"></i>
                </div>
            </div>
            </div>
        </div>
        </div>

        </div>
        <!-- Content Row -->
</div>