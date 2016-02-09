<?php
	$this->assign('title', __d('cms', 'Sign In Page'));
	$this->assign('csspage', 'login');
?>

<div class="auth-box-body">

	<p class="auth-box-msg"><?php echo __d('cms', 'Sign in to start your session'); ?></p>

	<form method="post">

		<div class="form-group has-feedback">
			<input type="email" name="email" class="form-control" placeholder="<?php echo __d('cms', 'user@example.com'); ?>">
			<span class="fa fa-envelop-o form-control-feedback"></span>
		</div>

		<div class="form-group has-feedback">
			<input type="password" name="password" class="form-control" placeholder="<?php echo __d('cms', 'Password'); ?>">
			<span class="fa fa-lock form-control-feedback"></span>
		</div>

		<div class="row">
			<div class="col-xs-8">
				<div class="checkbox icheck">
					<label>
						<input type="checkbox">
						<?php echo __d('cms', 'Remember Me'); ?>
					</label>
				</div>
			</div>
			<div class="col-xs-4">
				<button type="submit" class="btn btn-primary btn-block btn-flat"><?php echo __d('cms', 'Sign In'); ?></button>
			</div>
		</div>

	</form>

	<p>
		<?php echo __d('cms', 'Don\'t have an account?'); ?>
		<a href="<?php echo $this->Html->url(['controller' => 'auth', 'action' => 'register']); ?>" class="text-center">
			<?php echo __d('cms', 'Create one here'); ?>
		</a>
	</p>

	<p>
		<?php echo __d('cms', 'Don\'t remember your password?'); ?>
		<a href="<?php echo $this->Html->url(['controller' => 'auth', 'action' => 'forgot']); ?>">
			<?php echo __d('cms', 'Reset your password'); ?>
		</a>
	</p>

</div>