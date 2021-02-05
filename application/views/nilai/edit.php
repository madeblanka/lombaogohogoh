<?php $this->load->view("_partials/head.php") ?>
<?php $this->load->view("_partials/sidebar.php") ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">From Edit Nilai</h6>
            </div>
            <div class="card-body">
            <form action="<?php echo site_url('nilai/update') ?>" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Id</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="id" id="inputPassword" readonly placeholder="otomatis terisi oleh sistem"  value="<?php echo $nilai->id?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">user id</label>
                <div class="col-sm-10">
                <select name="banjar_id">
                    <optgroup class="form-control" label="(empty)" id="inputPassword">
                     <?php foreach ($banjar as $banjar):?>
                     <option value="<?php echo $banjar->id?>"><?php echo $banjar->id?> </option>
                     <?php endforeach?>
				    </optgroup>
                   </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">juri id</label>
                <div class="col-sm-10">
                <select name="juri_id">
                    <optgroup class="form-control" label="(empty)" id="inputPassword">
                     <?php foreach ($juri as $juri):?>
                     <option value="<?php echo $juri->id?>"><?php echo $juri->id?> </option>
                     <?php endforeach?>
				    </optgroup>
                   </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">wujud</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" name="wujud" id="inputPassword" required min=60 max=100 value="<?php echo $nilai->wujud?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">keutuhan</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" name="keutuhan" id="inputPassword" required min=60 max=100  value="<?php echo $nilai->keutuhan?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">bahan</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" name="bahan" id="inputPassword"required min=60 max=100 value="<?php echo $nilai->bahan?>" >
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">tinggi</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" name="tinggi" id="inputPassword" required min=60 max=100 value="<?php echo $nilai->tinggi?>" >
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">unsur</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" name="unsur" id="inputPassword"required min=60 max=100 value="<?php echo $nilai->unsur?>" >
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">ekspresi</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" name="ekspresi" id="inputPassword" required min=60 max=100 value="<?php echo $nilai->ekspresi?>" >
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">keindahan</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" name="keindahan" id="inputPassword"required min=60 max=100 value="<?php echo $nilai->keindahan?>" >
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">keserasian</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" name="keserasian" id="inputPassword" required min=60 max=100 value="<?php echo $nilai->keserasian?>" >
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">inovasi</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" name="inovasi" id="inputPassword"required min=60 max=100 value="<?php echo $nilai->inovasi?>" >
                </div>
            </div>
            <input type="hidden" class="form-control" name="created_at" id="inputPassword" required min=60 max=100 value="<?php echo $nilai->created_at?>" >
            <button type="submit" class="btn btn-primary"  onclick="return confirm('Apakah Anda Yakin Ingin Menyimpan Data Ini ?');">Simpan</button>
            </form>
            </div>
     </div>

       
<?php $this->load->view("_partials/footer.php") ?>