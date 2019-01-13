<!doctype html>
<html lang="en" ng-app="album" ng-init='albums=[{"id":"2","album_name":"Beatiful","album_artist":"DJ Sbu","album_cover":"154085947901-Beautiful-feat-Portia-Monique-mp3-image.jpg","released_year":"2018-10-01","date_created":"2018-10-30 02:31:19","isActive":"1"},{"id":"3","album_name":"Oh well","album_artist":"DJ Slique","album_cover":"1540859634Bis.jpg","released_year":"2018-08-08","date_created":"2018-10-30 02:33:54","isActive":"1"},{"id":"4","album_name":"Vatel","album_artist":"Moozlie","album_cover":"1540859771Moozlie-FT_-Kid-X.png","released_year":"2018-09-12","date_created":"2018-10-30 02:36:11","isActive":"1"},{"id":"5","album_name":"Nalingi","album_artist":"Manu WorldStar","album_cover":"154085997301-NaLingi-mp3-image.jpg","released_year":"2018-08-09","date_created":"2018-10-30 02:39:33","isActive":"1"},{"id":"6","album_name":"Nginothando","album_artist":"karabo","album_cover":"1540924197nginothando.jpg","released_year":"2018-08-15","date_created":"2018-10-30 20:29:57","isActive":"1"}]'>
<head>
	<meta charset="utf-8" />

	


	<link rel="icon" type="image/png" href="<?php echo base_url()?>assets/img/icon.ico">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title><?php echo $header?> </title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
	
	<!--<script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js" type="text/javascript"></script>-->
	
  <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" />

    <script src="<?php echo base_url(); ?>assets/js/angular.js" type="text/javascript"></script>
<!--	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/js/popper.min.js" type="text/javascript"></script>-->
<style>
	body{
		background: url('<?php echo base_url('assets/img/background.jpg'); ?>');
		
	}
	</style>


	</head>
<body>
	<?php
	$list='';
	$add='';
	if($active=='list')
	$list='active';
	
	if($active=='Add')
	$add='active';
	?>
	
	
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Vectra</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item <?php echo $list ?>">
            <a class="nav-link" href="<?php echo base_url(); ?>">List Of Albums <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item <?php echo $add ?>">
            <a class="nav-link" href="<?php echo base_url('albums/AddAlbum'); ?>">Add Album</a>
          </li>
        

        </ul>

      </div>
    </nav>


            <div class="container-fluid">