<?php $this->load->view("_partials/head.php") ?>
<?php $this->load->view("_partials/sidebar.php") ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data periode</h6>
            <a href="<?php echo site_url('periode/tambah/') ?>"
                href="#!"  class="btn btn-outline-success"><strong>Tambah</strong></a>
        </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                               <th>id periode</th>
                               <th>user_id</th>
                               <th>juri_id</th>
                               <th>periode</th>
                               <th>tgl_pelaksanaan</th>
                               <th>tahun</th>
                               <th>keterangan</th>
                               <th>status</th>
                               <th>Actoin</th>
                            </tr>
                        </thead>
                        <?php foreach ($periode as $periode): ?>
                  <tbody>
                      <tr>
                          <td><?php echo $periode->id?></td>
                          <td><?php echo $periode->user_id?></td>
                          <td><?php echo $periode->juri_id?></td>        
                          <td><?php echo $periode->periode?></td>  
                          <td><?php echo $periode->tgl_pelaksanaan?></td>
                          <td><?php echo $periode->tahun?></td>      
                          <td><?php echo $periode->keterangan?></td>          
                          <td><?php echo $periode->status?></td>        
                          <td><a href="<?php echo site_url('periode/edit/'.$periode->id) ?>"
                           href="#!" class="btn btn-small text-primary"><i class="fas fa-edit"></i> Edit</a>
                           <a href="<?php echo site_url('periode/delete/'.$periode->id) ?>"
                           onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ?');" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                          </td>
                      </tr>
                <?php endforeach?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
<?php $this->load->view("_partials/footer.php") ?>