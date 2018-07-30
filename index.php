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
						<i class="fa fa-tags"></i>&nbsp;Top 5 Halte
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
							<i class="fa fa-database"></i>&nbsp;&nbsp;Total All Tagging
							<span class="badge pull-right">
								<?php echo rand(20,40);?>
							</span>
						</li>
						<li class="list-group-item">
							<i class="fa fa-envelope"></i>&nbsp;&nbsp;Contact Us
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