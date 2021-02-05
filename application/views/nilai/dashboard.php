<?php $this->load->view("_partials/head.php") ?>
<?php $this->load->view("_partials/sidebar.php") ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data nilai</h6>
            <a href="<?php echo site_url('nilai/tambah/') ?>"
                href="#!"  class="btn btn-outline-success"><strong>Tambah</strong></a>
        </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                               <th>id nilai</th>
                               <th>banjar id</th>
                               <th>juri id</th>
                               <th>wujud</th>
                               <th>keutuhan</th>
                               <th>bahan</th>
                               <th>tinggi</th>
                               <th>unsur</th>
                               <th>ekspresi</th>
                               <th>keindahan</th>
                               <th>keserasian</th>
                               <th>inovasi</th>
                               <th>total nilai</th>
                               <th>rata rata</th>
                            </tr>
                        </thead>
                        <?php foreach ($nilai as $nilai): ?>
                  <tbody>
                      <tr>
                          <td><?php echo $nilai->id?></td>
                          <td><?php echo $nilai->banjar_id?></td>
                          <td><?php echo $nilai->juri_id?></td>        
                          <td><?php echo $nilai->wujud?></td>  
                          <td><?php echo $nilai->keutuhan?></td>
                          <td><?php echo $nilai->bahan?></td>   
                          <td><?php echo $nilai->tinggi?></td>        
                          <td><?php echo $nilai->unsur?></td>  
                          <td><?php echo $nilai->ekspresi?></td>
                          <td><?php echo $nilai->keindahan?></td>     
                          <td><?php echo $nilai->keserasian?></td>   
                          <td><?php echo $nilai->inovasi?></td>            
                          <td>
                          <!-- <?php if($this->session->userdata('role') =="admin"): ?>
                          <a href="<?php echo site_url('nilai/print/') ?>"
                           href="#!" class="btn btn-small text-primary"><i class="fas fa-edit"></i> Print</a>
                           <?php endif ?> -->
                          <!-- <?php if($this->session->userdata('role') =="juri"): ?>
                          <a href="<?php echo site_url('nilai/edit/'.$nilai->id) ?>"
                           href="#!" class="btn btn-small text-primary"><i class="fas fa-edit"></i> Edit</a>
                           <a href="<?php echo site_url('nilai/delete/'.$nilai->id) ?>"
                           onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ?');" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                           <?php endif ?> -->
                          </td>
                      </tr>
                <?php endforeach?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
<?php $this->load->view("_partials/footer.php") ?>