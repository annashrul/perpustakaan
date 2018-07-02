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
<form action="<?php echo base_url('kategori/tambah') ?>" method="post">
	<div class="row">
		<!-- Basic example -->
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="col-md-6">
					<div class="form-group">
						<label>Nama Kategori Buku</label>
						<input type="text" name="nama_kategori" placeholder="Nama Kategori Buku" value="<?=set_value('nama_kategori') ?>" class="form-control" required>
					</div>
				</div>
				<div class="col-md-12">
					<button class="btn btn-success waves-effect waves-light" type="submit">Save</button>
					<button class="btn btn-default waves-effect" type="reset">Cancel</button>
					<a href="<?=base_url('kategori') ?>" class="btn btn-inverse">Back</a>
				</div>
			</div>
		</div>
	</div>
</form>