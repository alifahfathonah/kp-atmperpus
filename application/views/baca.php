<div class="container-fluid">
    <h4><strong><?php echo $baca->judul ?></strong></h4>
    <span class="badge badge-info mb-3"><?php echo $baca->penulis ?></span>
    <div class="embed-responsive embed-responsive-21by9 mb-3">
        <iframe class="embed-responsive" src="<?php echo base_url().'/uploads/pdf/'.$baca->ebook?>"></iframe>
    </div>
</div>