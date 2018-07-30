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
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<i class="fa fa-tags"></i>&nbsp;Daftar Halte
					</div>
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Halte</th>
									<th>Like</th>
								</tr>
							</thead>
							<tbody>
							<?php
							$no = 1;
							for($i=1;$i<=5;$i++) { ?>
								<tr>
									<td class="col-md-1"><?= $i ?></td>
									<td>Halte<?= " ".$i?></td>
									<td>
										<span class="badge text-center">
											<i class="fa fa-star"></i>&nbsp;<?= rand(1,10);?>
										</span>
									</td>
								</tr>
							<?php }?>
							</tbody>
						</table>
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