<?php include('header.php')?>
	<section class="checkout">
		<div class="container pt-4">
			<div class="row">
				<div class="col-xl-8 col-lg-8  col-md-6 col-sm-8">
					<div class="card mb-4">
						<div class="card-header">
					
							<h5 class="font-weight-bold">
							<i class="fa fa-map-marker mr-1 " aria-hidden="true"></i>		
								Delivery Address
							</h5>
						</div>
						<div class="card-body">
						<form>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="inputEmail4">Email</label>
									<input type="email" class="form-control form-control-sm" id="inputEmail4" placeholder="Email">
								</div>
								<div class="form-group col-md-6">
									<label for="inputPassword4">Password</label>
									<input type="password" class="form-control form-control-sm" id="inputPassword4" placeholder="Password">
								</div>
							</div>
							<div class="form-group">
								<label for="inputAddress">Address</label>
								<input type="text" class="form-control form-control-sm" id="inputAddress" placeholder="1234 Main St">
							</div>
							<div class="form-group">
								<label for="inputAddress2">Address 2</label>
								<input type="text" class="form-control form-control-sm" id="inputAddress2" placeholder="Apartment, studio, or floor">
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="inputCity">City</label>
									<input type="text" class="form-control form-control-sm" id="inputCity">
								</div>
								<div class="form-group col-md-4">
									<label for="inputState">State</label>
									<select id="inputState" class="form-control">
										<option selected>Choose...</option>
										<option>...</option>
									</select>
								</div>
								<div class="form-group col-md-2">
									<label for="inputZip">Zip</label>
									<input type="text" class="form-control" id="inputZip">
								</div>
							</div>
							<div class="form-group">
								<div class="form-check">
									<input class="form-check-input " type="checkbox" id="gridCheck">
									<label class="form-check-label" for="gridCheck">
										Check me out
									</label>
								</div>
							</div>
							<button type="submit" class="btn btn-primary">Sign in</button>
						</form>
						</div>
					</div>

				<div class="card mb-4">
					<div class="card-body">
						<h5 class="card-title"><i class="fa fa-gift mr-4" aria-hidden="true"></i>Is this the gift order</h5>
					</div>
				</div>
				<div class="card mb-4">
					<div class="card-body">
						<h5 class="card-title"><i class="fa fa-calendar mr-4" aria-hidden="true"></i>Delivery option</h5>
					</div>
				</div>
				<div class="card mb-4">
					<div class="card-body">
						<h5 class="card-title"><i class="fa fa-credit-card mr-4" aria-hidden="true"></i>Payment option</h5>
					</div>
				</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
			
				<div class="card mb-4">
				<div class="card-header">
				<h6 class="font-weight-bold card-title">Order summary</h6>
				</div>

					<div class="card-body">
					<div class="row mb-2">
					<div class="col">
						<h6>Total</h6>
					</div>
					<div class="col justify-content-end">
						Rs.57.00 
					</div>	
				</div>
					</div>
				</div>
				
				
				
				</div>


			</div>
		
		</div>
	
	</section>


<?php include('footer.php') ?>