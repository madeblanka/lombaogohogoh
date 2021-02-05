<?php $this->load->view("_partials/head.php") ?>
<?php $this->load->view("_partials/sidebar.php") ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">From Tambah Juri</h6>
            </div>
            <div class="card-body">
            <form action="<?php echo site_url('juri/add') ?>" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Id</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="id" id="inputPassword" readonly placeholder="otomatis terisi oleh sistem">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">nama</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" id="inputPassword"required >
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">username</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="username" id="inputPassword" required >
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">password</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" name="password" id="inputPassword" required >
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">alamat</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="alamat" id="inputPassword" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">status</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="status" id="inputPassword" required >
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">no telp</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" name="telp" id="inputPassword" required >
                </div>
            </div>
            <button type="submit" class="btn btn-primary"  onclick="return confirm('Apakah Anda Yakin Ingin Menyimpan Data Ini ?');">Simpan</button>
            </form>
            </div>
     </div>

       
<?php $this->load->view("_partials/footer.php") ?>