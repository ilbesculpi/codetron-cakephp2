<?php
	$this->assign('title', __d('cms', 'Registration Page'));
	$this->assign('csspage', 'register');
?>

<div class="auth-box-body">

	<p class="auth-box-msg"><?php echo __d('cms', 'Create a new account'); ?></p>

	<form method="post">

		<div class="form-group has-feedback">
			<input type="text" name="name" class="form-control" placeholder="<?php echo __d('cms', 'Name'); ?>">
			<span class="fa fa-user form-control-feedback"></span>
		</div>

		<div class="form-group has-feedback">
			<input type="email" name="email" class="form-control" placeholder="<?php echo __d('cms', 'user@example.com'); ?>">
			<span class="fa fa-envelope-o form-control-feedback"></span>
		</div>

		<div class="form-group has-feedback">
			<input type="password" name="password" class="form-control" placeholder="<?php echo __d('cms', 'Password'); ?>">
			<span class="fa fa-lock form-control-feedback"></span>
		</div>

		<div class="form-group has-feedback">
			<input type="password" name="passwordConfirm" class="form-control" placeholder="<?php echo __d('cms', 'Retype password'); ?>">
			<span class="glyphicon glyphicon-log-in form-control-feedback"></span>
		</div>

		<div class="row">
			<div class="col-xs-6 col-xs-offset-6">
				<button type="submit" class="btn btn-primary btn-block btn-flat"><?php echo __d('cms', 'Create account'); ?></button>
			</div>
		</div>

	</form>

	<p>
		<?php echo __d('cms', 'Already have an account?'); ?>
		<a href="<?php echo $this->Html->url(['action' => 'login']); ?>" class="text-center">
			<?php echo __d('cms', 'Sign in'); ?>
		</a>
	</p>

</div>