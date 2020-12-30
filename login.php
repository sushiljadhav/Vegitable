
<?php 
	include('header.php')
?>
<div class="login-clean" style="margin-top: 55px; padding: 110px 0 150px;background-color: rgb(193,218,239);">
		<form method="post  clear-all">
				<h2 class="text-dark fs-20 text-center mb-3">Login Form</h2>
				<div class="illustration"><i class="icon ion-ios-navigate"></i></div>
				<div class="form-group">
						<input class="form-control" type="email" name="email" placeholder="Email">
						<small class="error-text  mt-1">Please enter valid details</small>
				</div>
				<div class="form-group">
						<input class="form-control" type="password" name="password" placeholder="Password">
						<small class="error-text mt-1">Please enter valid details</small>
				</div>
				<div class="form-group mb-2">
						<a class="btn btn-primary btn-block" type="submit" href='index.php';">Log In</a>
				</div>
				<div class="d-flex justify-content-between">
						<p class="forgot">Don't have an account!<a href="register.php" style="font-size: 11px"> Sign Up</a></p>
						<a class="forgot a-color" href="#!" style="font-size: 11px">Forgot Password?</a>
				</div>   
		</form>
</div>

<?php 
    include('footer.php');
?>