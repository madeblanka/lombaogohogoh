<?php $this->load->view("_partials/head.php") ?>
<?php $this->load->view("_partials/sidebar.php") ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">From Tambah Nilai</h6>
            </div>
            <div class="card-body">
            <form action="<?php echo site_url('nilai/add') ?>" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Id</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="id" id="inputPassword" readonly placeholder="otomatis terisi oleh sistem" >
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">user id</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="banjar_id" id="banjar_id" readonly placeholder="otomatis terisi oleh sistem" value="<?= $banjar->id ?>" >
                </div>
                <label for="inputPassword" class="col-sm-2 col-form-label">nama stt</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="banjar_stt" id="banjar_stt" readonly placeholder="otomatis terisi oleh sistem" value="<?= $banjar->nama_stt ?>" >
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">juri id</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="juri_id" id="juri_id" readonly placeholder="otomatis terisi oleh sistem" value="<?= $this->session->userdata('id'); ?>" >
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">wujud</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" name="wujud" id="wujud" min=60 max=100 required onBlur="validateInput(event)">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">keutuhan</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" name="keutuhan" id="inputPassword" min=60 max=100 required onBlur="validateInput(event)">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">bahan</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" name="bahan" id="inputPassword" min=60 max=100 required onBlur="validateInput(event)">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">tinggi</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" name="tinggi" id="inputPassword" min=60 max=100 required onBlur="validateInput(event)">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">unsur</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" name="unsur" id="inputPassword" min=60 max=100 required onBlur="validateInput(event)">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">ekspresi</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" name="ekspresi" id="inputPassword" min=60 max=100  required onBlur="validateInput(event)">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">keindahan</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" name="keindahan" id="inputPassword" min=60 max=100 required onBlur="validateInput(event)">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">keserasian</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" name="keserasian" id="inputPassword" min=60 max=100 required onBlur="validateInput(event)">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">inovasi</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" name="inovasi" id="inputPassword" min=60 max=100 required onBlur="validateInput(event)">
                </div>
            </div>
            <button type="submit" class="btn btn-primary"  onclick="return confirm('Apakah Anda Yakin Ingin Menyimpan Data Ini ?');">Simpan</button>
            </form>
            </div>
     </div>

    <script>
        function validateInput(event) {
            let num = event.target.value;
            var text = (num > 100 ? 'lebih' : (num < 60 ? 'kurang' : 'pas cok'));
            console.log(event, text)
        }
    </script>
       
<?php $this->load->view("_partials/footer.php") ?>