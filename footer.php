	<!-- ***** Big footer start ***** -->
	<section class="big-footer-section">
	    <div class="container">
	        <div class="row">
	            <div class="col-lg-3 col-md-3 col-sm-6">
	                <h3>Contact</h3>
	                <hr>
	                <!-- <span><b>Flat: </b>A1</span><br> -->
	                <span><b>House: </b>A1 - 37</span><br>
	                <span><b>Road: </b>27(A)</span><br>
	                <span>Banani, Dhaka-1213</span><br>
	                <span>mother.care@gmail.com</span><br>
	            </div>
	            <div class="col-lg-3 col-md-3 col-sm-6">
	                <h3>Why choose us</h3>
	                <hr>
	                <p>Some content goes here about why choose us
	                    Some content goes here about why choose us
	                    Some content goes here about why choose us
	                </p>
	                <p>Some content goes here about why choose us
	                    Some content goes here about why choose us
	                </p>
	            </div>
	            <div class="col-lg-3 col-md-3 col-sm-6">
	                <h3>Popular links</h3>
	                <hr>
	                <ul class="popular-link">
	                    <li><a href="index.php">Home</a></li>
	                    <li><a href="about-us.php">About us</a></li>
	                    <li><a href="faq.php">FAQ</a></li>
	                </ul>
	            </div>
	            <div class="col-lg-3 col-md-3 col-sm-6">
	                <h3>Subscribe</h3>
	                <hr>
	                <form action="" method="post">
	                    <div class="form-group">
	                        <input type="email" class="form-control" placeholder="Email">
	                    </div>
	                    <div class="form-group">
	                        <textarea name="" class="form-control" placeholder="Your comment" id="" cols="" rows="" style="resize: none;"></textarea>
	                    </div>
	                    <div class="form-group">
	                        <input type="submit" name="btn" value="Subscribe" class="btn btn-success btn-block">
	                    </div>
	                </form>
	            </div>
	        </div>
	    </div>
	</section>
	<!-- ***** Big footer end ***** -->

	<!-- ***** Small Footer start ***** -->
	<section class="footer-section">
	    <div class="container">
	        <div class="row">
	            <div class="col-sm-6 col-xs-6">
	                <p>Copyright &copy; Team B, From <?php echo date("Y"); ?>.</p>
	            </div>
	            <div class="col-sm-6 col-xs-6">
	                <div class="social-link" style="float: right;" >
	                    <a href="" class="fb"><i class="fa fa-3x fa-facebook-square"></i></a>
	                    <a href="" class="yt"><i class="fa fa-3x fa-youtube-square"></i></a>
	                    <a href="" class="gp"><i class="fa fa-3x fa-google-plus-square"></i></a>
	                </div> 
	            </div>
	        </div>
	    </div>
	</section>
	<!-- ***** Small Footer end ***** -->

	<!-- Login modal section start -->
	<section class="login-modal">
		<div class="modal fade" id="loginModal" role="dialog">
		    <div class="modal-dialog">
		      	<div class="modal-content">
		        	<div class="modal-header" style="padding:15px 50px;">
		          		<button type="button" class="close" data-dismiss="modal">&times;</button>
		          		<h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
		        	</div>
		        	<div class="modal-body" style="padding:40px 50px;">
		          		<form role="form">
		            		<div class="form-group">
		              			<label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
		              			<input type="text" class="form-control" id="usrname" placeholder="Enter email">
		            		</div>
		            		<div class="form-group">
		              			<label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
		              			<input type="text" class="form-control" id="psw" placeholder="Enter password">
		            		</div>
		            		<div class="checkbox">
		              			<label><input type="checkbox" value="" checked>Remember me</label>
		            		</div>
		              		<button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
		          		</form>
		        	</div>
		        	<div class="modal-footer">
		          		<p>Not a member? <a href="#">Go to Register link for "Sign Up"</a></p>
		        	</div>
		      	</div>
		    </div>
		</div>
	</section>
	<!-- Login modal section end -->
	
	<!-- SignUp modal section start -->
	<section class="sign-up-modal">
		<div class="modal fade" id="signUpModal" role="dialog">
		    <div class="modal-dialog">
		      	<div class="modal-content">
		        	<div class="modal-header" style="padding:15px 50px;">
		          		<button type="button" class="close" data-dismiss="modal">&times;</button>
		          		<h4><span class="glyphicon glyphicon-log-in"></span> Sign Up</h4>
		        	</div>
		        	<div class="modal-body" style="padding:40px 50px;">
		          		<form role="form">
		            		<div class="form-group">
		              			<input type="text" class="form-control" id="name" placeholder="Enter your full name">
		            		</div>
            				<div class="form-group">
            		  			<input type="email" class="form-control" id="email" placeholder="Enter your email">
            				</div>
		            		<div class="form-group">
		              			<input type="password" class="form-control" id="password" placeholder="Enter your password">
		            		</div>
            				<div class="form-group">
            		  			<input type="number" class="form-control" id="number" placeholder="Enter your phone number">
            				</div>
    						<div class="form-group">
    				  			<input type="text" class="form-control" id="address" placeholder="Enter your address">
    						</div>
							<div class="form-group">
					  			<input type="number" class="form-control" id="age" placeholder="Enter your age">
							</div>
							<div class="form-group">
					  			<select name="blood-group">
					  			    <option value="blood-group">Select your Blood Group</option>
					  			    <option value="A+">A+</option>
					  			    <option value="A-">A-</option>
					  			    <option value="B+">B+</option>
					  			    <option value="B-">B-</option>
					  			    <option value="O+">O+</option>
					  			    <option value="O-">O-</option>
					  			    <option value="AB+">AB+</option>
					  			    <option value="AB-">AB-</option>
					  			  </select>
							</div>
		              		<button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Sign Up</button>
		          		</form>
		        	</div>
		        	<div class="modal-footer">
		          		<!-- <p>Not a member? <a href="#">Go to Register link for "Sign Up"</a></p> -->
		        	</div>
		      	</div>
		    </div>
		</div>
	</section>
	<!-- SignUp modal section end -->


	<script src="js/jquerylib.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>