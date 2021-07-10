

	<?php $title="Register"; include 'header.php';?>
	  	

	 <!-- login-section -->
	  	<section class="login-section">
		    <div class="container">
		        <div class="row justify-content-center align-items-center">
		            <div class="col-md-12 col-lg-10">
		                <div class="wrap d-flex">
		                	<div class="col-md-6 text-wrap left-box p-4 p-lg-5 text-center d-flex align-items-center">
		                        <div class="text w-100">
									<a href="login.php" class="cargo-logo">
										<img src="images/smart-cargo1.svg" alt="smart-cargo" title="Smart cargo"> 
									</a>
		                            <h2>Welcome to Sign Up</h2>
		                            <!-- <p class="my-1">Don't have an account?</p> -->
		                            <a href="#" class="btn btn-white btn-outline-white">Sign In</a>
		                        </div>
		                    </div>
		                	<div class="col-md-6 login-wrap p-4 p-lg-5">
		                        <div class="d-flex">
		                            <div class="w-100">
		                                <h3 class="mb-4">Sign Up</h3>
		                            </div>
		                        </div>
		                        <form action="#" class="signin-form">
		                            <div class="form-group mb-3">
		                                <label class="label" for="name">Full name</label>
		                                <input type="text" class="form-control" placeholder="full name" required>
		                            </div>
		                             <div class="form-group mb-3">
		                                <label class="label" for="name">E-mail Id</label>
		                                <input type="text" class="form-control" placeholder="E-mail Id" required>
		                            </div>
		                             <div class="form-group mb-3">
		                                <label class="label" for="name">Mobile No</label>
		                                <input type="text" class="form-control" placeholder="Mobile No" required>
		                            </div>
		                            <div class="form-group mb-3">
		                                <label class="label" for="name">Company Name</label>
		                                <input type="text" class="form-control" placeholder="Company Name" required>
		                            </div>
		                            <div class="form-group mb-3">
		                                <label class="label" for="password">Password</label>
		                                <input type="password" class="form-control" placeholder="Password" required>
		                            </div>
		                            <div class="form-group mb-3">
		                                <label class="label" for="password">Confirm Password</label>
		                                <input type="password" class="form-control" placeholder="Confirm Password" required>
		                            </div>
		                            <div class="form-group">
		                                <button type="submit" class="form-control btn submit px-3">Sign Up	</button>
		                            </div>
		                            <div class="form-group d-md-flex justify-content-between form-box">
		                                <div class="custom-control custom-checkbox ">
									      <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
									      <label class="custom-control-label" for="customCheck">Remember Me</label>
									    </div>
		                                <div class="w-50 text-md-right pwd-color">
		                                    <a href="#">Forgot Password</a>
		                                </div>
		                            </div>
		                        </form>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</section>

	<?php include 'footer.php';?>


