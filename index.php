<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/favicon.ico">
		<title>TransKRJ-8</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link href="assets/css/carousel.css" />
	</head>
<body>
	<?php include_once('header.php');?>
	<?php include_once('carousel.php');?>
	
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<i class="fa fa-users"></i>&nbsp;Top 5 User
					</div>
					<ul class="list-group">
						<?php for($i=0;$i<=4;$i++):?>
						<li class="list-group-item">
							<i class="fa fa-user"></i>&nbsp;User <?php echo rand(1,10);?>
							<span class="badge pull-right">
								<i class="fa fa-star"></i>&nbsp;<?php echo rand(1,10);?>
							</span>
						</li>
						<?php endfor;?>
					</ul>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<i class="fa fa-map-marker"></i>&nbsp;Top 5 Halte
					</div>
					<ul class="list-group">
						<?php for($i=0;$i<=4;$i++):?>
						<li class="list-group-item">
							<i class="fa fa-map-marker"></i>&nbsp;&nbsp;Halte <?php echo rand(10,20);?>
							<span class="badge pull-right">
								<i class="fa fa-star"></i>&nbsp;<?php echo rand(1,10);?>
							</span>
						</li>
						<?php endfor;?>
					</ul>
					
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<i class="fa fa-database"></i>&nbsp;Data
					</div>
					<ul class="list-group">
						<li class="list-group-item">
							<i class="fa fa-calendar"></i>&nbsp;&nbsp;Start Date on System
							<span class="badge pull-right">
								<?php echo date('Y-m-d');?>
							</span>
						</li>
						<li class="list-group-item">
							<i class="fa fa-calendar"></i>&nbsp;&nbsp;Latest Date on System
							<span class="badge pull-right">
								<?php echo date('Y-m-d');?>
							</span>
						</li>
						<li class="list-group-item">
							<i class="fa fa-users"></i>&nbsp;&nbsp;Total All User
							<span class="badge pull-right">
								<?php echo rand(20,40);?>
							</span>
						</li>
						<li class="list-group-item">
							<i class="fa fa-calendar"></i>&nbsp;&nbsp;Total All Tagging
							<span class="badge pull-right">
								<?php echo rand(20,40);?>
							</span>
						</li>
						<li class="list-group-item">
							<i class="fa fa-calendar"></i>&nbsp;&nbsp;Contact Us
							<a class="pull-right" href="mailto:lorem@dipsum.com">Team-8</a>
						</li>
						
					</ul>
				</div>				
			</div>
		</div>
		<hr/>
		<footer class="container">
      <p class="pull-right">&copy; 2017-2018 GAE Chapter Banda Aceh. &middot; Kelompok-8</p>
    </footer>
	</div>	
		
</body>
</html>