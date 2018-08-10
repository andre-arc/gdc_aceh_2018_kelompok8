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
					<form action="<?= site_url('login/proses') ?>" method="post">
						<div class="panel-body">
							<div class="form-group">
								<label for="exampleInputEmail1">Email Address</label>
								<input name="user_email" type="email" class="form-control" id="email" placeholder="Email">
							</div>
							<div class="form-group">
								<label for="Phone">Password</label>
								<input name="user_password" type="password" class="form-control" id="password">
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