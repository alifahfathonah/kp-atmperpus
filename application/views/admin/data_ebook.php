<div class="container-fluid">

<!-- Page Heading -->
<!-- DataTales Example -->
<div class="card shadow mb-4">
<!-- Page Heading -->
<h1 class="h3 m-4 text-gray-800"><strong>Tabel Data Ebook</strong></h1>



  <div class="card-header py-3">
  <?php if($this->session->flashdata('success')) { ?>
    <div class="alert alert-success" role="alert">
      <button class="close" type="button" data-dismiss="alert" aria-label="Close"><i class="fas fa-times"></i></button>
      <span style="text-align:left;"><?php echo $this->session->flashdata('success');?></span>
    </div>
  <?php } ?>
  
  <?php if($this->session->flashdata('error')) { ?>
  <div class="alert alert-danger" role="alert">
    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><i class="fas fa-times"></i></button>
    <span style="text-align:left;"><?php echo $this->session->flashdata('error');?></span>
  </div>
  <?php } ?>

    <!-- <h6 class="m-0 font-weight-bold text-primary">Data Ebook ATM Library</h6> -->
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus fa-sm"></i> Tambah Ebook</button>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Judul Ebook</th>
            <th>Penulis</th>
            <th>Kategori</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php
        
        $no = 1;
        foreach($ebook as $book) { ?>
          
          <tr>
          <td><?php echo $no++ ?></td>
            <td><?php echo $book->judul ?></td>
            <td><?php echo $book->penulis ?></td>
            <td><?php echo $book->kategori ?></td>
            <td>
                <?php echo anchor ('admin/data_ebook/detail/' .$book->id_ebook, '<div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>') ?>
                <?php echo anchor ('admin/data_ebook/edit/' .$book->id_ebook, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?>
                <!-- <?php echo anchor ('admin/data_ebook/hapus/' .$book->id_ebook, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?> -->
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapusModal">
                <i class="fa fa-trash"></i>
                </button>
            </td>
          </tr>
          
       
        <?php 
      //  var_dump($book);
      } ?>          
        </tbody>
      </table>
    </div>

  </div>
</div>

</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">FORM INPUT EBOOK</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <?php echo form_open_multipart('admin/data_ebook/tambah_aksi')?>     
                <div class="form-group">
                    <label for="">Judul Ebook</label>
                    <input type="text" name="judul" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Penulis</label>
                    <input type="text" name="penulis" class="form-control">
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <select class="form-control" name="kategori">
                                <option>Umum</option>
                                <option>Pemasaran</option>
                                <option>Pariwisata</option> 
                                <option>Peternakan</option>
                                <option>Motivasi</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Cover Ebook</label><br>
                    <input type="file" name="foto" class="">
                </div>
                <div class="form-group">
                    <label for="">File Ebook pdf</label><br>
                    <input type="file" name="ebook" class="">
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>

        <?php echo form_close(); ?>
        </div>
    </div>

    
</div>

<!-- Modal Delete Data-->
<div class="modal fade " id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="hapusModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><strong>Apakah anda yakin akan menghapus ?</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        note : data yang sudah dihapus tidak bisa dikembalikan kembali
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
        <!-- <button type="button" class="btn btn-primary">Iya</button> -->
        <?php echo anchor ('admin/data_ebook/hapus/' .$book->id_ebook, '<button type="button" class="btn btn-primary">Iya</button>') ?>
      </div>
    </div>
  </div>
</div>