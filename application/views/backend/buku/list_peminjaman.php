<div class="row">
	<div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading"><a href="<?=base_url('buku/peminjaman')?>" class="btn btn-primary">Tambah</a></div>
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
                    <th>Nama Peminjam</th>
                    <th>Judul Buku</th>
                    <th>Tgl Peminjaman</th>
                    <th>Tgl Pengembalian</th>
                    <th>Jumlah Peminjaman</th>
                    <th>Status</th>
                    <?php if($this->session->userdata('hak_akses') == 'admin'){?>
                    <th>Aksi</th>
                    <?php }else{} ?>

                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1; foreach($pinjam as $p):?>
                  <tr>
                    <td><?=$no++  ?></td>
                    <td><?=$p->username?></td>
                    <td><?=$p->judul_buku?></td>
                    <td><?=date('F d Y',strtotime($p->tgl_peminjaman))?></td>
                    <td><?=date('F d Y',strtotime($p->lama_peminjaman. ' + 7 day'));?></td>
                    <td><?=$p->jumlah_peminjaman?></td>
                    <td>
                      <?php if($p->status_peminjaman == 'dipinjam'){?>
                        <a href="<?=base_url('buku/status_dipinjam/'.$p->id_peminjaman)?>" class="btn btn-info"><?=$p->status_peminjaman?></a>
                      <?php }else{?>
                        <a href="<?=base_url('buku/status_kembali/'.$p->id_peminjaman)?>" class="btn btn-danger"><?=$p->status_peminjaman?></a>
                      <?php } ?>   
                    </td>
                    <?php if($this->session->userdata('hak_akses') == 'admin'){ ?>
                    <td>
                      <a href="<?=base_url('buku/status_kembali/'.$p->id_peminjaman)?>" class="btn btn-default">Kembali</a>
                    </td>
                    <?php }else{} ?>
                    </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
	 </div>
  </div>
</div>

