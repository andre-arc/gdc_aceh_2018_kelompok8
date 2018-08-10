
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/bootstrap-table.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/bootstrap-table.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			
		});
	</script>
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