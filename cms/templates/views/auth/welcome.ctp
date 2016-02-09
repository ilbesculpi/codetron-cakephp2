<?php
	$this->assign('title', __d('cms', 'Welcome Page'));
	$this->assign('csspage', 'welcome');
?>

<div class="auth-box-body">

	<div class="box box-success">

		<div class="box-header with-border">
			<h3 class="box-title"><?php echo __d('cms', 'Welcome to %s', $CMS); ?></h3>
		</div>
		
		<div class="box-body no-padding">
			<div class="social-auth-links text-center">
				<a href="<?php echo $this->Html->url(['action' => 'login']); ?>" class="btn btn-block btn-social btn-default btn-flat">
					<i class="fa fa-lock"></i>
					<?php echo __d('cms', 'Sign in'); ?>
				</a>
			</div>
		</div>

	</div>

</div>