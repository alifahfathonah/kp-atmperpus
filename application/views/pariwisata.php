<div class="container-fluid">
    <div class="row">

        <?php foreach ($pariwisata as $book) : ?>
            
            <div class="card ml-3" style="width: 18rem;">
                <img src="<?php echo base_url().'/uploads/img/'.$book->foto ?>" class="card-img-top my-img-feature" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $book->judul?></h5>
                    <small>Penulis : <?php echo $book->penulis?></small><br><br>
                    <?php echo anchor ('dashboard/baca/' .$book->id_ebook, '<div class="btn btn-primary btn-sm">Baca Ebook</div>') ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>