@extends('layout.layout')


@section('content')
		<!-- Start Schedule Area -->
{{-- <section class="schedule">
	<div class="container">
		<div class="schedule-inner">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-12 ">
					<!-- single-schedule -->
					<div class="single-schedule first">
						<div class="inner">
							<div class="icon">
								<i class="fa fa-ambulance"></i>
							</div>
							<div class="single-content">
								<span>Lorem Amet</span>
								<h4>Emergency Cases</h4>
								<p>Lorem ipsum sit amet consectetur adipiscing elit. Vivamus et erat in lacus convallis sodales.</p>
								<a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<!-- single-schedule -->
					<div class="single-schedule middle">
						<div class="inner">
							<div class="icon">
								<i class="icofont-prescription"></i>
							</div>
							<div class="single-content">
								<span>Fusce Porttitor</span>
								<h4>Doctors Timetable</h4>
								<p>Lorem ipsum sit amet consectetur adipiscing elit. Vivamus et erat in lacus convallis sodales.</p>
								<a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 col-12">
					<!-- single-schedule -->
					<div class="single-schedule last">
						<div class="inner">
							<div class="icon">
								<i class="icofont-ui-clock"></i>
							</div>
							<div class="single-content">
								<span>Donec luctus</span>
								<h4>Opening Hours</h4>
								<ul class="time-sidual">
									<li class="day">Monday - Fridayp <span>8.00-20.00</span></li>
									<li class="day">Saturday <span>9.00-18.30</span></li>
									<li class="day">Monday - Thusday <span>9.00-15.00</span></li>
								</ul>
								<a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> --}}
<!--/End Start schedule Area -->

<!-- Start Feautes -->

<!--/ End Fun-facts -->

@include('layout.heroSection')

<!-- Start Call to action -->
<section class="call-action overlay" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-12">
				<div class="content">
					<h2>Do you need Emergency Medical Care? Call @ 1234 56789</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque porttitor dictum turpis nec gravida.</p>
					<div class="button">
						<a href="#" class="btn">Contact Now</a>
						<a href="#" class="btn second">Learn More<i class="fa fa-long-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--/ End Call to action -->

<!-- Start portfolio -->
<section class="portfolio section" >
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title">
					<h2>We Maintain Cleanliness Rules Inside Our Hospital</h2>
					<img src="img/section-img.png" alt="#">
					<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-12">
				<div class="owl-carousel portfolio-slider">
					<div class="single-pf">
						<img src="img/pf1.jpg" alt="#">
						<a href="portfolio-details.html" class="btn">View Details</a>
					</div>
					<div class="single-pf">
						<img src="img/pf2.jpg" alt="#">
						<a href="portfolio-details.html" class="btn">View Details</a>
					</div>
					<div class="single-pf">
						<img src="img/pf3.jpg" alt="#">
						<a href="portfolio-details.html" class="btn">View Details</a>
					</div>
					<div class="single-pf">
						<img src="img/pf4.jpg" alt="#">
						<a href="portfolio-details.html" class="btn">View Details</a>
					</div>
					<div class="single-pf">
						<img src="img/pf1.jpg" alt="#">
						<a href="portfolio-details.html" class="btn">View Details</a>
					</div>
					<div class="single-pf">
						<img src="img/pf2.jpg" alt="#">
						<a href="portfolio-details.html" class="btn">View Details</a>
					</div>
					<div class="single-pf">
						<img src="img/pf3.jpg" alt="#">
						<a href="portfolio-details.html" class="btn">View Details</a>
					</div>
					<div class="single-pf">
						<img src="img/pf4.jpg" alt="#">
						<a href="portfolio-details.html" class="btn">View Details</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--/ End portfolio -->

