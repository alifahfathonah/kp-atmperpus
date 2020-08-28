<div class="container-fluid">
    <h3 class="mb-3">EDIT DATA EBOOK</h3>

    <?php foreach ($ebook as $book) { ?>
        <form action="<?php echo base_url().'admin/data_ebook/update'?>" method="post">
        
            <div class="form-group">
                <label for="">Judul Ebook</label>
                <input type="hidden" name="id_ebook" class="form-control" value="<?php echo $book->id_ebook ?>">
                <input type="text" name="judul" class="form-control" value="<?php echo $book->judul ?>">
            </div>
            <div class="form-group">
                <label for="">Penulis</label>
                <input type="text" name="penulis" class="form-control" value="<?php echo $book->penulis ?>">
            </div>
            <div class="form-group">
                    <label>Kategori</label>
                    <select class="form-control" name="kategori" value="<?php echo $ebook->kategori?>">
                                <option>Umum</option>
                                <option>Pemasaran</option>
                                <option>Pariwisata</option>
                                <option>Peternakan</option>
                                <option>Motivasi</option>
                    </select>
                </div>
            <button class="btn btn-primary btn-danger btn-sm" type="reset">Reset</button>
            <button class="btn btn-primary btn-sm" type="submit">Simpan</button>
        </form>
        
    <?php } ?>
</div>