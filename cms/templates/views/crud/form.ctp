<?php 
	$navigation = array(
		array(
			'icon' => 'fa fa-dashboard',
			'url' => Router::url(array('controller' => 'dashboard', 'action' => 'home')),
			'text' => __d('cms', 'Dashboard')
		),
		array(
			'icon' => 'fa fa-circle-o',
			'url' => Router::url(array('action' => 'index')),
			'text' => __d('cms', '{{Models}}')
		),
		array(
			'text' => $this->fetch('subtitle')
		)
	);
?>

<?php echo $this->Theme->breadcrumbs($navigation); ?>

<div class="{{models}}">

	<h2 class="page-header">
		<i class="fa fa-circle-o"></i>
		<?php echo __d('cms', '{{Models}}'); ?>
		<small><?php echo $this->fetch('subtitle'); ?></small>
	</h2>

    <form method="post" data-validation="form-{{models}}">

        <input type="hidden" id="{{primaryField.name}}" name="data[{{Model}}][{{primaryField.name}}]" value="<?php echo $proxy['{{Model}}']['{{primaryField.name}}']; ?>" />

        <div class="panel panel-default">

            <div class="panel-heading">
                <?php echo __d('cms', '{{Model}} Info'); ?>
            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-12">
                        {{#fields}}
                        <div class="form-group">
                            <label for="{{name}}"><?php echo __d('cms', '{{label}}'); ?></label>
                            <input type="text" id="{{name}}" name="data[{{Model}}][{{name}}]" class="form-control" value="<?php echo $proxy['{{Model}}']['{{name}}']; ?>" />
                        </div>
                        {{/fields}}
                    </div>
                </div>
            </div>

            <div class="panel-footer">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="<?php echo __d('cms', 'Save'); ?>" />
                            <a href="<?php echo Router::url(array('action' => 'index')); ?>" class="btn btn-default">
                                <?php echo __d('cms', 'Cancel'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

    </form>
	
</div>

<?php $this->append('scripts'); ?>
<script>
	$( document ).ready(function() {
		
		// TODO
		
	});
</script>
<?php $this->end(); ?>