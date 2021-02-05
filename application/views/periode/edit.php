<?php $this->load->view("_partials/head.php") ?>
<?php $this->load->view("_partials/sidebar.php") ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">From Edit Periode</h6>
            </div>
            <div class="card-body">
            <form action="<?php echo site_url('periode/update') ?>" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Id</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="id" id="inputPassword" readonly placeholder="otomatis terisi oleh sistem"  value="<?php echo $periode->id?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">user id</label>
                <div class="col-sm-10">
                <select name="user_id">
                    <optgroup class="form-control" label="(empty)" id="inputPassword">
                     <?php foreach ($user as $user):?>
                     <option value="<?php echo $user->id?>"><?php echo $user->id?> </option>
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
                <label for="inputPassword" class="col-sm-2 col-form-label">periode</label>
                <div class="col-sm-10">
                <select name="juri_id">
                    <optgroup class="form-control" label="(empty)" id="inputPassword">
                     <?php foreach ($periode as $periode):?>
                     <option value="<?php $a = $periode->id +1; echo $a?>"><?php $a = $periode->id +1; echo $a?> </option>
                     <?php endforeach?>
				    </optgroup>
                   </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">tgl_pelaksanaan</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="tgl_pelaksanaan" id="inputPassword" required  value="<?php echo $periode->tgl_pelaksanaan?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">tahun</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="tahun" id="inputPassword"required value="<?php echo $periode->tahun?>" >
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">keterangan</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" name="keterangan" id="inputPassword" required value="<?php echo $periode->keterangan?>" >
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">status</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" name="status" id="inputPassword" required value="<?php echo $periode->status?>" >
                </div>
            </div>
            <input type="hidden" class="form-control" name="created_at" id="inputPassword" required value="<?php echo $periode->created_at?>" >
            <button type="submit" class="btn btn-primary"  onclick="return confirm('Apakah Anda Yakin Ingin Menyimpan Data Ini ?');">Simpan</button>
            </form>
            </div>
     </div>

       
<?php $this->load->view("_partials/footer.php") ?>