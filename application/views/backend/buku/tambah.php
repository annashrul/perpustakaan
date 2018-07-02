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
<form action="<?php echo base_url('buku/tambah') ?>" method="post">
	<div class="row">
		<!-- Basic example -->
		
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="col-md-6">
					<div class="form-group">
			      <label>Kategori</label>
			      <select name="id_kategori" class="form-control">
			        <?php foreach($kategori as $k):?>
			        <option value="<?=$k->id_kategori?>"><?=$k->nama_kategori?></option>
			        <?php endforeach ?>
			      </select>
			    </div>
					<div class="form-group">
						<label>ISBN</label>
						<input type="text" name="isbn" placeholder="ISBN" value="<?=set_value('isbn') ?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Judul Buku</label>
						<input type="text" name="judul_buku" placeholder="Judul Buku" value="<?=set_value('judul_buku') ?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Bahasa</label>
						<select name="bahasa" class="form-control">
							<option value="indonesia">indonesia</option>
							<option value="inggris">inggris</option>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Pengarang Buku</label>
						<input type="text" name="pengarang" placeholder="Pengarang Buku" value="<?=set_value('pengarang') ?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Penerbit Buku</label>
						<input type="text" name="penerbit" placeholder="Penerbit Buku" value="<?=set_value('penerbit') ?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Tahun Terbit</label>
						<input type="text" name="thn_terbit" placeholder="Tahun Penerbit" value="<?=set_value('thn_terbit') ?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Jumlah</label>
						<input type="number" name="jumlah" placeholder="Jumlah Buku" value="<?=set_value('jumlah')?>" class="form-control" required></input>
					</div>
				</div>
				<div class="col-md-12">
					<button class="btn btn-success waves-effect waves-light" type="submit">Save</button>
					<button class="btn btn-default waves-effect" type="reset">Cancel</button>
					<a href="<?=base_url('buku') ?>" class="btn btn-inverse">Back</a>
				</div>
			</div>
		</div>
	</div>
</form>