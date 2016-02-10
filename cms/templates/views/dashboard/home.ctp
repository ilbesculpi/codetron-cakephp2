 <div class="content-wrapper">
	
	 <section class="content-header">
      <h1>
        <?php echo __d('cms', 'Dashboard'); ?>
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>
	
	<section class="content">
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title"><?php echo __d('cms', 'Dashboard'); ?></h3>
			</div>
			<div class="box-body">
				{{#models}}
				<div class="col-sm-6 col-md-3">
					<a href="<?php echo Router::url(['controller' => '{{ controller }}', 'action' => 'index']); ?>">
						<i class="fa fa-cog"></i>
						<?php echo __d('cms', '{{ title }}'); ?>
					</a>
				</div>
				{{/models}}
			</div>
        </div>
	</section>
	
</div>