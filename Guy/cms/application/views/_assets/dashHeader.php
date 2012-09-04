<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $pageTitle; ?> | <?php echo $contentMangement['cms_name']; ?></title>
	<link rel="stylesheet" href="http://current.bootstrapcdn.com/bootstrap-v204/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url();?>_assets/custom_style.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="<?php echo base_url();?>_assets/custom_js.js" type="text/javascript"></script>
	
	
<body>
<div class="wrapper">
<div class="container">
	<header>
		<div class="brand"><?php echo $contentMangement['cms_name']; ?> | <?php echo $pageTitle; ?></div>
		<div class="pull-right navbar">
		  <div class="navbar-inner">
			<ul class="nav">
			  <li><a href="<?php echo base_url();?>dashboard">Home</a></li>
			  <li><a href="<?php echo base_url();?>dashboard/users">Users</a></li>
			  <li><a href="<?php echo base_url();?>dashboard/aParty">A Party Management</a></li>
			  <li><a href="<?php echo base_url();?>dashboard/settings">Settings</a></li>
			 <li><a href="home/logout">Log Out</a></li>	
			</ul>
		</div>
		</div>
	</header>
