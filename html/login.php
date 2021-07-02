	<?php $title="Log in"; include 'header.php';?>

	 <!-- login-section -->
	  	<section class="login-section">
		    <div class="container">
		        <div class="row justify-content-center align-items-center">
		            <div class="col-md-12 col-lg-10">
		                <div class="wrap d-flex">
		                	<div class="col-md-6 text-wrap left-box p-4 p-lg-5 text-center d-flex align-items-center">
		                        <div class="text w-100">
		                            <h2>Welcome to login</h2>
		                            <p class="my-1">Don't have an account?</p>
		                            <a href="#" class="btn btn-white btn-outline-white">Sign Up</a>
		                        </div>
		                    </div>
		                	<div class="col-md-6 login-wrap p-4 p-lg-5">
		                        <div class="d-flex">
		                            <div class="w-100">
		                                <h3 class="mb-4">Sign In</h3>
		                            </div>
		                            <!-- <div class="w-100">
		                                <p class="social-media d-flex justify-content-end">
		                                    <a href="#"
		                                        class="social-icon d-flex align-items-center justify-content-center"><span
		                                            class="fa fa-facebook"></span></a>
		                                    <a href="#"
		                                        class="social-icon d-flex align-items-center justify-content-center"><span
		                                            class="fa fa-twitter"></span></a>
		                                </p>
		                            </div> -->
		                        </div>
		                        <form action="#" class="signin-form">
		                            <div class="form-group mb-3">
		                                <label class="label" for="name">Username</label>
		                                <input type="text" class="form-control" placeholder="Username" required>
		                            </div>
		                            <div class="form-group mb-3">
		                                <label class="label" for="password">Password</label>
		                                <input type="password" class="form-control" placeholder="Password" required>
		                            </div>
		                            <div class="form-group">
		                                <button type="submit" class="form-control btn submit px-3">Sign In</button>
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

	<!-- truck-model -->

	<div class="modal fade model-box" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLongTitle">Need a Truck</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form class="model-form">
	        	<p> <span>*</span> All mandatory fields should fillup first</p>

	        	<div class="form-details d-flex flex-wrap w-100">
	        		<div class="form-title">
	        			<h3> Enter Load Details</h3>
	        			<i class="icon-radio-checked icon-btn"></i>
	        		</div>
	        		<div class="col-xl-6">
	        			<ul class="form-list">
		        			<li>
		        				<div class="col-group select-box">
		        					<label class="label-text">Material Type <span>*</span> </label>
		        					<!-- <input type="text" placeholder="please Select" class="form-input"> -->
		        					<select class="form-input">
									  <option >Select Material</option>
									  <option value="saab">Saab</option>
									  <option value="mercedes">Mercedes</option>
									  <option value="audi">Audi</option>
									</select>
		        				</div>
		        			</li>
		        			<li>
		        				<div class="col-group select-box">
		        					<label class="label-text">Type of Truck <span>*</span> </label>
		        					<!-- <input type="text" placeholder="please Select" class="form-input"> -->
		        					<select class="form-input">
									  <option >Select Truck</option>
									  <option value="saab">Saab</option>
									  <option value="mercedes">Mercedes</option>
									  <option value="audi">Audi</option>
									</select>
		        				</div>
		        			</li>
		        			<li>
		        				<div class="col-group">
		        					<label class="label-text">Load Value (INR) <span>*</span> </label>
		        					<input type="text" placeholder="0.00" class="form-input">
		        				</div>
		        			</li>
		        			<li>
		        				<div class="col-group">
		        					<label class="label-text">Pickup Location <span>*</span> </label>
		        					<input type="text" placeholder="enter city name" class="form-input">
		        				</div>
		        			</li>
	        			</ul>
	        		</div>
	        		<div class="col-xl-6">
	        			<ul class="form-list">
		        			<li>
		        				<div class="col-group">
		        					<label class="label-text">Weight (Ton)  <span>*</span> </label>
		        					<input type="text" placeholder="0.00" class="form-input">
		        				</div>
		        			</li>
		        			<li>
		        				<div class="col-group select-box">
		        					<label class="label-text">Trucks Required  <span>*</span> </label>
		        					<!-- <input type="text" placeholder="please Select" class="form-input"> -->
		        					<select class="form-input">
									  <option>1</option>
									  <option value="2">2</option>
									  <option value="3">3</option>
									  <option value="4">4</option>
									</select>
		        				</div>
		        			</li>
		        			<li>
		        				<div class="col-group">
		        					<label class="label-text">Loading Date <span>*</span> </label>
		        					<input type="text" placeholder="select date" class="form-input sandbox-container">
		        				</div>
		        			</li>
		        			<li>
		        				<div class="col-group">
		        					<label class="label-text">Drop Location <span>*</span> </label>
		        					<input type="text" placeholder="enter city name" class="form-input">
		        				</div>
		        			</li>
	        			</ul>
	        		</div>
	        	</div>
	        </form>
	      </div>
	      <div class="modal-footer">
	      	<button type="button" class="btn btn-primary">submit</button>
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- load-model -->
	<div class="modal fade model-box" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLongTitle">Need a load</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<form class="model-form">
	        	<p> <span>*</span> All mandatory fields should fillup first</p>

	        	<div class="form-details d-flex flex-wrap w-100">
	        		<div class="form-title">
	        			<h3> Enter Load Details</h3>
	        			<i class="icon-radio-checked icon-btn"></i>
	        		</div>
	        		<div class="col-xl-6">
	        			<ul class="form-list">
		        			<li>
		        				<div class="col-group select-box">
		        					<label class="label-text">Type of Truck <span>*</span> </label>
		        					<!-- <input type="text" placeholder="please Select" class="form-input"> -->
		        					<select class="form-input">
									  <option >Select Truck</option>
									  <option value="saab">Saab</option>
									  <option value="mercedes">Mercedes</option>
									  <option value="audi">Audi</option>
									</select>
		        				</div>
		        			</li>
		        			<li>
		        				<div class="col-group">
		        					<label class="label-text">Pickup Location <span>*</span> </label>
		        					<input type="text" placeholder="enter city name" class="form-input">
		        				</div>
		        			</li>
		        			<li>
		        				<div class="col-group">
		        					<label class="label-text">Expected Price (INR) </label>
		        					<input type="text" placeholder="0.00" class="form-input">
		        				</div>
		        			</li>
	        			</ul>
	        		</div>
	        		<div class="col-xl-6">
	        			<ul class="form-list">
		        			<li>
		        				<div class="col-group">
		        					<label class="label-text">Loading Date <span>*</span> </label>
		        					<input type="text" placeholder="select date" class="form-input sandbox-container">
		        				</div>
		        			</li>
		        			<li>
		        				<div class="col-group">
		        					<label class="label-text">Drop Location <span>*</span> </label>
		        					<input type="text" placeholder="enter city name" class="form-input">
		        				</div>
		        			</li>
		        			<li>
		        				<div class="col-group">
		        					<label class="label-text">Comments</label>
		        					<input type="text" placeholder="Enter your message here" class="form-input">
		        				</div>
		        			</li>
	        			</ul>
	        		</div>
	        	</div>
	        </form>
	      </div>
	      <div class="modal-footer">
	      	<button type="button" class="btn btn-primary">Save changes</button>
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>

