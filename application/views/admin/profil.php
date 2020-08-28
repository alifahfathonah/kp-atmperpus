<div class="container-fluid">
    <div class="form-row">
        <div class="col-md-6">
            <?php echo form_open_multipart('admin/dashboard_admin/profil');?>
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="hidden" name="id_user" class="form-control" value="<?php echo $user->id_user ?>">
                    <input type="text" class="form-control" id="" placeholder="" value="<?php $user->nama?>">
                </div>
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" id="" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Foto Profil</label><br>
                    <input type="file">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" id="" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Konfirmasi Password</label>
                    <input type="password" class="form-control" id="" placeholder="">
                </div>
                
                <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>

        <div class="col-md-6">
            <img src="" alt="">
        </div>
    </div>
</div>