@extends('layouts.website')
@section('content')

	<!--Page Title-->
	<section class="page-title" style="background-image:url({{ asset('website') }}/images/background/5-1.jpg)">
		<div class="auto-container">
			<h2>Services</h2>
			<ul class="page-breadcrumb">
				<li><a href="{{ route('home') }}">home</a></li>
				<li>Services</li>
			</ul>
		</div>
	</section>
	<!--End Page Title-->

	<!-- Services Page Section -->
	<section class="services-page-section">
		<div class="auto-container">

			<!-- Sec Title -->
			<div class="sec-title light centered">
				<h2>Complete Renovation & Interior Solutions</h2>

				<div class="text">
					We provide high-quality renovation and interior services, including POP false ceilings, electrical,
					painting, glass, carpentry, and plumbing works for homes, offices, and commercial spaces.
				</div>
			</div>

			<div class="row clearfix">

				<!-- Service Block -->
				<div class="service-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="#"><img src="{{asset('website')}}/images/ceiling.png" alt=""></a>
						</div>
						<div class="lower-content">
							<h3><a href="#">POP False Ceiling Works</a></h3>
							<div class="text">
								We design and install durable POP false ceilings that enhance the beauty, lighting, and
								functionality of residential, office, and commercial spaces.
							</div>
							<a href="#" class="enquiry-now">Enquiry Now</a>
						</div>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="250ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="#"><img src="{{asset('website')}}/images/rocr.png" alt=""></a>
						</div>
						<div class="lower-content">
							<h3><a href="#">Residential, Office & Commercial Renovation</a></h3>
							<div class="text">
								Complete renovation solutions for residential, office, and commercial spaces with quality
								craftsmanship and on-time delivery.
							</div>
							<a href="#" class="enquiry-now">Enquiry Now</a>
						</div>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="#"><img src="{{asset('website')}}/images/elecwor.png" alt=""></a>
						</div>
						<div class="lower-content">
							<h3><a href="#">Electrical Works</a></h3>
							<div class="text">
								We provide safe and reliable electrical installation, wiring, maintenance, and repair
								services for residential, office, and commercial spaces.
							</div>
							<a href="#" class="enquiry-now">Enquiry Now</a>
						</div>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="#"><img src="{{asset('website')}}/images/paiwork.png" alt=""></a>
						</div>
						<div class="lower-content">
							<h3><a href="#">Painting Works</a></h3>
							<div class="text">
								We deliver high-quality interior and exterior painting services with premium finishes that
								enhance the beauty and durability of every space.
							</div>
							<a href="#" class="enquiry-now">Enquiry Now</a>
						</div>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="250ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="#"><img src="{{asset('website')}}/images/resource/service-12-1.jpg" alt=""></a>
						</div>
						<div class="lower-content">
							<h3><a href="#">Glass Works</a></h3>
							<div class="text">
								We provide premium glass installation solutions, including partitions, doors, windows, and
								decorative glass for residential, office, and commercial spaces.
							</div>
							<a href="#" class="enquiry-now">Enquiry Now</a>
						</div>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="#"><img src="{{asset('website')}}/images/resource/service-13-1.jpg" alt=""></a>
						</div>
						<div class="lower-content">
							<h3><a href="#">Carpentry Works</a></h3>
								<div class="text">
									We provide expert carpentry services, including custom furniture, doors, windows,
									cabinets, wardrobes, and woodwork with quality craftsmanship.
								</div>
								<a href="#" class="enquiry-now">Enquiry Now</a>
						</div>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="#"><img src="{{asset('website')}}/images/resource/service-14-1.jpg" alt=""></a>
						</div>
						<div class="lower-content">
							<h3><a href="#">Plumbing Works</a></h3>
							<div class="text">
								Professional plumbing installation, maintenance, and repair services for homes, offices, and
								commercial spaces.
							</div>
							<a href="#" class="enquiry-now">Enquiry Now</a>
						</div>
					</div>
				</div>

				<!-- Service Block -->
				<!-- <div class="service-block-three col-lg-4 col-md-6 col-sm-12">
								<div class="inner-box wow fadeInUp" data-wow-delay="250ms" data-wow-duration="1500ms">
									<div class="image">
										<a href="commercial-interior-1.html"><img
												src="{{asset('website')}}/images/resource/service-15-1.jpg" alt=""></a>
									</div>
									<div class="lower-content">
										<h3><a href="commercial-interior-1.html">False Celling Designs</a></h3>
										<div class="text">Override the digital divide with additional clickthroughs from DevOps.
											Nanotech Nology imme rsion along the information highway will close the loop.</div>
										<a href="commercial-interior-1.html" class="read-more">Read more</a>
									</div>
								</div>
							</div> -->

			</div>

		</div>
	</section>
	<!-- End Story Section -->

@endsection