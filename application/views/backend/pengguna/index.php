<div class="row">
	<div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading"><a href="<?=base_url('pengguna/insert')?>" class="btn btn-primary">Tambah</a></div>
        <div class="panel-body">
          <?php 
            if($this->session->flashdata('sukses')){
              echo "<div class='alert alert-success'>";
              echo $this->session->flashdata('sukses');
              echo "</div>";
            }
            echo validation_errors("<div class='alert alert-danger'>","</div>");
          ?>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <table id="datatable" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Hak Akses</th>
                    <th>Aksi</th>
                    <!-- <th>Aksi</th> -->
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $no = 1; 
                    foreach($pengguna as $p):
                    if($p->hak_akses != 'admin'):
                  ?>
                  <tr>
                    <td><?=$no++  ?></td>
                    <td><?=$p->nama?></td>
                    <td><?=$p->username?></td>
                    <td>
                      <?php if($p->hak_akses == 'admin'):?>
                        <button class="btn btn-warning">Admin</button>
                      <?php else: ?>
                        <button class="btn btn-default">Member</button>
                      <?php endif ?>
                    </td>
                    <td>
                      <a href="<?=base_url('pengguna/update/'.$p->id_admin)?>" class="btn btn-info">Edit</a>
                      <a href="<?=base_url('pengguna/delete/'.$p->id_admin)?>" class="btn btn-danger">Hapus</a>
                      <a href="<?=base_url('pengguna/history/'.$p->id_admin)?>" class="btn btn-default">History</a>
                    </td>
                    
                  </tr>
                  <?php endif; endforeach ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
	 </div>
  </div>
</div>

