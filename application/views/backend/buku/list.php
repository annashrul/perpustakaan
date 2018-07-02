<div class="row">
	<div class="col-md-12">
    <div class="panel panel-default">
      <?php if($this->session->userdata('hak_akses') == 'admin'){?>
      <div class="panel-heading">
        <a href="<?=base_url('buku/tambah')?>" class="btn btn-primary">Tambah</a>
        <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#largeModal">
          <span class="fa fa-plus"></span> Tambah Barang
        </a>
      </div>
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
                  <th>Judul Buku</th>
                  <th>Kategori Buku</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; foreach($bukus->result() as $b):?>
                <tr>
                  <td><?=$no++  ?></td>
                  <td><?=$b->judul_buku?></td>
                  <td><?=$b->nama_kategori?></td>
                  <td>
                  	<a href="<?=base_url('buku/edit/'.$b->id_buku)?>" class="btn btn-info" title="Update <?=$b->judul_buku?>">Update</a>
                    <a href="<?=base_url('buku/delete/'.$b->id_buku)?>" class="btn btn-danger" title="Delete <?=$b->judul_buku?>">Delete</a>
                    <!--MODAL-->
                    <button class="btn btn-success" data-toggle="modal" data-target="#View<?=$b->id_buku; ?>">Detail</button>
                    <div class="modal fade" id="View<?=$b->id_buku; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title" id="myModalLabel">Detail Buku <?=$b->judul_buku?></h4>
                        </div>
                        <div class="modal-body">
                          <div class="col-md-12">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-striped table-bordered table-hover">
                              <tr>
                                <td>Judul Buku</td>
                                <td><?=$b->judul_buku?></td>
                              </tr>
                              <tr>
                                <td>Nama Kategori Buku</td>
                                <td><?=$b->nama_kategori?></td>
                              </tr>  
                              <tr>
                                <td>ISBN</td>
                                <td><?=$b->isbn?></td>
                              </tr> 
                              <tr>
                                <td>Bahasa Buku</td>
                                <td><?=$b->bahasa?></td>
                              </tr>  
                              <tr>
                                <td>Pengarang Buku</td>
                                <td><?=$b->nama_kategori?></td>
                              </tr> 
                              <tr>
                                <td>Penerbit</td>
                                <td><?=$b->penerbit?></td>
                              </tr> 
                              <tr>
                                <td>Tahun Terbit Buku</td>
                                <td><?=$b->thn_terbit?></td>
                              </tr> 
                              <tr>
                                <td>Jumlah Buku</td>
                                <td><?=$b->jumlah?></td>
                              </tr>     
                            </table>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Modals-->  
                  </td>
                  </tr>
                <?php endforeach ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <?php }else{?>
      <!--USER-->
      <div class="panel-body">
        <div class="panel-heading"><a href="<?=base_url('buku/peminjaman')?>" class="btn btn-primary">Pinjam Buku</a></div>
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
                  <th>Judul Buku</th>
                  <th>Kategori Buku</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; foreach($bukus->result() as $b):?>
                <tr>
                  <td><?=$no++  ?></td>
                  <td><?=$b->judul_buku?></td>
                  <td><?=$b->nama_kategori?></td>
                  <td>
                    <!--MODAL-->
                    <button class="btn btn-success" data-toggle="modal" data-target="#View<?=$b->id_buku; ?>">Detail</button>
                    <div class="modal fade" id="View<?=$b->id_buku; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title" id="myModalLabel">Detail Buku <?=$b->judul_buku?></h4>
                        </div>
                        <div class="modal-body">
                          <div class="col-md-12">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-striped table-bordered table-hover">
                              <tr>
                                <td>Judul Buku</td>
                                <td><?=$b->judul_buku?></td>
                              </tr>
                              <tr>
                                <td>Nama Kategori Buku</td>
                                <td><?=$b->nama_kategori?></td>
                              </tr>  
                              <tr>
                                <td>ISBN</td>
                                <td><?=$b->isbn?></td>
                              </tr> 
                              <tr>
                                <td>Bahasa Buku</td>
                                <td><?=$b->bahasa?></td>
                              </tr>  
                              <tr>
                                <td>Pengarang Buku</td>
                                <td><?=$b->nama_kategori?></td>
                              </tr> 
                              <tr>
                                <td>Penerbit</td>
                                <td><?=$b->penerbit?></td>
                              </tr> 
                              <tr>
                                <td>Tahun Terbit Buku</td>
                                <td><?=$b->thn_terbit?></td>
                              </tr> 
                              <tr>
                                <td>Jumlah Buku</td>
                                <td><?=$b->jumlah?></td>
                              </tr>     
                            </table>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Modals-->  
                  </td>
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

<!-- ============ MODAL ADD =============== -->

<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 class="modal-title" id="myModalLabel">Tambah Buku</h3>
      </div>
      <form class="form-horizontal" method="post">
        <div class="modal-body">
          <div class="form-group">
            <label class="control-label">ISBN</label>
            <input type="text" name="isbn" placeholder="ISBN" class="form-control" required>
          </div>
          <div class="form-group">
            <label class="control-label">Judul Buku</label>
            <input type="text" name="judul_buku" placeholder="Judul Buku" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Bahasa</label>
            <select name="bahasa" class="selectpicker show-tick form-control" data-live-search="true" title="Pilih Bahasa" data-width="100%" required>
              <option value="indonesia">indonesia</option>
              <option value="inggris">inggris</option>
            </select>
          </div>
          <div class="form-group">
            <label class="control-label">Kategori Buku</label>
            <select name="id_kategori" class="selectpicker show-tick form-control" data-live-search="true" title="Pilih Kategori" data-width="100%" required>
              <?php foreach($kategoris->result() as $k):?>
              <option value="<?=$k->id_kategori?>"><?=$k->nama_kategori?></option>
              <?php endforeach ?>
            </select>
          </div>
          <div class="form-group">
            <label class="control-label">Pengarang</label>
            <input type="text" name="pengarang" placeholder="Pengarang Buku" class="form-control" required>
          </div>
          <div class="form-group">
            <label class="control-label">Penerbit</label>
            <input type="text" name="penerbit" placeholder="Penerbit Buku" class="form-control" required>
          </div>
          <div class="form-group">
            <label class="control-label">Tahun Penerbit</label>
            <input type="text" name="thn_terbit" placeholder="Tahun Penerbit" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Jumlah</label>
            <input type="number" name="jumlah" placeholder="Jumlah Buku" class="form-control" required></input>
          </div>
        </div>

        <div class="modal-footer">
          <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Tutup</button>
          <button class="btn btn-info" type="submit" name="submit" value="Submit">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