<!-- Start service -->
<section class="services section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title">
					<h2>We Offer Different Services To Improve Your Health</h2>
					<img src="img/section-img.png" alt="#">
					<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6 col-12">
				<!-- Start Single Service -->
				<div class="single-service">
					<i class="icofont icofont-prescription"></i>
					<h4><a href="service-details.html">General Treatment</a></h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>	
				</div>
				<!-- End Single Service -->
			</div>
			<div class="col-lg-4 col-md-6 col-12">
				<!-- Start Single Service -->
				<div class="single-service">
					<i class="icofont icofont-tooth"></i>
					<h4><a href="service-details.html">Teeth Whitening</a></h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>	
				</div>
				<!-- End Single Service -->
			</div>
			<div class="col-lg-4 col-md-6 col-12">
				<!-- Start Single Service -->
				<div class="single-service">
					<i class="icofont icofont-heart-alt"></i>
					<h4><a href="service-details.html">Heart Surgery</a></h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>	
				</div>
				<!-- End Single Service -->
			</div>
			<div class="col-lg-4 col-md-6 col-12">
				<!-- Start Single Service -->
				<div class="single-service">
					<i class="icofont icofont-listening"></i>
					<h4><a href="service-details.html">Ear Treatment</a></h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>	
				</div>
				<!-- End Single Service -->
			</div>
			<div class="col-lg-4 col-md-6 col-12">
				<!-- Start Single Service -->
				<div class="single-service">
					<i class="icofont icofont-eye-alt"></i>
					<h4><a href="service-details.html">Vision Problems</a></h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>	
				</div>
				<!-- End Single Service -->
			</div>
			<div class="col-lg-4 col-md-6 col-12">
				<!-- Start Single Service -->
				<div class="single-service">
					<i class="icofont icofont-blood"></i>
					<h4><a href="service-details.html">Blood Transfusion</a></h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>	
				</div>
				<!-- End Single Service -->
			</div>
		</div>
	</div>
</section>
<!--/ End service -->

<!-- Pricing Table -->
<section class="pricing-table section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title">
					<h2>We Provide You The Best Treatment In Resonable Price</h2>
					<img src="img/section-img.png" alt="#">
					<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- Single Table -->
			<div class="col-lg-4 col-md-12 col-12">
				<div class="single-table">
					<!-- Table Head -->
					<div class="table-head">
						<div class="icon">
							<i class="icofont icofont-ui-cut"></i>
						</div>
						<h4 class="title">Plastic Suggery</h4>
						<div class="price">
							<p class="amount">$199<span>/ Per Visit</span></p>
						</div>	
					</div>
					<!-- Table List -->
					<ul class="table-list">
						<li><i class="icofont icofont-ui-check"></i>Lorem ipsum dolor sit</li>
						<li><i class="icofont icofont-ui-check"></i>Cubitur sollicitudin fentum</li>
						<li class="cross"><i class="icofont icofont-ui-close"></i>Nullam interdum enim</li>
						<li class="cross"><i class="icofont icofont-ui-close"></i>Donec ultricies metus</li>
						<li class="cross"><i class="icofont icofont-ui-close"></i>Pellentesque eget nibh</li>
					</ul>
					<div class="table-bottom">
						<a class="btn" href="#">Book Now</a>
					</div>
					<!-- Table Bottom -->
				</div>
			</div>
			<!-- End Single Table-->
			<!-- Single Table -->
			<div class="col-lg-4 col-md-12 col-12">
				<div class="single-table">
					<!-- Table Head -->
					<div class="table-head">
						<div class="icon">
							<i class="icofont icofont-tooth"></i>
						</div>
						<h4 class="title">Teeth Whitening</h4>
						<div class="price">
							<p class="amount">$299<span>/ Per Visit</span></p>
						</div>	
					</div>
					<!-- Table List -->
					<ul class="table-list">
						<li><i class="icofont icofont-ui-check"></i>Lorem ipsum dolor sit</li>
						<li><i class="icofont icofont-ui-check"></i>Cubitur sollicitudin fentum</li>
						<li><i class="icofont icofont-ui-check"></i>Nullam interdum enim</li>
						<li class="cross"><i class="icofont icofont-ui-close"></i>Donec ultricies metus</li>
						<li class="cross"><i class="icofont icofont-ui-close"></i>Pellentesque eget nibh</li>
					</ul>
					<div class="table-bottom">
						<a class="btn" href="#">Book Now</a>
					</div>
					<!-- Table Bottom -->
				</div>
			</div>
			<!-- End Single Table-->
			<!-- Single Table -->
			<div class="col-lg-4 col-md-12 col-12">
				<div class="single-table">
					<!-- Table Head -->
					<div class="table-head">
						<div class="icon">
							<i class="icofont-heart-beat"></i>
						</div>
						<h4 class="title">Heart Suggery</h4>
						<div class="price">
							<p class="amount">$399<span>/ Per Visit</span></p>
						</div>	
					</div>
					<!-- Table List -->
					<ul class="table-list">
						<li><i class="icofont icofont-ui-check"></i>Lorem ipsum dolor sit</li>
						<li><i class="icofont icofont-ui-check"></i>Cubitur sollicitudin fentum</li>
						<li><i class="icofont icofont-ui-check"></i>Nullam interdum enim</li>
						<li><i class="icofont icofont-ui-check"></i>Donec ultricies metus</li>
						<li><i class="icofont icofont-ui-check"></i>Pellentesque eget nibh</li>
					</ul>
					<div class="table-bottom">
						<a class="btn" href="#">Book Now</a>
					</div>
					<!-- Table Bottom -->
				</div>
			</div>
			<!-- End Single Table-->
		</div>	
	</div>	
