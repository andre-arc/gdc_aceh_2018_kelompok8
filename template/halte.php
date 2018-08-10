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