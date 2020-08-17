<!DOCTYPE html>
<html>
<head>
	<title>JobLister</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<style>
	body{
		background-image: url('images/back-wall.png');
		background-repeat: no-repeat;
		background-size: 100% 50%;
	}
</style>


	<div class="header clearfix">
        <nav>
          <ul class="nav nav-pills float-right">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="create.php">Create Listing </a>
            </li>
          </ul>
        </nav>
        <h3 class="text-muted"><?php echo SITE_TITLE; ?></h3>
      </div>




<?php

displayMessage();

?>