</section>	
<!--/ End Pricing Table -->



<!-- Start Blog Area -->
<section class="blog section" id="blog">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title">
					<h2>Keep up with Our Most Recent Medical News.</h2>
					<img src="img/section-img.png" alt="#">
					<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6 col-12">
				<!-- Single Blog -->
				<div class="single-news">
					<div class="news-head">
						<img src="img/blog1.jpg" alt="#">
					</div>
					<div class="news-body">
						<div class="news-content">
							<div class="date">22 Aug, 2020</div>
							<h2><a href="blog-single.html">We have annnocuced our new product.</a></h2>
							<p class="text">Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do eiusmod tempor incididunt sed do incididunt sed.</p>
						</div>
					</div>
				</div>
				<!-- End Single Blog -->
			</div>
			<div class="col-lg-4 col-md-6 col-12">
				<!-- Single Blog -->
				<div class="single-news">
					<div class="news-head">
						<img src="img/blog2.jpg" alt="#">
					</div>
					<div class="news-body">
						<div class="news-content">
							<div class="date">15 Feb, 2025</div>
							<h2><a href="blog-single.html">Top five way for solving teeth problems.</a></h2>
							<p class="text">Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do eiusmod tempor incididunt sed do incididunt sed.</p>
						</div>
					</div>
				</div>
				<!-- End Single Blog -->
			</div>
			<div class="col-lg-4 col-md-6 col-12">
				<!-- Single Blog -->
				<div class="single-news">
					<div class="news-head">
						<img src="img/blog3.jpg" alt="#">
					</div>
					<div class="news-body">
						<div class="news-content">
							<div class="date">05 Jan, 2020</div>
							<h2><a href="blog-single.html">We provide highly business soliutions.</a></h2>
							<p class="text">Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do eiusmod tempor incididunt sed do incididunt sed.</p>
						</div>
					</div>
				</div>
				<!-- End Single Blog -->
			</div>
		</div>
	</div>
</section>
<!-- End Blog Area -->

<!-- Start clients -->
<div class="clients overlay">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-12">
				<div class="owl-carousel clients-slider">
					<div class="single-clients">
						<img src="img/client1.png" alt="#">
					</div>
					<div class="single-clients">
						<img src="img/client2.png" alt="#">
					</div>
					<div class="single-clients">
						<img src="img/client3.png" alt="#">
					</div>
					<div class="single-clients">
						<img src="img/client4.png" alt="#">
					</div>
					<div class="single-clients">
						<img src="img/client5.png" alt="#">
					</div>
					<div class="single-clients">
						<img src="img/client1.png" alt="#">
					</div>
					<div class="single-clients">
						<img src="img/client2.png" alt="#">
					</div>
					<div class="single-clients">
						<img src="img/client3.png" alt="#">
					</div>
					<div class="single-clients">
						<img src="img/client4.png" alt="#">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--/Ens clients -->
<!-- Start Newsletter Area -->

<!-- /End Newsletter Area -->
@endsection