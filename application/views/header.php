<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/favicon.png">
		<title>TransKRJ-8</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.1.1.min.js">
	
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		
		<link rel="stylesheet" href="assets/css/carousel.css" />
		<link rel="stylesheet" href="assets/css/jumbotron.css" />
	</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><i class="fa fa-bus"></i>&nbsp;TransKoetaradja<strong>Lover</strong></a>
        </div>
        <div id="navbar" class="navbar-collapse navbar-right collapse">
          <ul class="nav navbar-nav">
              <?php //if($template == 'dashboard') {?>
              <?php if(isset($template) && ($template == 'dashboard')) {
                  ?>
                   <li><a href="<?= site_url('/dashboard')?>"><i class="fa fa-bus"></i>&nbsp;Dasboard</a></li>
                    <li><a href="<?= site_url('/klasemen')?>"><i class="fa fa-certificate"></i>&nbsp;Klasemen</a></li>
                    <li><a href="<?= site_url('/halte')?>"><i class="fa fa-tags"></i>&nbsp;Halte</a></li>						
                    <li><a href="<?= site_url('/login/logout')?>"><i class="fa fa-cogs"></i>&nbsp;Logout</a></li>
                  <?php
              }
                else{
                  ?>
                  <li><a href="<?= site_url('/')?>"><i class="fa fa-bus"></i>&nbsp;Home</a></li>
                  <li><a href="<?= site_url('/home/klasemen')?>"><i class="fa fa-certificate"></i>&nbsp;Klasemen</a></li>
                  <li><a href="<?= site_url('/home/halte')?>"><i class="fa fa-tags"></i>&nbsp;Halte</a></li>						
                  <li><a href="<?= site_url('/login')?>"><i class="fa fa-cogs"></i>&nbsp;Login/Register</a></li>	
                  <?php
                }
                ?>	
                					
					</ul>
        </div>
      </div>
    </nav>