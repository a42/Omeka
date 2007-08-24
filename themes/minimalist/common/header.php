<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php settings('site_title'); ?></title>

<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta type="description" content="<?php echo settings('description'); ?>" />

<!-- Stylesheets -->
<link rel="stylesheet" media="screen" href="<?php css('screen'); ?>" />
<link rel="stylesheet" media="print" href="<?php css('print'); ?>" />
<link rel="stylesheet" media="screen" href="<?php layout_css(); ?>" />
<!-- JavaScripts -->
<?php js('prototype'); ?>

<!-- Plugin Stuff -->
<?php plugin_header(); ?>

</head>
<body>
	<div id="wrap">

		<div id="header">
		<div id="searchwrap">
			<form id="searchform" action="search.php" class="clear">
				<input type="text" name="search" id="search" />
				<input type="submit" name="submit" value="Search" />
			</form>
		</div><!--end searchwrap-->

			<h1><a href="<?php echo uri(''); ?>"><?php settings('site_title'); ?></a></h1>
			<h5><?php settings('description'); ?></h5>
			
			<div id="primary-nav" >
			<ul class="navigation">
			<?php
				nav(array('Items' => uri('items/browse'), 'Exhibits' => uri('exhibits'), 'Collections' => uri('collections'),'About'=>uri('about')));
			?>
			</ul>
			</div>
		</div>
		<div id="content">
