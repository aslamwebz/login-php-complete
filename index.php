<?php 

require('header.php');

session_start();
$errorMsg = '';

 ?>


	<div id="login">
		<div class="container">
			<div class="row">
				<div class="col-md-12" id="login-head">
					<div class="col-md-4 float-right" id="login-text">
						<h1 class="display-4">Welcome Back</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, consectetur.</p>
					</div>
					<div id="login-body">
						<div class="col-md-6">
							<div class="container" id="login-main">
								<h1>Login</h1>
								<p>Don't have an account? <a href="register.php">Create your account</a></p>
								<br>
								<?php 
									if(isset($_SESSION['error'])){?>
										<div id="error">
											<ul class="list-group">
												<li class="list-group-item alert alert-danger"><?= $_SESSION['error']; ?></li>
											</ul>
										</div>
									<?php 
								}
								if(isset($_SESSION['success'])){?>
										<div id="error">
											<ul class="list-group">
												<li class="list-group-item alert alert-success"><?= $_SESSION['success']; ?></li>
											</ul>
										</div>
									<?php 
								}
								session_destroy();
								 ?>
								<form action="logincontroller.php" method="post">
									<div class="form-group">
										<input type="text" placeholder="Username" class="form-control" name="username">
									<br>

										<input type="password" placeholder="Password" class="form-control" name="password">
									</div>
									<div class="container">
										<input type="checkbox" checked> Remember Me
										<a href="" class="float-right">Forgot password?</a>
									</div>
									<br>
									<br>
									<input type="submit" class="button button-royal float-right button-pill" name="submit" value="submit">
								</form>
							</div>							
						</div>
						
						<div class="col-md-10 offset-md-1" id="social-button">
							<div class="container" style="margin-top: 120px">
								<p>Or login with
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