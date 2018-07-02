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
<form action="<?php echo base_url('buku/edit/'.$buku->id_buku) ?>" method="post">
	<div class="row">
		<!-- Basic example -->
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="col-md-6">
					<div class="form-group">
						<label>Kategori</label>
						<select name="id_kategori" class="form-control">
							<?php foreach ($kategori as $kategori) { ?>
							<option value="<?=$kategori->id_kategori ?>"<?php if ($buku->id_kategori==$kategori->id_kategori){echo "selected";}?>>
							  <?=$kategori->nama_kategori ?>
							</option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label>ISBN</label>
						<input type="text" name="isbn" placeholder="ISBN" value="<?=$buku->isbn?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Judul Buku</label>
						<input type="text" name="judul_buku" placeholder="Judul Buku" value="<?=$buku->judul_buku?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Bahasa</label>
						<select name="bahasa" class="form-control">
							<option value="indonesia"<?php if($buku->bahasa == 'indonesia'){echo 'selected';} ?>>indonesia</option>
							<option value="inggris"<?php if($buku->bahasa == 'inggris'){echo 'selected';} ?>>inggris</option>
						</select>
					</div>
					<div class="form-group">
						<label>Pengarang Buku</label>
						<input type="text" name="pengarang" placeholder="Pengarang Buku" value="<?=$buku->pengarang?>" class="form-control" required>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Penerbit Buku</label>
						<input type="text" name="penerbit" placeholder="Penerbit Buku" value="<?=$buku->penerbit?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Tahun Penerbit</label>
						<input type="text" name="thn_penerbit" placeholder="Tahun Penerbit" value="<?=$buku->thn_terbit?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Jumlah</label>
						<input type="number" name="jumlah" placeholder="Jumlah Buku" value="<?=$buku->jumlah?>" class="form-control" required></input>
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