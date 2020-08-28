<div class="container-fluid">
    <table class="table">
    <h4 class="mb-3 text-center"><strong>DATA ADMIN</strong></h4>
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $no=1;
    foreach($admin as $adm) { ?>
        <tr>
        <th scope="row"><?php echo $no++?></th>
        <td><?php echo $adm->nama ?></td>
        <td><?php echo $adm->username ?></td>
        <td><?php echo $adm->password ?></td>
        </tr>
    <?php } ?>
    </tbody>
    </table>
</div>
