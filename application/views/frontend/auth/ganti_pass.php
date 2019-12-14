<div class="container-fluid">
	<h1>ganti pass</h1>

	<div>
		<?= $this->session->flashdata('message'); ?>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<form action="<?= base_url('auth/changepass'); ?>" method="pos">
				<div class="form-group">
					<label for="current_password">Password</label>
					<input type="password" name="current_password" class="form-control" placeholder="">
					<?= form_error('current_password','<small class="text-danger pl-3">','</small>'); ?>
				</div>

				<div class="form-group">
					<label for="new_password1">Password Baru</label>
					<input type="password" name="new_password1" class="form-control" placeholder="">
					<?= form_error('new_password1','<small class="text-danger pl-3">','</small>'); ?>
				</div>

				<div class="form-group">
					<label for="new_password2">Repeat Password</label>
					<input type="password" name="new_password2" class="form-control" placeholder="">
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary">Ganti pass</button>
				</div>

			</form>
		</div>
	</div>
</div>