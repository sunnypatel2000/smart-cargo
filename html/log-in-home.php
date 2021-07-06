<?php $title="log in | home ";include 'header.php';?>

	 	<section class="account-profile">
		    <div class="banner-section">
		        <div class="container">
		            <div class="row">
		                <div class="person-namebox">
		                    <div class="person-imgbox">
		                        <figure class="person-img">
		                            <img src="images/person-img.png" alt="person-img" title="profile">
		                        </figure>
		                    </div>
		                    <div class="banner-textbox person-info">
		                        <h1>
		                            Welcome to Smart cargo<span> Jeff</span> 
		                        </h1>
		                    </div>
		                </div>
		            </div>
		        </div>

		       	<div class="tabbing-area">
		       		<div class="container">
		       			<div class="row">
		       				<div class="col-12">
			       				<div class="tabbing-box">
									<input type="radio" class="tabs__radio" name="tabs-example" id="tab1" checked>
									  <!-- tab -1 -->
									  	<label for="tab1" class="tabs__label">Account</label>
										  <div class="tabs__content">
											    <div class="tab-deatils d-flex flex-wrap w-100">
				                                    <div class="col-12">
				                                         <div class="section-titlebox">
				                                                <h2>Personal <span>Details</span></h2>
				                                        </div>
				                                    </div>
				                                    <div class=" col-md-12 col-lg-6 col-xl-6 edit-profile">
				                                        <div class="deatils-box">
				                                            <form class="model-boxs form-box">
				                                                <div class="form-title">
				                                                    <ul class="input-list">
				                                                        <li>
				                                                            <div class="form-grop">
				                                                                <div class="uploda-box">
				                                                                    <figure class="upload-img">
				                                                                        <img src="images/person-img.png" alt="upload-img">
				                                                                    </figure>
				                                                                    <div class="edit-box">
				                                                                        <div class="filebox">
				                                                                            <input type="file" id="file">
				                                                                            <label for="file" class="form-btn">upload new picture </label>
				                                                                        </div>
				                                                                        <div class="form-group">
				                                                                            <button type="button" class="form-btn delete_btn">Delete</button>
				                                                                        </div>
				                                                                    </div>
				                                                                </div>
				                                                            </div>
				                                                        </li>
				                                                        <li>
				                                                            <div class="form-group">
				                                                                <label for="name" class="input-lable">First name</label>
				                                                                <input type="text" placeholder="First name" class="input-box">
				                                                            </div>
				                                                        </li>
				                                                        <li>
				                                                            <div class="form-group">
				                                                                <label for="name" class="input-lable">last name</label>
				                                                                <input type="text" placeholder="Last name" class="input-box">
				                                                            </div>
				                                                        </li>
				                                                        <li>
				                                                            <div class="form-group">
				                                                                <label for="name" class="input-lable">email</label>
				                                                                <input type="text" placeholder="Email" class="input-box email-disabled">
				                                                            </div>
				                                                        </li>
				                                                        <li>
				                                                            <div class="form-group">
				                                                                <label for="name" class="input-lable">Password</label>
				                                                                <input type="password" placeholder="Password" class="input-box">
				                                                            </div>
				                                                        </li>
                                                                        <li>
				                                                            <div class="form-group">
				                                                                <label for="name" class="input-lable">Confirm Password</label>
				                                                                <input type="password" placeholder="Confirm Password" class="input-box">
				                                                            </div>
				                                                        </li>
				                                                        <li>
				                                                            <div class="form-group">
				                                                                <button type="button" class="form-btn">Save Profile</button>
				                                                            </div>
				                                                        </li>
				                                                    </ul>
				                                                </div>
				                                            </form>
				                                        </div>
				                                    </div>
				                                    <div class=" col-md-12 col-lg-6 col-xl-6">
				                                        <div class="report-area">
				                                            <div class="rating-box">
				                                                <div class="section-titlebox">
				                                                    <h4>hOW WOULD YOU <span>RATE US?</span></h4>
				                                                </div>
				                                                <div class="rating-area">
				                                                    
																	<div id="half-stars-example">
																	    <div class="rating-group">
																	        <input class="rating__input rating__input--none" checked name="rating2" id="rating2-0" value="0" type="radio">
																	        <label aria-label="0 stars" class="rating__label" for="rating2-0">&nbsp;</label>
																	        <label aria-label="0.5 stars" class="rating__label rating__label--half" for="rating2-05"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
																	        <input class="rating__input" name="rating2" id="rating2-05" value="0.5" type="radio">
																	        <label aria-label="1 star" class="rating__label" for="rating2-10"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
																	        <input class="rating__input" name="rating2" id="rating2-10" value="1" type="radio">
																	        <label aria-label="1.5 stars" class="rating__label rating__label--half" for="rating2-15"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
																	        <input class="rating__input" name="rating2" id="rating2-15" value="1.5" type="radio">
																	        <label aria-label="2 stars" class="rating__label" for="rating2-20"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
																	        <input class="rating__input" name="rating2" id="rating2-20" value="2" type="radio">
																	        <label aria-label="2.5 stars" class="rating__label rating__label--half" for="rating2-25"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
																	        <input class="rating__input" name="rating2" id="rating2-25" value="2.5" type="radio" checked>
																	        <label aria-label="3 stars" class="rating__label" for="rating2-30"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
																	        <input class="rating__input" name="rating2" id="rating2-30" value="3" type="radio">
																	        <label aria-label="3.5 stars" class="rating__label rating__label--half" for="rating2-35"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
																	        <input class="rating__input" name="rating2" id="rating2-35" value="3.5" type="radio">
																	        <label aria-label="4 stars" class="rating__label" for="rating2-40"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
																	        <input class="rating__input" name="rating2" id="rating2-40" value="4" type="radio">
																	        <label aria-label="4.5 stars" class="rating__label rating__label--half" for="rating2-45"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
																	        <input class="rating__input" name="rating2" id="rating2-45" value="4.5" type="radio">
																	        <label aria-label="5 stars" class="rating__label" for="rating2-50"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
																	        <input class="rating__input" name="rating2" id="rating2-50" value="5" type="radio">
																	    </div>
																	</div>

																	
				                                                </div>
				                                            </div>
				                                            <div class="feedback">
				                                                <div class="section-titlebox">
				                                                    <h4>dO YOU HAVE A QUESTION OR FEEDBACK<span>TO SHARE?</span></h4>
				                                                </div>
				                                                <form class="model-boxs form-box">
				                                                    <div class="form-title">
				                                                        <ul class="input-list">
				                                                            <li>
				                                                                <div class="form-group">
				                                                                    <input type="text" placeholder="Subject" class="input-box">
				                                                                </div>
				                                                            </li>
				                                                            <li>
				                                                                <div class="form-group">
				                                                                    <textarea name="textarea" placeholder="Message" class="input-box input-textarea"></textarea>
				                                                                </div>
				                                                            </li>
				                                                                        
				                                                            <li>
				                                                                <div class="form-group">
				                                                                    <button type="button" class="form-btn">Get In Touch</button>
				                                                                </div>
				                                                            </li>
				                                                        </ul>
				                                                    </div>
				                                                </form>
				                                            </div>
				                                        </div>
				                                    </div>
				                              </div>
											</div>
									<input type="radio" class="tabs__radio" name="tabs-example" id="tab2">
									  <!-- tab-2 -->
									  	<label for="tab2" class="tabs__label">Transaction</label>
										  	<div class="tabs__content">
										    	<div class="tab-deatils d-flex flex-wrap w-100">
				                                    <div class="col-12">
				                                         <div class="section-titlebox">
			                                                <h2>TRANSACTION</h2>
				                                        </div>
				                                    </div>
			                                    	<div class="data-table-area">
                                                        <table id="example" class="display" style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>Name</th>
                                                                    <th>Payment type</th>
                                                                    <th>Date</th>
                                                                    <th>Rate</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Tiger Nixon</td>
                                                                    <td>Edinburgh</td>
                                                                    <td>2011/04/25</td>
                                                                    <td>$320,800</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Garrett Winters</td>
                                                                    <td>Tokyo</td>
                                                                    <td>2011/07/25</td>
                                                                    <td>$170,750</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Ashton Cox</td>
                                                                    <td>San Francisco</td>
                                                                    <td>2009/01/12</td>
                                                                    <td>$86,000</td>
                                                                </tr>
                                                                </tbody>
                                                        </table>
													</div>
												</div>
								  			</div>
								  	<input type="radio" class="tabs__radio" name="tabs-example" id="tab3">
								  		<label for="tab3" class="tabs__label">record list</label>
										  	<div class="tabs__content">
                                              <div class="tab-deatils d-flex flex-wrap w-100">
				                                    <div class="col-12">
				                                         <div class="section-titlebox">
			                                                <h2>Record List</h2>
				                                        </div>
				                                    </div>
			                                    	<div class="data-table-area">
                                                        <table id="example1" class="display" style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>Name</th>
                                                                    <th>Payment type</th>
                                                                    <th>Date</th>
                                                                    <th>Rate</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Tiger Nixon</td>
                                                                    <td>Edinburgh</td>
                                                                    <td>2011/04/25</td>
                                                                    <td>$320,800</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Garrett Winters</td>
                                                                    <td>Tokyo</td>
                                                                    <td>2011/07/25</td>
                                                                    <td>$170,750</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Ashton Cox</td>
                                                                    <td>San Francisco</td>
                                                                    <td>2009/01/12</td>
                                                                    <td>$86,000</td>
                                                                </tr>
                                                                </tbody>
                                                        </table>
													</div>
												</div>
										  	</div>

								</div>
							</div>
		       			</div>
		       		</div>
		      	</div>
	 	</section>

<?php include 'footer.php';?>