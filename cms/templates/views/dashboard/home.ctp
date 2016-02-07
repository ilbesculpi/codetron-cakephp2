<div class="dashboard">
	
	<h1 class="page-header">
        <i class="fa fa-dashboard"></i>
        <?php echo __d('cms', 'Dashboard'); ?>
    </h1>
	
	<div class="row text-center">
        
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