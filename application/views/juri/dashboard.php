<?php $this->load->view("_partials/head.php") ?>
<?php $this->load->view("_partials/sidebar.php") ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data juri</h6>
            <a href="<?php echo site_url('juri/tambah/') ?>"
                href="#!"  class="btn btn-outline-success"><strong>Tambah</strong></a>
        </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                               <th>id juri</th>
                               <th>nama</th>
                               <th>username</th>
                               <th>password</th>
                               <th>alamat</th>
                               <th>status</th>
                               <th>no telpon</th>
                               <th>Actoin</th>
                            </tr>
                        </thead>
                        <?php foreach ($juri as $juri): ?>
                  <tbody>
                      <tr>
                          <td><?php echo $juri->id?></td>
                          <td><?php echo $juri->nama?></td>
                          <td><?php echo $juri->username?></td>        
                          <td><?php echo md5($juri->password)?></td>  
                          <td><?php echo $juri->alamat?></td>
                          <td><?php echo $juri->status?></td>      
                          <td><?php echo $juri->telp?></td>               
                          <td><a href="<?php echo site_url('juri/edit/'.$juri->id) ?>"
                           href="#!" class="btn btn-small text-primary"><i class="fas fa-edit"></i> Edit</a>
                           <!-- <a href="<?php echo site_url('juri/delete/'.$juri->id) ?>"
                           onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ?');" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a> -->
                          </td>
                      </tr>
                <?php endforeach?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
<?php $this->load->view("_partials/footer.php") ?>