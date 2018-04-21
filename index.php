	
	<?php include 'header.php'; ?>

	<!-- ******* Slider start ******** -->
	<section class="slider">
	    <div class="container-fluid">
	        <div class="row">
                <div id="mainSlider" class="carousel slide" data-ride="carousel" data-interval="2200">
                    <ol class="carousel-indicators">
                        <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
                        <li data-target="#mainSlider" data-slide-to="1"></li>
                        <li data-target="#mainSlider" data-slide-to="2"></li>
                        <li data-target="#mainSlider" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="images/slider-image01.jpg" alt="" class="img-responsive">
                            <!-- <div class="carousel-caption">
                                <h4>Mother and Child care</h4>
                            </div> -->
                            <figcaption>Mother & Child care</figcaption>
                        </div>
                        <div class="item">
                            <img src="images/slider-image02.jpg" alt="" class="img-responsive">
                            <!-- <div class="carousel-caption">
                                <h4>Mother and Child care</h4>
                            </div> -->
                            <figcaption>Mother & Child care</figcaption>
                        </div>
                        <div class="item">
                            <img src="images/slider-image03.jpg" alt="" class="img-responsive">
                            <!-- <div class="carousel-caption">
                                <h4>Mother and Child care</h4>
                            </div> -->
                            <figcaption>Mother & Child care</figcaption>
                        </div>
                        <div class="item">
                            <img src="images/slider-image04.jpg" alt="" class="img-responsive">
                            <!-- <div class="carousel-caption">
                                <h4>Mother and Child care</h4>
                            </div> -->
                            <figcaption>Mother & Child care</figcaption>
                        </div>
                    </div>
                    <a href="#mainSlider" class="left carousel-control" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a href="#mainSlider" class="right carousel-control" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
	        </div>
	    </div>
	</section>
	<!-- ******* Slider end ******** -->

	<hr>

	<!-- ***** Category gallery section start ***** -->
	<section>
		<div class="container">
			<div class="row thumbnail well text-center padding-bottom-zero">
				<h3 class="text-center text-info margin-top-zero">Mother's guideline we provide</h3><br>
				<div class="col-lg-3 col-md-3 col-sm-6">
					<a href="mother-guide.php"><img src="images/mom-icon.png" alt="" class="img-thumbnail"></a>
					<div class="caption">
						<h4 class="text-info">Life-Style</h4>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6">
					<a href="mother-guide.php"><img src="images/diet-icon.png" alt="" class="img-thumbnail"></a>
					<div class="caption">
						<h4 class="text-info">Diet</h4>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6">
					<a href="mother-guide.php"><img src="images/drug-icon.png" alt="" class="img-thumbnail"></a>
					<div class="caption">
						<h4 class="text-info">Drug</h4>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6">
					<a href="mother-guide.php"><img src="images/exercise-icon.png" alt="" class="img-thumbnail"></a>
					<div class="caption">
						<h4 class="text-info">Exercise</h4>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ***** Category gallery section end ***** -->

	<hr>

	<!-- ***** Title and description section start***** -->
	<section class="title-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
                    <h1 class="text-center" style="color: white;">What's our Client Say?</h1>
                    <hr>
                    <div id="clientSlider" class="carousel slide" data-ride="carousel" data-interval="2000">
                        <ol class="carousel-indicators">
                            <li data-target="#clientSlider" data-slide-to="0" class="active"></li>
                            <li data-target="#clientSlider" data-slide-to="1"></li>
                            <li data-target="#clientSlider" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <h3>Some content goes here about client feedback.</h3>
                            </div>
                            <div class="item">
                                <h3>This is one of the best seller company.</h3>
                            </div>
                            <div class="item">
                                <h3>We are happy to serve our clients.</h3>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</section>
	<!-- ***** Title and description section end***** -->
	
	<hr>

	<!-- ****** Mother's guide section start ****** -->
	<section>
		<div class="container">
			<div class="row well">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<img src="images/dc-img.jpg" class="img-responsive">
				</div>
				<div class="col-lg-9 col-md-9 col-sm-6 col-xs-12">
					<h3>Mother's Guide during pregnancy</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio quasi magnam suscipit doloribus sapiente unde laudantium facilis consequuntur iure commodi? Ut error ea....</p>
					<br><br>
					<a href="mother-guide.php" class="btn btn-info pull-right">View More Details</a>
				</div>
			</div>
		</div>
	</section>
	<!-- ****** Mother's guide section end ****** -->

	<hr>

	<?php include 'footer.php'; ?>