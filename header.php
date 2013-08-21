<!DOCTYPE HTML>
<html lang="zh-en">
<head>
	<meta charset="utf-8">
	<title><?php wp_title('|', 1, 'right'); ?><?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

	<!-- [if Ite IE 6]>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap-ie6.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/ie.css">
	<! [endif] -->

	<?php wp_head(); ?>
</head>
<body>
	<div class="navbar">
		<div class="navbar-inner">
			<a class="brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
			<?php wp_nav_menu(); ?>
		</div>
	</div>
	<div class="container">