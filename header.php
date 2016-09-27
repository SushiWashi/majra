<!DOCTYPE html>
<?php include 'function.php'; ?>
<html>
<head>
	<!--Favicons-->
	<link rel="icon" href="<?php echo folder();?>img/favicon/favicon.svg">
	<link rel="icon" href="<?php echo folder();?>img/favicon/favicon.png" sizes="32x32">
	<link rel="icon" href="<?php echo folder();?>img/favicon/favicon-57.png" sizes="57x57">
	<link rel="icon" href="<?php echo folder();?>img/favicon/favicon-76.png" sizes="76x76">
	<link rel="icon" href="<?php echo folder();?>img/favicon/favicon-96.png" sizes="96x96">
	<link rel="icon" href="<?php echo folder();?>img/favicon/favicon-120.png" sizes="120x120">


	<!--META-->
	 <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	 <title>Majra</title>
	 	 
	 <!--LINKS-->
	<link rel="stylesheet" type="text/css" href="<?php echo folder()?>css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo folder()?>css/reset.css">
	<link rel="stylesheet" type="text/css" href="<?php echo folder()?>css/grid.css">
</head>
<body>
<div id="wrapper">
<div id="content">
<!--wrapper & content is used to fix footer to bottom of page -->

	<div class="nav">
		<div class="grid-container">
			<a href="/majra"><img class="logo" src="<?php echo folder()?>img/majra-orange.svg"></a>
				

			<ul class="user">
			<?php $logged_in = true;
			
			if(!$logged_in){?>
				<li><a href="">Join / Log In</a></li>
				<li><a href="">def</a></li>
			</ul>
			<?php }else{ ?>
				<li><a href="">Notifications</a></li>
				<li><a href="">Nazar</a></li>
			<?php } ?>
			</ul>

			
			<ul>
				<li><a href="workplaces.php">explore places</a></li>
				<li><a href="opportunities.php">find opportunities</a></li>
				<li><a href="resources.php">learning resources</a></li>
				<li><a href="#">for employers</a></li>
			</ul>
			
			
		</div>
	</div>
