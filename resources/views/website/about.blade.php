@extends('layouts.website')
@section('content')


	<!--Page Title-->
	<section class="page-title" style="background-image:url({{ asset('website') }}/images/background/5-1.jpg)">
		<div class="auto-container">
			<h2>About us</h2>
			<ul class="page-breadcrumb">
				<li><a href="{{ route('home') }}">home</a></li>
				<li>About us</li>
			</ul>
		</div>
	</section>
	<!--End Page Title-->

	<!-- Story Section -->
	<section class="story-section">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Content Column -->
				<div class="content-column col-lg-8 col-md-12 col-sm-12">
					<div class="inner-column">
						<h2>Our Story in Renovation & Interior Solutions</h2>

						<div class="bold-text">
							Delivering quality renovation and interior solutions with expert craftsmanship, innovation, and
							a commitment to customer satisfaction.
						</div>

						<div class="text">
							<p>
								At Sanjeevanna and Company Enterprises, we specialize in complete renovation and interior
								solutions for residential, office, and commercial spaces. Our services include POP false
								ceiling works, renovation, electrical, painting, glass, carpentry, and plumbing works, all
								executed with precision and quality.
							</p>

							<p>
								From planning to project completion, we work closely with our clients to understand their
								requirements and deliver customized solutions that combine functionality, durability, and
								modern design. Our commitment to quality workmanship, timely delivery, and reliable service
								has earned us the trust of our customers.
							</p>
						</div>
					</div>
				</div>

				<!-- Image Column -->
				<div class="image-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image">
							<img src="{{ asset('website') }}/images/reno.png" alt="">
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Story Section -->

	<!-- Interior Section -->
	<section class="interior-section style-three">
		<div class="auto-container">
			<div class="inner-container">
				<div class="row clearfix">

					<!-- Image Column -->
					<div class="image-column col-lg-4 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="image">
								<img src="{{ asset('website') }}/images/resource/interior-1.jpg" alt="">
							</div>
						</div>
					</div>

					<!-- Content Column -->
					<div class="content-column col-lg-8 col-md-12 col-sm-12">
						<div class="inner-column">
							<h2>Why Choose Sanjeevanna & Company</h2>

							<div class="text">
								We provide reliable renovation and interior solutions using quality materials, skilled
								workmanship, and timely project execution for residential, office, and commercial spaces.
							</div>

							<div class="row clearfix">

								<!-- Interior Block -->
								<div class="interior-block col-lg-4 col-md-4 col-sm-12">
									<div class="block-inner">
										<div class="icon-box">
											<span class="icon flaticon-award-1"></span>
										</div>
										<h3>Quality Workmanship</h3>
									</div>
								</div>

								<!-- Interior Block -->
								<div class="interior-block col-lg-4 col-md-4 col-sm-12">
									<div class="block-inner">
										<div class="icon-box">
											<span class="icon flaticon-answer"></span>
										</div>
										<h3>Skilled Professionals</h3>
									</div>
								</div>

								<!-- Interior Block -->
								<div class="interior-block col-lg-4 col-md-4 col-sm-12">
									<div class="block-inner">
										<div class="icon-box">
											<span class="icon flaticon-hand"></span>
										</div>
										<h3>On-Time Delivery</h3>
									</div>
								</div>

							</div>

							<div class="bold-text">
								Transform your space with trusted renovation experts.
							</div>

							<div class="column-text">
								Contact us today for a free consultation and personalized quote.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Interior Section -->

	<!-- Counter Section -->
	<section class="counter-section style-two">
		<div class="auto-container">

			<!-- Fact Counter -->
			<div class="fact-counter">
				<div class="row clearfix">

					<!--Column-->
					<!-- Column -->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="count-outer count-box">
									<span class="count-text" data-speed="2500" data-stop="10">0</span>+
								</div>
								<h4 class="counter-title">Years of Experience</h4>
							</div>
						</div>
					</div>

					<!-- Column -->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="count-outer count-box alternate">
									<span class="count-text" data-speed="3000" data-stop="500">0</span>+
								</div>
								<h4 class="counter-title">Projects Completed</h4>
							</div>
						</div>
					</div>

					<!-- Column -->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="count-outer count-box">
									<span class="count-text" data-speed="3000" data-stop="50">0</span>+
								</div>
								<h4 class="counter-title">Skilled Professionals</h4>
							</div>
						</div>
					</div>

					<!-- Column -->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="count-outer count-box">
									<span class="count-text" data-speed="2500" data-stop="100">0</span>%
								</div>
								<h4 class="counter-title">Client Satisfaction</h4>
							</div>
						</div>
					</div>

				</div>
			</div>

		</div>
	</section>
	<!-- End Counter Section -->

	<!-- Team Section -->
	<section class="team-section style-two">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title light centered">
				<h2>Our Expert Team</h2>
				<div class="text">
					Our experienced professionals work together to deliver quality renovation and interior solutions with
					precision and excellence.
				</div>
			</div>

			<div class="clearfix">

				<!-- Team Block -->
				<div class="team-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<img src="{{ asset('website') }}/images/engni.png" alt="">
						</div>
						<div class="lower-content">
							<h3>Project Management Team</h3>
							<div class="designation">Project Planning & Execution</div>
						</div>
					</div>
				</div>

				<!-- Team Block -->
				<div class="team-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<img src="{{ asset('website') }}/images/techni.png" alt="">
						</div>
						<div class="lower-content">
							<h3>Interior & Renovation Team</h3>
							<div class="designation">Renovation & False Ceiling Experts</div>
						</div>
					</div>
				</div>

				<!-- Team Block -->
				<div class="team-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<img src="{{ asset('website') }}/images/craft.png" alt="">
						</div>
						<div class="lower-content">
							<h3>Technical Team</h3>
							<div class="designation">Electrical, Plumbing & Glass Works</div>
						</div>
					</div>
				</div>

				<!-- Team Block -->
				<div class="team-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<img src="{{ asset('website') }}/images/paint.png" alt="">
						</div>
						<div class="lower-content">
							<h3>Finishing Team</h3>
							<div class="designation">Painting & Carpentry Specialists</div>
						</div>
					</div>
				</div>

			</div>

		</div>
	</section>
	<!-- End Team Section -->

	<!-- Mission Section -->
	<section class="mission-section style-two">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Image Column -->
				<div class="image-column col-xl-3 col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image">
							<img src="{{ asset('website') }}/images/resource/mission-1.jpg" alt="">
						</div>
					</div>
				</div>

				<!-- Content Column -->
				<div class="content-column col-xl-9 col-lg-8 col-md-12 col-sm-12">
					<div class="inner-column">
						<h2>Our Company Mission</h2>

						<div class="bold-text">
							Our mission is to deliver reliable renovation and interior solutions with superior
							craftsmanship, quality materials, and complete customer satisfaction.
						</div>

						<div class="text">
							At Sanjeevanna and Company Enterprises, we are committed to transforming residential, office,
							and commercial spaces through innovative renovation solutions. From planning to project
							completion, we focus on quality, timely execution, and attention to every detail to ensure
							lasting results.
						</div>

						<h3>We specialize in complete renovation and interior services...</h3>

						<div class="row clearfix">
							<div class="column col-lg-6 col-md-6 col-sm-12">
								<ul class="list-style-two">
									<li>- POP False Ceiling Works</li>
									<li>- Residential, Office & Commercial Renovation</li>
									<li>- Electrical Works</li>
									<li>- Painting Works</li>
								</ul>
							</div>

							<div class="column col-lg-6 col-md-6 col-sm-12">
								<ul class="list-style-two">
									<li>- Glass Works</li>
									<li>- Carpentry Works</li>
									<li>- Plumbing Works</li>
									<li>- End-to-End Project Execution</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Mission Section -->

	<!-- Call To Action Section -->
	<section class="call-to-action-section" style="background-image: url({{ asset('website') }}/images/background/6-1.jpg)">
		<div class="auto-container">
			<h2>Think Renovation. Think Sanjeevanna & Company</h2>
			<div class="text">
				We transform residential, office, and commercial spaces with quality renovation, POP false ceiling,
				electrical, painting, glass, carpentry, and plumbing solutions.
			</div>
			<a href="{{ route('contact') }}"  class="theme-btn btn-style-two"><span class="txt">contact us</span></a>
		</div>
	</section>
	<!-- End Call To Action Section -->

@endsection