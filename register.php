<?php include('header.php')?>
 
<div class="register-photo" style="margin-top: 55px; padding: 100px 0; background-color: rgb(193,218,239);">
	<div class="form-container" style="max-width: 400px;">
		<form method="post">
			<h2 class="text-dark fs-20 text-center mb-3"><strong>Create</strong> an account.</h2>
			<div class="form-group">
					<input class="form-control" type="email" name="email" placeholder="Email">
					<small class="error-text mt-1">Please enter valid details</small>
			</div>
			<div class="form-group">
					<input class="form-control" type="password" name="password" placeholder="Password">
					<small class="error-text mt-1">Please enter valid details</small>
			</div>
			<div class="form-group">
					<input class="form-control" type="password" name="password-repeat" placeholder="Confirm Password">
					<small class="error-text mt-1">Please enter valid details</small>
			</div>
			<div class="form-group">
					<div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox">I agree to the license terms.</label></div>
			</div>
			<div class="form-group mb-2">
					<a href="login.php" class="btn btn-primary btn-block" type="submit">Sign Up</a>
			</div>
			<p class="already">You already have an account?<a  href="login.php" style="font-size: 11px"> Login Here.</a><p>
		</form>
	</div>
</div>


<?php 
    include('footer.php');
?>