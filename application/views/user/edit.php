<?php $this->load->view("_partials/head.php") ?>
<?php $this->load->view("_partials/sidebar.php") ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">From Tambah Guru</h6>
            </div>
            <div class="card-body">
            <form action="<?php echo site_url('user/update') ?>" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Id User</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="id" id="inputPassword" readonly value="<?php echo $user->id?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">username</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="username" id="inputPassword" required value="<?php echo $user->username?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">password</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" name="password" id="inputPassword" required value="<?php echo $user->password?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">no telpon</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="telp" id="inputPassword" required value="<?php echo $user->telp?>">
                </div>
            </div>
            <button type="submit" class="btn btn-primary"  onclick="return confirm('Apakah Anda Yakin Ingin Menyimpan Data Ini ?');">Simpan</button>
            </form>
            </div>
     </div>

       
<?php $this->load->view("_partials/footer.php") ?>