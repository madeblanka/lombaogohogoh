<?php $this->load->view("_partials/head.php")?>
<?php $this->load->view("_partials/sidebar.php")?>
<div id="content-wrapper" class="d-flex flex-column">
<div id="content">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data banjar</h6>
            <a href="<?php echo site_url('banjar/tambah/') ?>"
                href="#!"  class="btn btn-outline-success"><strong>Tambah</strong></a>
        </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                               <th>id banjar</th>
                               <th>periode id</th>
                               <th>nama stt</th>
                               <th>nama ket stt</th>
                               <th>nama banjar</th>
                               <th>gambar</th>
                               <th>no telpon</th>
                               <th>Actoin</th>
                            </tr>
                        </thead>
                  <tbody>
                  <?php foreach ($banjar as $banjar): ?>
                      <tr>
                          <td><?php echo $banjar->id ?></td>
                          <td><?php echo $banjar->periode_Id ?></td>
                          <td><?php echo $banjar->nama_stt ?></td>
                          <td><?php echo $banjar->nama_ket_stt ?></td>
                          <td><?php echo $banjar->nama_banjar ?></td>
                          <td><?php echo $banjar->gambar ?></td>
                          <td><?php echo $banjar->telp ?></td>
                        <?php 
                            $isValid = false;
                            foreach ($valid as $valid) {
                                if ($valid->juri_id == $this->session->userData('id') && $valid->banjar_id == $banjar->id) {
                                    $isValid = true;
                                    ?>
                        <td>
                            <a class="btn btn-small text-primary">Nilai Sudah Ter-input!</a>
                           <!-- <a href="<?php echo site_url('banjar/delete/' . $banjar->id) ?>"
                           onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ?');" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a> -->
                        </td>
                        <?php
                                }
                            }
                            if(!$isValid) {
                        ?>
                        <td>
                            <a href="<?php echo site_url('nilai/tambah/' . $banjar->id) ?>" class="btn btn-small text-primary"><i class="fas fa-edit"></i>Tambahkan Nilai</a>
                           <!-- <a href="<?php echo site_url('banjar/delete/' . $banjar->id) ?>"
                           onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ?');" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a> -->
                        </td>
                        <?php
                            }
                        ?>
                      </tr>
                <?php endforeach?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php $this->load->view("_partials/footer.php")?>