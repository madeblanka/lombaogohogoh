<?php $this->load->view("_partials/head.php") ?>
<?php $this->load->view("_partials/sidebar.php") ?>
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
                        <?php foreach ($banjar as $banjar): ?>
                  <tbody>
                      <tr>
                          <td><?php echo $banjar->id?></td>
                          <td><?php echo $banjar->periode_id?></td>
                          <td><?php echo $banjar->nama_stt?></td>        
                          <td><?php echo $banjar->nama_ket_stt?></td>  
                          <td><?php echo $banjar->nama_banjar?></td>
                          <td><?php echo $banjar->gambar?></td>      
                          <td><?php echo $banjar->telp?></td>               
                          <td><a href="<?php echo site_url('banjar/edit/'.$banjar->id) ?>"
                           href="#!" class="btn btn-small text-primary"><i class="fas fa-edit"></i> Edit</a>
                      </tr>
                <?php endforeach?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
<?php $this->load->view("_partials/footer.php") ?>