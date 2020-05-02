<!DOCTYPE html>
<html>
<head>
	<title>Website dengan Codeigniter</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("/bootstrap/css/bootstrap.min.css");?>">
	<script type="text/javascript" href="<?php echo base_url("bootstrap/js/jquery.min.js");?>"></script>
	<script type="text/javascript" href="<?php echo base_url("bootstrap/js/bootstrap.min.js");?>"></script>
</head>
<body>
	<nav class="navbar navbar-fixed-top navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Pencari Kerja</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo site_url(); ?>">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="<?php echo site_url("pendaftarkerja"); ?>">Pendaftar kerja</a></li>
        <li><a href="<?php echo site_url("daftar"); ?>">Daftar kerja</a></li>
        <li><a href="<?php echo site_url("tentang"); ?>">Tentang</a></li>
        <li><a href="<?php echo site_url("contact"); ?>">Kontak</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<br><br>