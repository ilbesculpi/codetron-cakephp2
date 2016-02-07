<?php 
	$navigation = array(
		array(
			'icon' => 'fa fa-dashboard',
			'url' => Router::url(['controller' => 'dashboard', 'action' => 'home']),
			'text' => __d('cms', 'Dashboard')
		),
		array(
			'icon' => 'fa fa-cog',
			'url' => Router::url(['action' => 'index']),
            'text' => __d('cms', '{{Models}}')
		),
		array(
            'text' => ${{model}}['{{Model}}']['name']
		)
	);
	
	$dateFormat = '%d/%m/%Y %l:%M %p';
?>

<?php echo $this->Theme->breadcrumbs($navigation); ?>

<div class="{{ models }}">

	<h2 class="page-header">
		<i class="fa fa-cog"></i>
        <?php echo __d('cms', '{{Models}}'); ?>
        <small><?php echo h(${{model}}['{{Model}}']['name']); ?></small>
	</h2>

	<div class="panel panel-default">
        
		<div class="panel-heading clearfix">
			<h3 class="panel-title pull-left"><?php echo h(${{model}}['{{Model}}']['name']); ?></h3>
			<div class="btn-group pull-right">
                <a href="<?php echo $this->Html->url(['action' => 'edit', ${{model}}['{{Model}}']['id']]); ?>" 
				   class="btn btn-default btn-sm">
					<i class="fa fa-edit"></i>
					<?php echo __d('cms', 'Edit'); ?>
				</a>
				<a href="<?php echo $this->Html->url(['action' => 'delete', ${{model}}['{{Model}}']['id']]); ?>" 
				   class="btn btn-default btn-sm" data-confirm="<?php echo __d('cms', 'Are you sure you want to delete this {{Model}}?'); ?>">
					<i class="fa fa-trash"></i>
					<?php echo __d('cms', 'Delete'); ?>
				</a>
			</div>
		</div>
        
		<div class="panel-body">
			
            <h3 class="page-header"><?php echo __d('cms', 'Info'); ?></h3>
            
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