<div class="row">
	<div class="col-md-12">
    <div class="panel panel-default">
      <?php if($this->session->userdata('hak_akses') == 'admin'){?>
      <div class="panel-heading"><a href="<?=base_url('kategori/tambah')?>" class="btn btn-primary">Tambah</a></div>
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
                    <th>Nama Kategori Buku</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1; foreach($kategori as $k):?>
                  <tr>
                    <td><?=$no++  ?></td>
                    <td><?=$k->nama_kategori?></td>
                    <td>
                    	<a href="<?=base_url('kategori/edit/'.$k->id_kategori)?>" class="btn btn-info" title="Update <?=$k->nama_kategori?>">Update</a>
                      <a href="<?=base_url('kategori/delete/'.$k->id_kategori)?>" class="btn btn-danger" title="Delete <?=$k->nama_kategori?>">Delete</a>
                      </td>
                    </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!--END ADMIN-->
      <?php }else{ ?>
      <!--USER-->
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
                  <th>Nama Kategori Buku</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; foreach($kategori as $k):?>
                <tr>
                  <td><?=$no++  ?></td>
                  <td><?=$k->nama_kategori?></td>
                </tr>
                <?php endforeach ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <?php } ?>
      <!--END USER-->
	 </div>
  </div>
</div>

