<script>
    $(document).ready(function(){
        $('#modapp').modal('show');
    });
</script>

<div class="modal" id="modapp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalLabel">Appointment</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- isi form ini -->
					<form id="formregister" action="<?= site_url('User/insertAppointment') ?>" method="post">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-sm-6">
                                <label for="nama_depan">Nama Depan</label>
                                <input type="text" class="form-control" name="nama_depan" value="<?= $user['nama_depan'] ?>" required>
                            </div>
                            <div class="col-sm-6">
                                <label for="nama_belakang">Nama Belakang</label>
                                <input type="text" class="form-control" name="nama_belakang" value="<?= $user['nama_belakang'] ?>" required>
                            </div>
                            <div class="col-sm-6">
                                <label for="rumahsakit">Rumah Sakit</label>
                                <select name="rumah_sakit" id="rumahsakit">
                                    <option selected="selected">Choose one</option>
                                    <?php foreach ($rs as $item) { ?>
                                        <option value="<?php echo strtolower($item['nama']); ?>"><?php echo $item['nama']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group row">
                              <label for="example-date-input" class="col-2 col-form-label">Date</label>
                              <div class="col-10">
                                <input name = "tanggal" class="form-control" type="date" id="example-date-input">
                              </div>
                            </div>
                        </div>
                    </div>
				<div class="modal-footer">
                    <a href="<?php echo base_url() ?>/user"><button type="button" class="btn btn-secondary" >Tidak</button></a>
					<button type="submit" class="btn btn-primary button1">Submit</button>
				</div>
				</form>
			</div>
		</div>
	</div>
	</div>
