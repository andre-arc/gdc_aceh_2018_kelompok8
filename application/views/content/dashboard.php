<div class="container">
		<div class="row">
			
			<div class="col-md-9 col-md-offset-2">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<i class="fa fa-map-marker"></i>&nbsp;Tag Lokasi halte
					</div>
					<form action="<?= site_url('login/proses') ?>" method="post">
						<div class="panel-body">
							<div class="form-group">
								<label >Lokasi Anda</label>
								<input name="user_email" type="email" class="form-control" id="email" placeholder="Email">
							</div>
							<div class="form-group">
								<label for="Phone">Upload Gambar</label>
								<input name="gambar" type="file" id="gambar">
							</div>
							<div class="form-group">
								<label for="Phone">Tulis Kesan Anda</label>
								<textarea class="form-control" name="kesan" id="" rows="10" cols="30">Tulis Kesan Anda Mengenai Halte ini...
								</textarea>
							</div>		
						</div>
					<div class="panel-footer clearfix" style="background-color:#000;">
						<button class="btn btn-info pull-right" type="submit" name="reg" >
						<i class="fa fa-cogs"></i>&nbsp; Submit
						</button>
					</div>
					</form>
				</div>
			</div>
		</div>
		<hr/>