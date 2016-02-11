<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php echo $title_for_layout; ?></title>
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
		<link rel="icon" href="/cms/favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" href="/cms/vendor/admin-lte/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/cms/vendor/fontawesome/css/font-awesome.min.css" />
		<link rel="stylesheet" href="/cms/vendor/ionicons/css/ionicons.min.css" />
		<link rel="stylesheet" href="/cms/vendor/admin-lte/dist/css/AdminLTE.min.css" />
		<link rel="stylesheet" href="/cms/vendor/admin-lte/dist/css/skins/_all-skins.min.css" />
		<link rel="stylesheet" href="/cms/vendor/admin-lte/plugins/iCheck/square/blue.css" />
		<link rel="stylesheet" href="/cms/vendor/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
		<link rel="stylesheet" href="/cms/css/pages.css" />
		<link rel="stylesheet" href="/cms/css/styles.css" />
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="/cms/plugins/html5shiv/dist/html5shiv.min.js"></script>
		<script src="/cms/plugins/respond-minmax/dest/respond.min.js"></script>
		<![endif]-->
		<?php echo $this->fetch('css'); ?>
	</head>
	<body class="hold-transition skin-black sidebar-mini <?php echo $this->fetch('csspage'); ?>">
		
		<div class="wrapper">
		
			<?php echo $this->element('header'); ?>
			
			<?php echo $this->element('sidebar'); ?>
		
			<?php echo $this->Session->flash(); ?>
			
			<?php echo $this->fetch('content'); ?>
			
			<?php echo $this->element('footer'); ?>
			
			<?php echo $this->element('controls'); ?>
			
		</div>
		
		<script src="/cms/vendor/jquery/dist/jquery.min.js"></script>
		<script src="/cms/vendor/admin-lte/bootstrap/js/bootstrap.min.js"></script>
		<script src="/cms/vendor/admin-lte/plugins/iCheck/icheck.min.js"></script>
		<script src="/cms/vendor/moment/min/moment.min.js"></script>
		<script src="/cms/vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
		<?php echo $this->fetch('scripts'); ?>
		<script src="/cms/vendor/admin-lte/dist/js/app.min.js"></script>
		<script src="/cms/vendor/admin-lte/dist/js/demo.js"></script>
		<script src="/cms/js/admin.js"></script>
		<script src="/cms/js/forms.js"></script>
		<script>
			$( document ).ready(function() {
				admin.initialize();
				forms.initialize();
			});
		</script>
	</body>
</html>
