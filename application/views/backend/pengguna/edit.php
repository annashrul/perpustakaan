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
<form action="<?php echo base_url('pengguna/update/'.$pengguna->id_admin) ?>" method="post">
	<div class="row">
		<!-- Basic example -->
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="col-md-6">
					<div class="form-group">
						<label>Nama</label>
						<input type="text" name="nama" placeholder="Nama" value="<?=$pengguna->nama?>" class="form-control" required>
					</div>
          <div class="form-group">
						<label>Username</label>
						<input type="text" name="username" placeholder="Username" value="<?=$pengguna->username?>" class="form-control" required>
					</div>
          <div class="form-group">
						<label>Password</label>
						<input type="password" name="password" placeholder="Password" value="" class="form-control" required>
					</div>
          <div class="form-group">
            <label>Akses Level</label>
            <select name="hak_akses" class="form-control">
              <option value="admin" <?php if($pengguna->hak_akses == 'admin'){ echo 'selected';} ?>>Admin</option>
              <option value="user" <?php if($pengguna->hak_akses == 'user'){ echo 'selected';} ?>>Member</option>
            </select>
          </div>
				</div>
				<div class="col-md-12">
					<button class="btn btn-success waves-effect waves-light" type="submit">Save</button>
					<button class="btn btn-default waves-effect" type="reset">Cancel</button>
					<a href="<?=base_url('pengguna') ?>" class="btn btn-inverse">Back</a>
				</div>
			</div>
		</div>
	</div>
</form>