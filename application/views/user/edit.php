
<script>
    $(document).ready(function(){
        $('#editprofil').modal('show');
    });
</script>

<div class="modal" id="editprofil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalLabel">Edit Profil</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- isi form ini -->
					<form method="post" action="">
						<div class="col-12"><img style="height:80px; width:80px;"src="<?php echo base_url('/assets/images/') . $user['image']; ?>"></div>
						<div class="form-group">
							<label for="formGroupExampleInput">Nama Depan</label>
							<input type="text" class="form-control" name="namadepan" id="namadepan" placeholder="Nama Depan"  value="<?= $user['nama_depan'] ?>" required>
						</div>
						<div class="form-group">
							<label for="formGroupExampleInput">Nama Belakang</label>
							<input type="text" class="form-control" name="namabelakang" id="namabelakang" placeholder="Nama Belakang"  value="<?= $user['nama_belakang'] ?>" required>
						</div>
						<div class="form-group">
							<label for="formGroupExampleInput2">Email</label>
							<input type="text" class="form-control"  name="email" id="email" placeholder="Email"  value="<?= $user['email'] ?>" required>
						</div>
						<div class="form-group">
							<label for="formGroupExampleInput2">Password</label>
							<input type="text" class="form-control" name="password" id="password" placeholder="Password"  value="" required>
						</div>
				</div>
				<div class="modal-footer">
				<a href="<?php echo base_url() ?>/user"><button type="button" class="btn btn-secondary" >Tidak</button></a>
					<input type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
				</div>
				</form>
			</div>
		</div>
	</div>
	</div>
