<?php 
	$this->set('title', '{{ Models }}');
	$this->set('csspage', '{{ models }}');
?>

<div class="content-wrapper">

	<section class="content-header">
		<h1>
			<?php echo __d('cms', '{{ Models }}'); ?>
			<small><?php echo __d('cms', 'Listing'); ?></small>
		</h1>
		<ol class="breadcrumb">
			<li>
				<a href="<?php echo Router::url(['controller' => 'dashboard', 'action' => 'home']); ?>">
					<i class="fa fa-dashboard"></i>
				<?php echo __d('cms', 'Dashboard'); ?>
				</a>
			</li>
			<li class="active">
				<i class="fa fa-cog"></i>
				<?php echo __d('cms', '{{ Models }}'); ?>
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
				
				<div class="mailbox-controls no-padding">
					<div class="btn-group">
						<a href="<?php echo Router::url(['action' => 'create']); ?>" class="btn btn-primary btn-sm">
							<i class="fa fa-plus-circle"></i>
							<?php echo __d('cms', 'Create'); ?>
						</a>
					</div>
				</div>
				
				<div class="row">
					
					<div class="col-sm-12">
						
						<?php if( !${{models}} ): ?>
						
						<div class="alert alert-info alert-dismissible">
							<h4>
								<i class="icon fa fa-ban"></i>
								<?php echo __d('cms', 'No {{ models }} found.'); ?>
							</h4>
						</div>
						
						<?php else: ?>
						
						<table class="table table-striped">
							<tr>
								{{#fields}}
								<th><?php echo __d('cms', '{{ label }}'); ?></th>
								{{/fields}}
								<th>&nbsp;</th>
							</tr>
							<?php foreach(${{models}} as ${{model}}): ?>
							<tr>
								{{#fields}}
								<td><?php echo h(${{model}}['{{Model}}']['{{name}}']); ?></td>
								{{/fields}}
								<td class="text-right">
									<a href="<?php echo Router::url(['action' => 'view', ${{model}}['{{Model}}']['id']]); ?>" class="btn btn-default btn-sm">
										<i class="fa fa-eye"></i>
									</a>
									<a href="<?php echo Router::url(['action' => 'edit', ${{model}}['{{Model}}']['id']]); ?>" class="btn btn-default btn-sm">
										<i class="fa fa-edit"></i>
									</a>
									<a href="<?php echo Router::url(['action' => 'delete', ${{model}}['{{Model}}']['id']]); ?>" class="btn btn-default btn-sm"
									   data-confirm="<?php echo __d('cms', 'Are you sure you want to delete this {{Model}}?'); ?>">
										<i class="fa fa-trash-o"></i>
									</a>
								</td>
							</tr>
							<?php endforeach; ?>
						</table>
						
						<?php if( $this->Paginator->numbers() ): ?>
						<div class="pagination pagination-right">
							<ul class="pagination">
								<?php
									echo $this->Paginator->prev( '<<', array( 'class' => '', 'tag' => 'li' ), null, array( 'class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a' ) );
									echo $this->Paginator->numbers( array( 'tag' => 'li', 'separator' => '', 'currentClass' => 'active', 'currentTag' => 'a' ) );
									echo $this->Paginator->next( '>>', array( 'class' => '', 'tag' => 'li' ), null, array( 'class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a' ) );
								?>
							</ul>
						</div>
						<?php endif; ?>
						
						<?php endif; ?>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</section>
	
</div>
