<div class="container">
	<div class="d-flex justify-content-center">
		<div class="container-login">
			<h3 class="text-center">MEMORE</h3>
			<?= $this->session->flashdata('message'); ?>
			<form method="post" action="Login">
				<div class="form-group">
					<label for="uname">Username</label>
					<input type="input" class="form-control" id="uname" name="uname" aria-describedby="emailHelp" placeholder="Username" value="<?= set_value('uname') ?>">
					<?= form_error('uname', '<small class="text-danger">', '</small>'); ?>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control" id="password" name="password" placeholder="Password">
					<?= form_error('password', '<small class="text-danger">', '</small>'); ?>
				</div>
				<button type="submit" class="btn btn-primary center">Login</button>
			</form>
		</div>
	</div>
</div>
