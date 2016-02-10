<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php echo $CMS; ?> | <?php echo $title_for_layout; ?></title>
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<link rel="icon" href="/cms/favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" href="/cms/vendor/admin-lte/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/cms/vendor/fontawesome/css/font-awesome.min.css" />
		<link rel="stylesheet" href="/cms/vendor/ionicons/css/ionicons.min.css" />
		<link rel="stylesheet" href="/cms/vendor/admin-lte/dist/css/AdminLTE.min.css" />
		<link rel="stylesheet" href="/cms/vendor/admin-lte/plugins/iCheck/square/blue.css" />
		<link rel="stylesheet" href="/cms/css/pages.css" />
		<link rel="stylesheet" href="/cms/css/styles.css" />
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="/cms/vendor/html5shiv/dist/html5shiv.min.js"></script>
		<script src="/cms/vendor/respond-minmax/dest/respond.min.js"></script>
		<![endif]-->
		<?php echo $this->fetch('css'); ?>
	</head>
	<body class="hold-transition auth-page <?php echo $this->fetch('csspage'); ?>">
		
		<div class="auth-box">
			
			<div class="auth-logo text-center">
				<img class="logo" src="/cms/logo128.png" alt="<?php echo $CMS; ?>" /><br>
			</div>
			
			<?php print $this->Session->flash('flash'); ?>
			
			<?php echo $this->fetch('content'); ?>
		</div>
		
		<script src="/cms/vendor/jquery/dist/jquery.min.js"></script>
		<script src="/cms/vendor/admin-lte/bootstrap/js/bootstrap.min.js"></script>
		<script src="/cms/vendor/admin-lte/plugins/iCheck/icheck.min.js"></script>
		<script>
			$(function () {
				$('input').iCheck({
					checkboxClass: 'icheckbox_square-blue',
					radioClass: 'iradio_square-blue',
					increaseArea: '20%' // optional
				});
			});
		</script>
	</body>
</html>