@extends('layouts.app')
@section('title', 'Cyber-IT - IT Solutions Services')
@section('content')
	<!-----START CAROUSEL SLIDER SECTION------->
	<div class="carousel-slider-section">
		<div class="carousel-slider owl-carousel">
			<div class="carousel-slider-one white align-items-center d-flex">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="slider-content">
								<div class="wow fadeInDown" data-wow-duration="2s" data-wow-delay="0s">
									<h4>Best Perform For Business</h4>		
								</div>
								<div class="wow fadeInDown" data-wow-duration="2s" data-wow-delay="0s">
									<h1>Real - Time Monitoring </h1>		
								</div>
								<div class="wow fadeInDown" data-wow-duration="2s" data-wow-delay="0.6s">
									<h2>Your Technology</h2>		
								</div>		
								<p>We are equipped with an updated technical knowledge to serve our customers  properly. Our method of application maintains the industry. 
								</p>
								<div class="carousel-btn-area d-flex mt-25">
									<div class="btn-common btn-carousel-slider">
										<a href="index.html#">How It Work <i class="fa fa-angle-right"></i></a>
									</div>
									<div class="video carousel-video">
										<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="https://youtu.be/BS4TUd7FJSg"><i class="fas fa-play-circle"></i></a>	
									</div>
									<p class=" d-sm-none d-md-none d-lg-none d-xl-block pl-20 mb-0" style="line-height: 45px;">See Our Introduction</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-slider-two white align-items-center d-flex">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="slider-content">
								<div class="wow fadeInDown" data-wow-duration="2s" data-wow-delay="0s">
									<h4>Best Perform For Business</h4>		
								</div>
								<div class="wow fadeInDown" data-wow-duration="2s" data-wow-delay="0s">
									<h1>Real - Time Monitoring </h1>		
								</div>
								<div class="wow fadeInDown" data-wow-duration="2s" data-wow-delay="0.6s">
									<h2>Your Technology</h2>		
								</div>
								<p>We are equipped with an updated technical knowledge to serve our customers  properly. Our method of application maintains the industry. 
								</p>
								<div class="btn-common btn-carousel-slider">
									<a href="index.html#">How It Work <i class="fa fa-angle-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-----START FEATURE SECTION----->
	<div class="feature-section">
		<div class="container">
			<div class="feature-content-container">
				<div class="row feature-translate">
					<div class="col-sm-12 col-md-6 col-lg-4 pl-0 pr-0">
						<div class="feature-content d-flex">
							<div class="feature-icon">
								<i class="flaticon-developer"></i>
							</div>
							<div class="feature-content-txt">
								<h2>Expert & Professional</h2>
								<p>We Are Trusted Our Customers</p>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-4 pl-0 pr-0">
						<div class="feature-content style-2 d-flex">
							<div class="feature-icon">
								<i class="flaticon-clock"></i>
							</div>
							<div class="feature-content-txt">
								<h2>24/7 Support</h2>
								<p>000 7845 114- 123 4567 890</p>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-4 pl-0 pr-0">
						<div class="feature-content d-flex">
							<div class="feature-icon">
								<i class="flaticon-left-quote"></i>
							</div>
							<div class="feature-content-txt">
								<h2>Trusted Services</h2>
								<p>We Are Trusted Our Customers</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-----START ABOUT SECTION----->
	<div class="about-section pt-70 pb-100">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-sm-12 col-md-6 col-lg-6">
					<div class="about-thumb-section">
						<div class="about-thumb">
							<img src="{{ asset('cyber-it/assets/images/about/ab1.png') }}" alt="thumb">
						</div>
						<div class="about-circle-bg alltuchtopdown">
							<img src="{{ asset('cyber-it/assets/images/about/ab-circle.png') }}" alt="circle-thumb">
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-6">
					<div class="about-content-container">
						<div class="section-head pb-60">
							<h5>30 YEARS OF EXPERIENCE</h5>
							<h2>Preparing for your success</h2>
							<h2>provide best  <span> IT solutions.</span> </h2>
							<div class="animated-bar"><span></span></div>
						</div>
						<div class="about-content">
							<div class="about-content-txt">
								<p>Donec pulvinar magna id leoersi pellentesque impered dignissim rhoncus euismod euismod eros vitae accumsan lacinia. Fusce auctor consectur dapibus vestibulum ac ex nec turpis moles et sapien lacinia varius odio vel lobortis dui awesome doloren.</p>
							</div>
							<div class="row">
								<div class=" col-sm-12 col-md-12 col-lg-6 pl-0 pr-0">
									<div class="about-feature d-flex">
										<div class="about-feature-icon">
											<i class="flaticon-call"></i>
										</div>
										<div class="about-feature-content">
											<div class="about-feature-content-title">
												<h4>24/7 Support</h4>
											</div>
											<div class="about-feature-content-text">
												<p>Porem Ipsum is simply and mumme awesome.</p>
											</div>
										</div>
									</div>
								</div>
								<div class=" col-sm-12 col-md-12 col-lg-6 pl-0 pr-0">
									<div class="about-feature d-flex">
										<div class="about-feature-icon">
											<i class="flaticon-developer"></i>
										</div>
										<div class="about-feature-content">
											<div class="about-feature-content-title">
												<h4>Experienced Team</h4>
											</div>
											<div class="about-feature-content-text">
												<p>Porem Ipsum is simply and mumme awesome.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<p class="pt-20">Molitia modi quae laboriosam nemo minima molestias vitae rerulla eos explicabo optio accusan nisi repellend atione.</p>
							<div class="btn-common btn-about">
								<a href="index.html#">More About <i class="fas fa-angle-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-----START CHOOSE-US SECTION----->
	<div class="choose-us-section pt-85 pb-140">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-head style-2 white pb-70">
						<h5 class="text-white">Why Choose Us</h5>
						<h2>We deal with the aspects </h2>
						<h2> of professional IT Solution Services</h2>
						<div class="animated-bar"> <span></span></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-6 col-lg-3">
					<div class="choose-us-single-feature">
						<div class="choose-us-feature-wrapper white">
							<div class="choose-us-content">
								<div class="choose-us-feature-title">
									<h3>Product Designs</h3>
								</div>
								<div class="choose-us-feature-txt">
									<p>Donec pulvinar magna was leoersi pellentesque impered dignissim creative.</p>
								</div>
								<div class="choose-us-icon"><i class="flaticon-process"></i></div>
								<div class="choose-us-btn"><a href="index.html#">Read More <i class="fa fa-angle-right"></i></a></div>
								<div class="choose-us-number">
									<h2>01</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-3">
					<div class="choose-us-single-feature">
						<div class="choose-us-feature-wrapper white">
							<div class="choose-us-content">
								<div class="choose-us-feature-title">
									<h3>Big Data & Analytics</h3>
								</div>
								<div class="choose-us-feature-txt">
									<p>Donec pulvinar magna was leoersi pellentesque impered dignissim creative.</p>
								</div>
								<div class="choose-us-icon"><i class="flaticon-system"></i></div>
								<div class="choose-us-btn"><a href="index.html#">Read More <i class="fa fa-angle-right"></i></a></div>
								<div class="choose-us-number">
									<h2>02</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-3">
					<div class="choose-us-single-feature">
						<div class="choose-us-feature-wrapper white">
							<div class="choose-us-content">
								<div class="choose-us-feature-title">
									<h3>Maintain App Data</h3>
								</div>
								<div class="choose-us-feature-txt">
									<p>Donec pulvinar magna was leoersi pellentesque impered dignissim creative.</p>
								</div>
								<div class="choose-us-icon"><i class="flaticon-data"></i></div>
								<div class="choose-us-btn"><a href="index.html#">Read More <i class="fa fa-angle-right"></i></a></div>
								<div class="choose-us-number">
									<h2>03</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-3">
					<div class="choose-us-single-feature">
						<div class="choose-us-feature-wrapper white">
							<div class="choose-us-content">
								<div class="choose-us-feature-title">
									<h3>Cyber Security</h3>
								</div>
								<div class="choose-us-feature-txt">
									<p>Donec pulvinar magna was leoersi pellentesque impered dignissim creative.</p>
								</div>
								<div class="choose-us-icon"><i class="flaticon-space"></i></div>
								<div class="choose-us-btn"><a href="index.html#">Read More <i class="fa fa-angle-right"></i></a></div>
								<div class="choose-us-number">
									<h2>04</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-----START COUNTER SECTION----->
	<div class="counter-section">
		<div class="container">
			<div class="row counter-content-container white">
				<div class="col-sm-12 col-md-6 col-lg-3">
					<div class="single-counter br">
						<div class="counter-content">
							<div class="counter-content-inner">
								<div class="count-up-txt">
									<h1><span class="counter">15</span></h1>
								</div>
								<div class="counter-txt">
									<h3>K</h3>
								</div>
							</div>
						</div>
						<div class="counter-title">
							<h4>Happy Clients</h4>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-3">
					<div class="single-counter br">
						<div class="counter-content">
							<div class="counter-content-inner">
								<div class="count-up-txt">
									<h1><span class="counter">1260</span></h1>
								</div>
								<div class="counter-txt">
									<h3>+</h3>
								</div>
							</div>
						</div>
						<div class="counter-title">
							<h4>Account Number </h4>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-3">
					<div class="single-counter br">
						<div class="counter-content">
							<div class="counter-content-inner">
								<div class="count-up-txt">
									<h1><span class="counter">10</span></h1>
								</div>
								<div class="counter-txt">
									<h3>K</h3>
								</div>
							</div>
						</div>
						<div class="counter-title">
							<h4>Finished Project</h4>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-3">
					<div class="single-counter">
						<div class="counter-content">
							<div class="counter-content-inner">
								<div class="count-up-txt">
									<h1><span class="counter">992</span></h1>
								</div>
								<div class="counter-txt">
									<h3>+</h3>
								</div>
							</div>
						</div>
						<div class="counter-title">
							<h4>Win Awards</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-----START SERVICE SECTION----->
	<div class="service-section pb-80 pt-80">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-head style-2 pb-70">
						<h5>Our Services</h5>
						<h2>We run all kinds of services </h2>
						<h2> in form of Information & Technologies</h2>
						<div class="animated-bar"> <span></span></div>
					</div>
				</div>
			</div>
			<div class="service-feature-container">
				<div class="row">
					<div class="col-sm-12 col-md-6 col-lg-6">
						<div class="servise-single-feature">
							<div class="service-feature-content d-flex">
								<div class="service-feature-icon">
									<div class="service-number-shape">
										<span>01</span>
									</div>
									<i class="flaticon-chart"></i>
								</div>
								<div class="service-content-inner">
									<div class="service-content-title">
										<h3>IT Mamangement</h3>
									</div>
									<div class="service-content-txt">
										<p>Lorem ipsum dolor sit labore amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
									</div>
									<div class="service-btm-btn"><a href="index.html#">Read More <i class="fa fa-angle-right"></i></a></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-6">
						<div class="servise-single-feature">
							<div class="service-feature-content d-flex">
								<div class="service-feature-icon">
									<div class="service-number-shape">
										<span>02</span>
									</div>
									<i class="flaticon-data"></i>
								</div>
								<div class="service-content-inner">
									<div class="service-content-title">
										<h3>Product Design</h3>
									</div>
									<div class="service-content-txt">
										<p>Lorem ipsum dolor sit labore amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
									</div>
									<div class="service-btm-btn"><a href="index.html#">Read More <i class="fa fa-angle-right"></i></a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-6 col-lg-6">
						<div class="servise-single-feature">
							<div class="service-feature-content d-flex">
								<div class="service-feature-icon">
									<div class="service-number-shape">
										<span>03</span>
									</div>
									<i class="flaticon-time"></i>
								</div>
								<div class="service-content-inner">
									<div class="service-content-title">
										<h3>Cloud Services</h3>
									</div>
									<div class="service-content-txt">
										<p>Lorem ipsum dolor sit labore amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
									</div>
									<div class="service-btm-btn"><a href="index.html#">Read More <i class="fa fa-angle-right"></i></a></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-6">
						<div class="servise-single-feature">
							<div class="service-feature-content d-flex">
								<div class="service-feature-icon">
									<div class="service-number-shape">
										<span>04</span>
									</div>
									<i class="flaticon-interaction"></i>
								</div>
								<div class="service-content-inner">
									<div class="service-content-title">
										<h3>Cloud Computing</h3>
									</div>
									<div class="service-content-txt">
										<p>Lorem ipsum dolor sit labore amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
									</div>
									<div class="service-btm-btn"><a href="index.html#">Read More <i class="fa fa-angle-right"></i></a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-6 col-lg-6">
						<div class="servise-single-feature">
							<div class="service-feature-content d-flex">
								<div class="service-feature-icon">
									<div class="service-number-shape">
										<span>05</span>
									</div>
									<i class="flaticon-business-and-finance"></i>
								</div>
								<div class="service-content-inner">
									<div class="service-content-title">
										<h3>IT Consultancy</h3>
									</div>
									<div class="service-content-txt">
										<p>Lorem ipsum dolor sit labore amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
									</div>
									<div class="service-btm-btn"><a href="index.html#">Read More <i class="fa fa-angle-right"></i></a></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-6">
						<div class="servise-single-feature">
							<div class="service-feature-content d-flex">
								<div class="service-feature-icon">
									<div class="service-number-shape">
										<span>06</span>
									</div>
									<i class="flaticon-left-quote"></i>
								</div>
								<div class="service-content-inner">
									<div class="service-content-title">
										<h3>Cyber Security</h3>
									</div>
									<div class="service-content-txt">
										<p>Lorem ipsum dolor sit labore amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
									</div>
									<div class="service-btm-btn"><a href="index.html#">Read More <i class="fa fa-angle-right"></i></a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-----START CALL-DO-ACTION SECTION----->
	<div class="call-do-action pt-20">
		<div class="container">
			<div class="row call-do-action-content align-items-center">
				<div class="col-sm-12 col-md-9 col-lg-9">
					<div class="call-do-action-title">
						<h2>Make Your Great Website!</h2>
					</div>
					<p>We are very experienced person. You can choose us for your IT solution business.</p>
				</div>
				<div class="col-sm-12 col-md-3 col-lg-3">
					<div class="call-do-btn pt-30">
						<a href="index.html#">Let's Start</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-----START CASE-STUDY  SECTION----->
	<div class="case-stydy-section">
		<div class="container-fluid">
			<div class="case-study-container">
				<div class="section-head style-3 pb-55">
					<div class="row align-items-center">
						<div class=" col-xl-5 col-lg-5 col-md-5">
							<h5>We Make Connections</h5>
						    <h2>Explore Recent Projects</h2>
						</div>
						<div class=" col-xl-7 col-lg-7 col-md-7">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed dood tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="case-study-carousel owl-carousel">
						<div class="case-study-single-items">
							<div class="case-study-thumb">
								<img src="{{ asset('cyber-it/assets/images/case-study/case1.jpg') }}" alt="thumb">
							</div>
							<div class="case-study-overlay-content">
								<div class="case-study-title">
									<h4><a href="case-study-details.html">Solution For Financial</a></h4>
								</div>
								<div class="case-study-catagory">
									<span>Marketing</span> / 
									<span>Design</span>
								</div>
							</div>
						</div>
						<div class="case-study-single-items">
							<div class="case-study-thumb">
								<img src="{{ asset('cyber-it/assets/images/case-study/case2.jpg') }}" alt="thumb">
							</div>
							<div class="case-study-overlay-content">
								<div class="case-study-title">
									<h4><a href="case-study-details.html">Solution For Financial</a></h4>
								</div>
								<div class="case-study-catagory">
									<span>Marketing</span> / 
									<span>Design</span>
								</div>
							</div>
						</div>
						<div class="case-study-single-items">
							<div class="case-study-thumb">
								<img src="{{ asset('cyber-it/assets/images/case-study/case5.jpg') }}" alt="thumb">
							</div>
							<div class="case-study-overlay-content">
								<div class="case-study-title">
									<h4><a href="case-study-details.html">Solution For Financial</a></h4>
								</div>
								<div class="case-study-catagory">
									<span>Marketing</span> / 
									<span>Design</span>
								</div>
							</div>
						</div>
						<div class="case-study-single-items">
							<div class="case-study-thumb">
								<img src="{{ asset('cyber-it/assets/images/case-study/case3.jpg') }}" alt="thumb">
							</div>
							<div class="case-study-overlay-content">
								<div class="case-study-title">
									<h4><a href="case-study-details.html">Solution For Financial</a></h4>
								</div>
								<div class="case-study-catagory">
									<span>Marketing</span> / 
									<span>Design</span>
								</div>
							</div>
						</div>
						<div class="case-study-single-items">
							<div class="case-study-thumb">
								<img src="{{ asset('cyber-it/assets/images/case-study/case4.jpg') }}" alt="thumb">
							</div>
							<div class="case-study-overlay-content">
								<div class="case-study-title">
									<h4><a href="case-study-details.html">Solution For Financial</a></h4>
								</div>
								<div class="case-study-catagory">
									<span>Marketing</span> / 
									<span>Design</span>
								</div>
							</div>
						</div>
						<div class="case-study-single-items">
							<div class="case-study-thumb">
								<img src="{{ asset('cyber-it/assets/images/case-study/case5.jpg') }}" alt="thumb">
							</div>
							<div class="case-study-overlay-content">
								<div class="case-study-title">
									<h4><a href="case-study-details.html">Solution For Financial</a></h4>
								</div>
								<div class="case-study-catagory">
									<span>Marketing</span> / 
									<span>Design</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!----START TESTIMONIAL SECTION----->
	<div class="testimonial-section pt-100 pb-140">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-head style-2 pb-70">
						<h5>Testimonial</h5>
						<h2>We have trusted </h2>
						<h2>Clients & what say About Cyber.</h2>
						<div class="animated-bar"><span></span></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="testimonial-carousel owl-carousel">
					<div class="testimonial-single-item">
						<div class="testimonial-thumb">
							<img src="{{ asset('cyber-it/assets/images/testimonial/tstm1.jpg') }}" alt="testimonial Img">
							<div class="testimonial-icon">
								<span><i class="fas fa-quote-left"></i></span>
							</div>
						</div>
						<div class="testimonial-content">
							<p class="testimonial-content-text">Sorem ipsum dolor sit amet there any consectetur adipisicing eliter sed do the eiusmod tempor asem incididunt ut labore dolore magna aliqua. Ut enim.</p>
							<h4>John Abraham</h4>
							<p class="testimonial-designation">Web developer</p>
						</div>
					</div>
					<div class="testimonial-single-item">
						<div class="testimonial-thumb">
							<img src="{{ asset('cyber-it/assets/images/testimonial/tstm2.jpg') }}" alt="testimonial Img">
							<div class="testimonial-icon">
								<span><i class="fas fa-quote-left"></i></span>
							</div>
						</div>
						<div class="testimonial-content">
							<p class="testimonial-content-text">Sorem ipsum dolor sit amet there any consectetur adipisicing eliter sed do the eiusmod tempor asem incididunt ut labore dolore magna aliqua. Ut enim.</p>
							<h4>Ellen Erye </h4>
							<p class="testimonial-designation">Project Manager</p>
						</div>
					</div>
					<div class="testimonial-single-item">
						<div class="testimonial-thumb">
							<img src="{{ asset('cyber-it/assets/images/testimonial/tstm3.jpg') }}" alt="testimonial Img">
							<div class="testimonial-icon">
								<span><i class="fas fa-quote-left"></i></span>
							</div>
						</div>
						<div class="testimonial-content">
							<p class="testimonial-content-text">Sorem ipsum dolor sit amet there any consectetur adipisicing eliter sed do the eiusmod tempor asem incididunt ut labore dolore magna aliqua. Ut enim.</p>
							<h4>Shene Watsan </h4>
							<p class="testimonial-designation">Founder</p>
						</div>
					</div>
					<div class="testimonial-single-item">
						<div class="testimonial-thumb">
							<img src="{{ asset('cyber-it/assets/images/testimonial/tstm2.jpg') }}" alt="testimonial Img">
							<div class="testimonial-icon">
								<span><i class="fas fa-quote-left"></i></span>
							</div>
						</div>
						<div class="testimonial-content">
							<p class="testimonial-content-text">Sorem ipsum dolor sit amet there any consectetur adipisicing eliter sed do the eiusmod tempor asem incididunt ut labore dolore magna aliqua. Ut enim.</p>
							<h4>Monalysha</h4>
							<p class="testimonial-designation">CEO</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-----START FEATURE INDEX SECTION----->
	<div class="feature-index-section white pt-65 pb-70">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-head style-2 pb-40">
						<h5 class="text-white">Index Of Technology</h5>
						<h2>We provide world with </h2>
						<h2>IT solution services for Business Stratagy.</h2>
						<div class="animated-bar"><span></span></div>
					</div>
				</div>
			</div>
			<div class="feature-content-wrapper">
				<div class="row">
					<div class="col-sm-4 col-md-4 col-lg-2 ">
						<div class="feature-single-content">
							<div class="feature-icon"><i class="flaticon-time"></i></div>
							<div class="feature-title">IOS</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-2 ">
						<div class="feature-single-content">
							<div class="feature-icon"><i class="flaticon-graphic-design"></i></div>
							<div class="feature-title">ADRROID</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-2 ">
						<div class="feature-single-content">
							<div class="feature-icon"><i class="flaticon-data-analytics"></i></div>
							<div class="feature-title">WEB</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-2 ">
						<div class="feature-single-content">
							<div class="feature-icon"><i class="flaticon-business-and-finance"></i></div>
							<div class="feature-title">IOT</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-2 ">
						<div class="feature-single-content">
							<div class="feature-icon"><i class="flaticon-work"></i></div>
							<div class="feature-title">TV</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-2 ">
						<div class="feature-single-content">
							<div class="feature-icon"><i class="flaticon-interaction"></i></div>
							<div class="feature-title">WIRELESS</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!----START BLOG SECTION----->
	<div class="blog-section pt-70 pb-100">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-head style-2 pb-30">
						<h5>Articles</h5>
						<h2>Latest Blog Posts </h2>
						<div class="animated-bar"><span></span></div>
						<p class="pt-25">Phasellus vitae velit sit amet diam semper commodo quis quis libero. Morbi consequat arcu augue, molestie faucibus.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="blog-carousel owl-carousel">
					<div class="blog-single-items">
						<div class="blog-thumb">
							<a href="index.html#"><img src="{{ asset('cyber-it/assets/images/blog/blog-t1.jpg') }}" alt="thumb"></a>
							<div class="blog-meta-top">
								<ul>
									<li><a href="index.html#">Design</a></li>
								</ul>
							</div>
						</div>
						<div class="blog-content">
							<div class="blog-meta">
								<a href="index.html#">Cyber</a>
								<span>February 01, 2025</span>
							</div>
							<div class="blog-page-title">
								<h2><a href="blog-details.html">Tiktok Illegally collecting data sharing</a></h2>
							</div>
							<p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore. </p>
							<div class="blog-btn">
								<a href="index.html#">Read More  <i class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="blog-single-items">
						<div class="blog-thumb">
							<a href="index.html#"><img src="{{ asset('cyber-it/assets/images/blog/blog-t2.jpg') }}" alt="thumb"></a>
							<div class="blog-meta-top">
								<ul>
									<li><a href="index.html#">Wordpress</a></li>
								</ul>
							</div>
						</div>
						<div class="blog-content">
							<div class="blog-meta">
								<a href="index.html#">Cyber</a>
								<span>February 01, 2025</span>
							</div>
							<div class="blog-page-title">
								<h2><a href="blog-details.html">How to learn PHP 10 tips to get you started</a></h2>
							</div>
							<p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore. </p>
							<div class="blog-btn">
								<a href="index.html#">Read More  <i class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="blog-single-items">
						<div class="blog-thumb">
							<a href="index.html#"><img src="{{ asset('cyber-it/assets/images/blog/blog-t3.jpg') }}" alt="thumb"></a>
							<div class="blog-meta-top">
								<ul>
									<li><a href="index.html#">Development</a></li>
								</ul>
							</div>
						</div>
						<div class="blog-content">
							<div class="blog-meta">
								<a href="index.html#">Cyber</a>
								<span>February 01, 2025</span>
							</div>
							<div class="blog-page-title">
								<h2><a href="blog-details.html">Convincing reasons you need to learn</a></h2>
							</div>
							<p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore. </p>
							<div class="blog-btn">
								<a href="index.html#">Read More  <i class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="blog-single-items">
						<div class="blog-thumb">
							<a href="index.html#"><img src="{{ asset('cyber-it/assets/images/blog/blog-t4.jpg') }}" alt="thumb"></a>
							<div class="blog-meta-top">
								<ul>
									<li><a href="index.html#">Wordpress</a></li>
								</ul>
							</div>
						</div>
						<div class="blog-content">
							<div class="blog-meta">
								<a href="index.html#">Cyber</a>
								<span>February 01, 2025</span>
							</div>
							<div class="blog-page-title">
								<h2><a href="blog-details.html">The five devices you need to work anytime</a></h2>
							</div>
							<p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore. </p>
							<div class="blog-btn">
								<a href="index.html#">Read More  <i class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="blog-single-items">
						<div class="blog-thumb">
							<a href="index.html#"><img src="{{ asset('cyber-it/assets/images/blog/blog-t1.jpg') }}" alt="thumb"></a>
							<div class="blog-meta-top">
								<ul>
									<li><a href="index.html#">Wordpress</a></li>
								</ul>
							</div>
						</div>
						<div class="blog-content">
							<div class="blog-meta">
								<a href="index.html#">Cyber</a>
								<span>February 01, 2025</span>
							</div>
							<div class="blog-page-title">
								<h2><a href="blog-details.html">How to learn PHP 10 tips to get you started</a></h2>
							</div>
							<p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore. </p>
							<div class="blog-btn">
								<a href="index.html#">Read More  <i class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="blog-single-items">
						<div class="blog-thumb">
							<a href="index.html#"><img src="{{ asset('cyber-it/assets/images/blog/blog-t2.jpg') }}" alt="thumb"></a>
							<div class="blog-meta-top">
								<ul>
									<li><a href="index.html#">Design</a></li>
								</ul>
							</div>
						</div>
						<div class="blog-content">
							<div class="blog-meta">
								<a href="index.html#">Cyber</a>
								<span>February 01, 2025</span>
							</div>
							<div class="blog-page-title">
								<h2><a href="blog-details.html">The five devices you need to work anytime </a></h2>
							</div>
							<p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore. </p>
							<div class="blog-btn">
								<a href="index.html#">Read More  <i class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="blog-single-items">
						<div class="blog-thumb">
							<a href="index.html#"><img src="{{ asset('cyber-it/assets/images/blog/blog-t3.jpg') }}" alt="thumb"></a>
							<div class="blog-meta-top">
								<ul>
									<li><a href="index.html#">Design</a></li>
									<li><a href="index.html#">Sass</a></li>
								</ul>
							</div>
						</div>
						<div class="blog-content">
							<div class="blog-meta">
								<a href="index.html#">Cyber</a>
								<span>February 01, 2025</span>
							</div>
							<div class="blog-page-title">
								<h2><a href="blog-details.html">Where and how to watch live stream today</a></h2>
							</div>
							<p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore. </p>
							<div class="blog-btn">
								<a href="index.html#">Read More  <i class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection


