<?php 
include('header.php');

session_start();
 ?>

	<div id="login">
		<div class="container">
			<div class="row">
				<div class="col-md-12" id="login-head">
					<div class="col-md-4 float-right" id="login-text">
						<h1 class="display-4">Join Us</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, consectetur.</p>
					</div>
					<div id="login-body">
						<div class="col-md-6">
							<div class="container" id="login-main">
								<h1>Register</h1>
								<p>Join with us and enjoy unlimited access</p>
								<?php 
									if(isset($_SESSION['error'])){?>
										<div id="error">
											<ul class="list-group">
												<li class="list-group-item alert alert-danger"><?= $_SESSION['error']; ?></li>
											</ul>
										</div>
									<?php 
								}
								session_destroy();
								 ?>
								<form action="registercontroller.php" method="post">
									<div class="form-group">
										<input type="text" placeholder="Username" class="form-control" name="username" required>
										<input type="password" placeholder="Password" class="form-control" name="password" required>
										<input type="text" placeholder="Email" class="form-control" name="email" required>
									</div>

									<br>
									<br>
									<a href="index.php" class="button button-pill button-primary float-right" >Cancel</a>
									<input type="submit" class="button button-pill button-royal float-right" style="margin-right: 10px;" name="register">Register</a>
								</form>
							</div>							
						</div>
						
						<div class="col-md-10 offset-md-1" id="social-button">
							<div class="container" style="margin-top: 120px">
								<p>Or register with
								<a href="#" class="button button-rounded button-royal"  style="background: #395498" ><i class="fa fa-facebook"aria-hidden="true"></i></a> 
								<a href="#" class="button  button-rounded button-primary "><i class="fa fa-twitter" aria-hidden="true"></i></a></p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>


<?php 
include('footer.php');
 ?>