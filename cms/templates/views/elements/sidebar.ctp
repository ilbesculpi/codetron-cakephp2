<?php

// fallback for errors
	if( !isset($section) ) {
		$section = '';
	}
?>

<aside class="main-sidebar">

    <section class="sidebar">

		<div class="user-panel">
			<div class="pull-left image">
				<img src="<?php echo $admin['picture']; ?>" class="img-circle" alt="<?php echo $admin['name']; ?> Picture">
			</div>
			<div class="pull-left info">
				<p><?php echo $admin['name']; ?></p>
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>
		
		<form action="#" method="get" class="sidebar-form">
			<div class="input-group">
				<input type="text" name="q" class="form-control" placeholder="Search...">
				<span class="input-group-btn">
					<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
					</button>
				</span>
			</div>
		</form>
		
		<ul class="sidebar-menu">
			<li class="header">MAIN NAVIGATION</li>
			<li>
				<a href="<?php echo Router::url(['controller' => 'dashboard', 'action' => 'home']); ?>">
					<i class="fa fa-dashboard"></i>
					<span>Dashboard</span>
				</a>
			</li>
			{{#models}}
			<li>
				<a href="<?php echo Router::url(['controller' => '{{ controller }}', 'action' => 'index']); ?>">
					<i class="fa fa-cog"></i>
					<span>{{ title }}</span>
				</a>
			</li>
			{{/models}}
			<li>
				<a href="<?php echo Router::url(['controller' => 'auth', 'action' => 'logout']); ?>">
					<i class="fa fa-power-off"></i>
					<span><?php echo __d('cms', 'Logout'); ?></span>
				</a>
			</li>
		</ul>
    </section>
    
</aside>