<script>
    $(document).ready(function(){
        $('#modapp').modal('show');
    });
</script>
<style>
h3{
  font-family: Open Sans;
  font-style: normal;
  font-weight: bold;
  font-size: 54px;
  color: Black;
  text-align:center;
}

</style>
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
					<form id="formregister" action="<?= site_url('User/appointment') ?>" method="post">
                    <h3> Appointment Berhasil Dibuat </h3>
				<div class="modal-footer">
                    <a href="<?php echo base_url() ?>/user"><button type="button" class="btn btn-secondary" >Kembali ke Home</button></a>
					<button type="submit" class="btn btn-primary button1">Buat Appointment Lagi</button>
				</div>
				</form>
			</div>
		</div>
	</div>
	</div>
