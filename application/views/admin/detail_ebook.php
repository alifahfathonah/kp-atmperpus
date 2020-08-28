<div class="container-fluid">
<h3 class="mb-3">DETAIL DATA EBOOK</h3>

<table class="table">
    <tr>
        <th>Judul Ebook</th>
        <td><?php echo $detail->judul ?></td>
    </tr>
    <tr>
        <th>Penulis</th>
        <td><?php echo $detail->penulis ?></td>
    </tr>
    <tr>
        <th>Kategori</th>
        <td><?php echo $detail->kategori ?></td>
    </tr>
    <tr>
        <th>Cover</th>
        <td>
            <img src="<?php echo base_url(); ?>uploads/img/<?php echo $detail->foto;?>" width="90" height="110" alt="">
        </td>
    </tr>
</table>

<a href="<?php echo base_url('admin/data_ebook') ?>" class="btn btn-primary btn-sm">Kembali</a>
</div>