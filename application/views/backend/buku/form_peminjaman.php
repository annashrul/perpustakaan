<?php
	// Session 
	if($this->session->flashdata('sukses')) { 
		echo '<div class="alert alert-success">';
		echo $this->session->flashdata('sukses');
		echo '</div>';
	} 
	// Error
	echo validation_errors('<div class="alert alert-success">','</div>'); 

?>
<form action="<?php echo base_url('buku/peminjaman') ?>" method="post">
	<div class="row">
		<!-- Basic example -->
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="col-md-6">
					<div class="form-group">
						<label>Nama Peminjam</label>
						<input type="text" name="nama_peminjam" placeholder="Nama Peminjam" value="<?=$this->session->userdata('username') ?>" class="form-control" required disabled readonly>
					</div>
					<div class="form-group">
						<label>Judul Buku</label>
						<select name="id_buku" class="selectpicker show-tick form-control" data-live-search="true" title="Judul Buku">
							<?php foreach($buku as $b):?>
							<option value="<?=$b->id_buku?>"><?=$b->judul_buku?></option>
							<?php endforeach ?>
						</select>
					</div>
					<div class="form-group">
						<label>Tanggal Meminjam</label>
						<input type="text" class="form-control" name="tgl_peminjaman" readonly="" disabled="" value="<?=date('d F Y')?>">
					</div>
					<!-- <div class="form-group">
						<label>Lama Meminjam <small style="color:red!important;">(Maksimal 7 Hari)</small></label>
						<input type="text" class="form-control" name="lama_peminjaman" required=""></input>
					</div> -->
					<div class="form-group">
						<label>Jumlah Peminjaman</label>
						<input type="number" class="form-control" name="jumlah_peminjaman" required=""></input>
					</div>
				</div>
				<div class="col-md-12">
					<button class="btn btn-success waves-effect waves-light" type="submit">Pinjam</button>
					<button class="btn btn-default waves-effect" type="reset">Cancel</button>
					<!-- <a href="<?=base_url('buku') ?>" class="btn btn-inverse">Back</a> -->
				</div>
			</div>
		</div>
	</div>
</form>