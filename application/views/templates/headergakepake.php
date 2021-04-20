<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title><?= $title ?></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
    <link href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>"/>
	<script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js'); ?>"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link type="text/css" rel="stylesheet" href="<?= base_url('assets/css/style.css?d='); echo time(); ?>" />
    
</head>

<body>
	<nav class="navbar navbar-expand fixed-top mb">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="<?php echo base_url(); ?>">HealtHub</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="dropdown">
					<a id="dropdownMenuButton" href="#">Disease Wiki
						<ul class="dropdown-menu">
							<li><a href="#">Virus</a></li>
							<li><a href="#">Bakteri</a></li>
						</ul>
					</li>
					<li><a href="<?php echo base_url('Hospital') ?>">Hospitals</a></li>
					<li><a href="<?php echo base_url('about/index') ?>">About Us</a></li>
				</ul>
				<ul class="nav navbar-nav ml-auto">
					<li><a id="contact" href="<?php echo base_url('contact/index') ?>"><button class="get-happier" id="bcontact" type="button">Contact Us</button></a></li>
					<li><a onclick="openNav()" style="padding-bottom:16px;"><span data-feather="menu"></span></a>
						<!-- <div class="dropdown-menu dropdown-menu-right">
							<a class="dropdown-item" ><img src="assets/images/avatar.png"> Nama User tolong sambungin</a>
							<div class="dropdown-divider"></div>
							<button class="dropdown-item" type="button" style="border-radius:0;" data-toggle="modal" data-target="#editprofil"><span data-feather="settings"></span> Edit Profil</button>
							<button class="dropdown-item" type="button" style="border-radius:0;"><span data-feather="log-out"></span><a href="<?php echo base_url('Main'); ?>" style="color:black;"> Logout</a></button>
						</div> -->
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>

<!-- script sidebar -->

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("box1").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("box1").style.marginLeft= "0";
}
</script>
