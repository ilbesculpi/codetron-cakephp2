<?php
	$this->set('title', 'Edit {{ model }}');
	$this->set('csspage', '{{ models }}');
?>
<div class="content-wrapper">

	<section class="content-header">
		<h1>
			<?php echo __d('cms', '{{ Models }}'); ?>
			<small><?php echo __d('cms', 'Edit'); ?></small>
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
				<?php echo __d('cms', 'Edit'); ?>
			</li>
		</ol>
    </section>
	
	<section class="content">
		
		<div class="box box-default">
			
			<div class="box-header with-border">
				<h3 class="box-title">
					<i class="fa fa-tag"></i>
					<?php echo __d('cms', '{{ Models }}'); ?>
				</h3>
				<div class="pull-right box-tools">
					<button type="button" class="btn btn-default btn-xs">
						<i class="fa fa-cog"></i>
					</button>
				</div>
			</div>
			
			<form method="post" data-validation="form-{{models}}">
				
				<div class="box-body">

					<div class="row">

						<div class="col-sm-12">

							<input type="hidden" id="{{primaryField.name}}" name="{{primaryField.name}}" value="<?php echo $proxy['{{Model}}']['{{primaryField.name}}']; ?>" />

							{{#fields}}
							<div class="form-group">
								<label for="{{name}}"><?php echo __d('cms', '{{label}}'); ?></label>
								<input type="text" id="{{name}}" name="data[{{Model}}][{{name}}]" class="form-control" value="<?php echo $proxy['{{Model}}']['{{name}}']; ?>" />
							</div>
							{{/fields}}

						</div>

					</div>

				</div>

				<div class="box-footer">
					<div class="form-group">
						<input type="submit" class="btn btn-primary" value="<?php echo __d('cms', 'Save'); ?>" />
						<a href="<?php echo Router::url(array('action' => 'index')); ?>" class="btn btn-default">
							<?php echo __d('cms', 'Cancel'); ?>
						</a>
					</div>
				</div>
				
			</form>
			
		</div>
		
	</section>
	
</div>