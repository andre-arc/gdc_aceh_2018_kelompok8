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
			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<i class="fa fa-pencil-square-o"></i>&nbsp;Register
					</div>
					<form action="index.php">
					<div class="panel-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="exampleInputEmail1">Email Address</label>
									<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
								</div>
								<div class="form-group">
									<label for="Phone">Phone Number</label>
									<input type="phone" class="form-control" id="exampleInputEmail1" placeholder="+62">
								</div>	
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="exampleInputEmail1">Password</label>
									<input type="password" class="form-control" id="password1" placeholder="Password">
								</div>
								<div class="form-group">
									<label for="Phone">Confirm Password</label>
									<input type="password" class="form-control" id="password2" placeholder="Confirm Password" />
								</div>									
							</div>
						</div>
					</div>
					<div class="panel-footer clearfix" style="background-color:#000;">
						<button class="btn btn-info pull-right" type="submit" name="reg" >
						<i class="fa fa-pencil-square-o"></i>&nbsp;Register
						</button>
					</div>
					</form>
				</div>
			</div>
			
			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<i class="fa fa-cogs"></i>&nbsp;Login
					</div>
					<form action="index.php">
						<div class="panel-body">
							<div class="form-group">
								<label for="exampleInputEmail1">Email Address</label>
								<input type="email" class="form-control" id="email" placeholder="Email">
							</div>
							<div class="form-group">
								<label for="Phone">Password</label>
								<input type="password" class="form-control" id="password">
							</div>	
						</div>
					<div class="panel-footer clearfix" style="background-color:#000;">
						<button class="btn btn-info pull-right" type="submit" name="reg" >
						<i class="fa fa-cogs"></i>&nbsp;Login
						</button>
					</div>
					</form>
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