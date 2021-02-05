<?php $this->load->view("_partials/head.php") ?>
<?php $this->load->view("_partials/sidebar.php") ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">From Edit Banjar</h6>
            </div>
            <div class="card-body">
            <form action="<?php echo site_url('banjar/update') ?>" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Id</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="id" id="inputPassword" readonly placeholder="otomatis terisi oleh sistem"  value="<?php echo $banjar->id?>">
                </div>
            </div>
            <input type="hidden" name="old_image" value="<?php echo $banjar->gambar?>">
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">periode id</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="periode_id" id="inputPassword"required  value="<?php echo $banjar->periode_id?>" >
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">nama stt</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="nama_stt" id="inputPassword" required  value="<?php echo $banjar->nama_stt?>" >
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">nama ket stt</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="nama_ket_stt" id="inputPassword" required  value="<?php echo $banjar->nama_ket_stt?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">nama banjar</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="nama_banjar" id="inputPassword" required  value="<?php echo $banjar->nama_banjar?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">gambar</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="gambar" id="inputPassword"required value="<?php echo $banjar->gambar?>" >
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">no telp</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" name="telp" id="inputPassword" required value="<?php echo $banjar->telp?>" >
                </div>
            </div>
            <input type="hidden" class="form-control" name="created_at" id="inputPassword" required value="<?php echo $banjar->created_at?>" >
            <button type="submit" class="btn btn-primary"  onclick="return confirm('Apakah Anda Yakin Ingin Menyimpan Data Ini ?');">Simpan</button>
            </form>
            </div>
     </div>

       
<?php $this->load->view("_partials/footer.php") ?>