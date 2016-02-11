<?php 
	$this->set('title', '{{ Models }}');
	$this->set('csspage', '{{ models }}');
?>

<div class="content-wrapper">

	<section class="content-header">
		<h1>
			<?php echo __d('cms', '{{ Models }}'); ?>
			<small><?php echo __d('cms', 'View'); ?></small>
		</h1>
		<ol class="breadcrumb">
			<li>
				<a href="<?php echo Router::url(['controller' => 'dashboard', 'action' => 'home']); ?>">
					<i class="fa fa-dashboard"></i>
				<?php echo __d('cms', 'Dashboard'); ?>
				</a>
			</li>
			<li>
				<a href="<?php echo Router::url(['action' => 'index']); ?>">
					<i class="fa fa-cog"></i>
					<?php echo __d('cms', '{{ Models }}'); ?>
				</a>
			</li>
			<li class="active">
				<?php echo __d('cms', 'View'); ?>
			</li>
		</ol>
    </section>
	
	<section class="content">
		
		<div class="box box-default">
			
			<div class="box-header with-border">
				<h3 class="box-title">
					<i class="fa fa-cog"></i>
					<?php echo __d('cms', '{{ Models }}'); ?>
				</h3>
				<div class="pull-right box-tools">
					<button type="button" class="btn btn-default btn-xs">
						<i class="fa fa-cog"></i>
					</button>
				</div>
			</div>
			
			<div class="box-body">
				
				<div class="row">
					
					<div class="col-sm-12">
						
						{{#fields}}
						<?php if(${{model}}['{{Model}}']['{{name}}']): ?>
						<div class="form-group">
							<label><?php echo __d('cms', '{{label}}'); ?>:</label>
							<div><?php echo ${{model}}['{{Model}}']['{{name}}']; ?></div>
						</div>
						<?php endif; ?>
						{{/fields}}
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</section>
	
</div>
