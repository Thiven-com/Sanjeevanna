@extends('layouts.website')
@section('content')

	<!-- Main Slider -->
	<section class="main-slider">
		<div class="slider-box">

			<!-- Banner Carousel -->
			<div class="banner-carousel owl-theme owl-carousel">

				<!-- Slide -->
				<div class="slide">
					<div class="image-layer"
						style="background-image:url({{ asset('website') }}/images/main-slider/1-1.jpg)"></div>
					<div class="auto-container">
						<div class="content">
							<h2>We transform your <br> dream spaces into reality</h2>
							<div class="text">
								Sanjeevanna and Company Enterprises delivers complete renovation and interior solutions,
								including POP false ceiling works, electrical, painting, glass, carpentry, and plumbing
								services for residential, office, and commercial spaces with superior quality and
								craftsmanship.
							</div>
							<div class="btns-box">
								<a href="#" class="theme-btn btn-style-one"><span class="txt">Know more</span></a>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="slide">
					<div class="image-layer"
						style="background-image:url({{ asset('website') }}/images/main-slider/2-1.jpg)"></div>
					<div class="auto-container">
						<div class="content">
							<h2>Quality Services for <br> Every Space</h2>
							<div class="text">
								We provide complete renovation solutions with POP false ceiling, electrical, painting,
								glass, carpentry, and plumbing services for residential, office, and commercial spaces,
								ensuring quality craftsmanship and lasting results.
							</div>
							<div class="btns-box">
								<a href="#" class="theme-btn btn-style-one"><span class="txt">Know more</span></a>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="slide">
					<div class="image-layer"
						style="background-image:url({{ asset('website') }}/images/main-slider/3-1.jpg)"></div>
					<div class="auto-container">
						<div class="content">
							<h2>Complete Interior <br> Renovation</h2>
							<div class="text">
								From structural upgrades to finishing touches, we provide end-to-end renovation services
								with expert execution and premium-quality workmanship.
							</div>
							<div class="btns-box">
								<a href="#" class="theme-btn btn-style-one"><span class="txt">Know more</span></a>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>
	</section>
	<!-- End Banner Section -->

	<!-- Services Section -->
	<section class="services-section">
		<div class="auto-container">
			<!-- Title Box -->
			<div class="title-box">
				<h2>Delivering Quality <br> Renovation Solutions.</h2>
			</div>

			<div class="row clearfix">

				<!-- Service Block -->
				<div class="service-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="#"><img src="{{ asset('website') }}/images/ren.png" alt=""></a>
						</div>
						<div class="lower-content">
							<h3><a href="#">Renovation <br> (Residential, Office & Commercial)</a></h3>
							<div class="text">
								From structural upgrades to final finishes, we deliver reliable renovation solutions
								tailored to residential, office, and commercial spaces.
							</div>
							<!-- <a href="{{ route('service') }}" class="read-more">Read more</a> -->
						</div>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="#"><img src="{{ asset('website') }}/images/electri.png" alt=""></a>
						</div>
						<div class="lower-content">
							<h3><a href="#">Electrical Solutions</a></h3>
							<div class="text">
								We provide safe, efficient, and reliable electrical installation, wiring, maintenance, and
								repair services for residential, office, and commercial spaces.
							</div>
							<!-- <a href="{{ route('service') }}" class="read-more">Read more</a> -->
						</div>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="#"><img src="{{ asset('website') }}/images/glass.png" alt=""></a>
						</div>
						<div class="lower-content">
							<h3><a href="#">Glass Installations & Partitions</a></h3>
							<div class="text">
								Enhance your space with high-quality glass partitions, doors, and installations that combine
								durability, style, and functionality.
							</div>
							<!-- <a href="{{ route('service') }}" class="read-more">Read more</a> -->
						</div>
					</div>
				</div>

			</div>

		</div>
	</section>
	<!-- End Services Section -->

	<!-- Services Section Two -->
	<section class="services-section-two">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title">
				<h2>Our Services</h2>
				<div class="text">
					We offer end-to-end renovation services, delivering quality POP false ceiling, electrical, painting,
					glass, carpentry, and plumbing solutions for residential, office, and commercial spaces.
				</div>
			</div>

			<div class="row clearfix">

				<!-- Service Block -->
				<div class="service-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="content">
							<div class="icon-box">
								<span class="icon flaticon-home"></span>
							</div>
							<h3><a href="#">Glass Works</a></h3>
							<div class="text">
								We provide high-quality glass works, including partitions, doors, windows, and custom
								installations for residential, office, and commercial spaces.
							</div>
							<!-- <a href="{{ route('service') }}" class="read-more">Read More</a> -->
						</div>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="content">
							<div class="icon-box">
								<i class="fas fa-wrench"></i>
							</div>
							<h3><a href="#">Plumbing Works</a></h3>
							<div class="text">
								Our expert plumbing solutions ensure durable, efficient, and hassle-free water systems for
								homes, offices, and commercial properties.
							</div>
							<!-- <a href="{{ route('service') }}" class="read-more">Read More</a> -->
						</div>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
						<div class="content">
							<div class="icon-box">
								<span class="icon flaticon-house-plans"></span>
							</div>
							<h3><a href="#">Carpentry Works</a></h3>
							<div class="text">
								We deliver quality carpentry services, including custom furniture, cabinets, doors, windows,
								and woodwork for residential, office.
							</div>
							<!-- <a href="{{ route('service') }}" class="read-more">Read More</a> -->
						</div>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="content">
							<div class="icon-box">
								<span class="icon flaticon-decorating"></span>
							</div>
							<h3><a href="#">Painting Works</a></h3>
							<div class="text">
								We provide professional interior and exterior painting services with premium finishes for
								residential, office, and commercial spaces.
							</div>
							<!-- <a href="{{ route('service') }}" class="read-more">Read More</a> -->
						</div>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="content">
							<div class="icon-box">
								<span class="icon flaticon-settings"></span>
							</div>
							<h3><a href="#">Electrical Works</a></h3>
							<div class="text">
								We provide safe and reliable electrical installation, wiring, maintenance, and repair
								services for residential, office, and commercial spaces.
							</div>
							<!-- <a href="{{ route('service')}}" class="read-more">Read More</a> -->
						</div>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="600ms" data-wow-duration="1500ms">
						<div class="content">
							<div class="icon-box">
								<span class="icon flaticon-interior-design"></span>
							</div>
							<h3><a href="#">POP False Ceiling Works</a></h3>
							<div class="text">
								We design and install stylish POP false ceilings that enhance the beauty, functionality, and
								ambiance of residential, office, and commercial spaces.
							</div>
							<!-- <a href="{{ route('service')}}" class="read-more">Read More</a> -->
						</div>
					</div>
				</div>

			</div>

		</div>
	</section>
	<!-- End Services Section Two -->

	<!-- Project Section -->
	<section class="project-section">
		<div class="auto-container">
			<!-- Title Box -->
			<div class="title-box">
				<h2>Our Latest Projects</h2>
			</div>
		</div>

		<div class="outer-container">

			<!--Isotope Galery-->
			<div class="sortable-masonry">

				<!--Filter-->
				<div class="filters clearfix">

					<ul class="filter-tabs filter-btns text-center clearfix">
						<li class="active filter" data-role="button" data-filter=".all">All Projects</li>
						<li class="filter" data-role="button" data-filter=".residential">Residential</li>
						<li class="filter" data-role="button" data-filter=".commercial">Commercial</li>
						<li class="filter" data-role="button" data-filter=".hospital">Hospitality</li>
						<li class="filter" data-role="button" data-filter=".office">Office</li>
					</ul>

				</div>

				<div class="items-container row clearfix">

					<!-- Gallery Item -->
					<div class="gallery-item large-block masonry-item all hospital commercial">
						<div class="inner-box">
							<figure class="image-box">
								<img src="{{ asset('website') }}/images/gallery/1-1.jpg" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="#">Modular Kitchen</a></h3>
											<a href="{{ asset('website') }}/images/gallery/1-1.jpg"
												data-fancybox="gallery-1" data-caption="" class="link"><span
													class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="#" class="link"><span
													class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>

					<!-- Gallery Item -->
					<div class="gallery-item small-block masonry-item all hospital commercial">
						<div class="inner-box">
							<figure class="image-box">
								<img src="{{ asset('website') }}/images/gallery/2-1.jpg" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="#">Modular Kitchen</a></h3>
											<a href="{{ asset('website') }}/images/gallery/2-1.jpg"
												data-fancybox="gallery-1" data-caption="" class="link"><span
													class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="#" class="link"><span
													class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>

					<!-- Gallery Item -->
					<div class="gallery-item small-block masonry-item all residential office commercial">
						<div class="inner-box">
							<figure class="image-box">
								<img src="{{ asset('website') }}/images/gallery/3-1.jpg" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="#">Modular Kitchen</a></h3>
											<a href="{{ asset('website') }}/images/gallery/3-1.jpg"
												data-fancybox="gallery-1" data-caption="" class="link"><span
													class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="#" class="link"><span
													class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>

					<!-- Gallery Item -->
					<div class="gallery-item small-block masonry-item all commercial">
						<div class="inner-box">
							<figure class="image-box">
								<img src="{{ asset('website') }}/images/gallery/4-1.jpg" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="#">Modular Kitchen</a></h3>
											<a href="{{ asset('website') }}/images/gallery/4-1.jpg"
												data-fancybox="gallery-1" data-caption="" class="link"><span
													class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="#" class="link"><span
													class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>

					<!-- Gallery Item -->
					<div class="gallery-item large-block masonry-item all hospital office residential">
						<div class="inner-box">
							<figure class="image-box">
								<img src="{{ asset('website') }}/images/gallery/7-1.jpg" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="#">Modular Kitchen</a></h3>
											<a href="{{ asset('website') }}/images/gallery/7-1.jpg"
												data-fancybox="gallery-1" data-caption="" class="link"><span
													class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="#" class="link"><span
													class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>

					<!-- Gallery Item -->
					<div class="gallery-item small-block masonry-item all residential">
						<div class="inner-box">
							<figure class="image-box">
								<img src="{{ asset('website') }}/images/gallery/5-1.jpg" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="#">Modular Kitchen</a></h3>
											<a href="{{ asset('website') }}/images/gallery/5-1.jpg"
												data-fancybox="gallery-1" data-caption="" class="link"><span
													class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="#" class="link"><span
													class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>

					<!-- Gallery Item -->
					<div class="gallery-item small-block masonry-item all hospital office">
						<div class="inner-box">
							<figure class="image-box">
								<img src="{{ asset('website') }}/images/gallery/6-1.jpg" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="#">Modular Kitchen</a></h3>
											<a href="{{ asset('website') }}/images/gallery/6-1.jpg"
												data-fancybox="gallery-1" data-caption="" class="link"><span
													class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="#" class="link"><span
													class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>

				</div>

			</div>

			<!-- More Projects -->
			<!-- <div class="more-projects">
																																																								<a href="projects-classic-1.html" class="projects">View All Projects</a>
																																																							</div> -->

		</div>
	</section>
	<!-- End Project Section -->

	<!-- Fluid Section One -->
	<section class="fluid-section-one">
		<div class="outer-container clearfix">

			<!--Content Column-->
			<div class="content-column">
				<div class="content-box">
					<h2>Complete Renovation Solutions</h2>

					<div class="text">
						We provide reliable renovation and interior solutions with quality craftsmanship, transforming
						residential, office, and commercial spaces through professional execution and lasting results.
					</div>

					<ul class="list-style-one">
						<li>POP False Ceiling Works</li>
						<li>Residential, Office & Commercial Renovation</li>
						<li>Electrical Works</li>
						<li>Painting Works</li>
						<li>Glass Works</li>
						<li>Carpentry Works</li>
						<li>Plumbing Works</li>
					</ul>

					<div class="bold-text">
						Transform your space with Sanjeevanna and Company Enterprises. <br>
						<a href="{{ route('contact') }}">Get a Free Quote</a>
					</div>
				</div>
			</div>
			<!--Image Column-->
			<div class="image-column" style="background-image: url({{ asset('website') }}/images/resource/video-img-1.jpg)">
				<div class="inner-column">
					<div class="image">
						<img src="{{ asset('website') }}/images/resource/video-img-1.jpg" alt="">
					</div>
					<!-- <a href="https://www.youtube.com/watch?v=SXZXtD60t2g" class="overlay-link lightbox-image"> -->
					<div class="icon-box">
						<span class="icon flaticon-play-button"></span>
						<i class="ripple"></i>
					</div>
					</a>
				</div>
			</div>
			<!--End Image Column-->

		</div>
	</section>

	<!-- Testimonial Section -->
	<!-- <section class="testimonial-section">
							<div class="auto-container">

								<div class="sec-title-two centered">
									<h2>What our customers says</h2>
									<div class="title-text">Thousands of people done interior</div>
								</div>

								<div class="testimonial-carousel owl-carousel owl-theme">


									<div class="testimonial-block">
										<div class="inner-box">
											<div class="content">
												<div class="image-outer">
													<div class="image">
														<img src="{{ asset('website') }}/images/resource/author-1-1.jpg" alt="">
													</div>
												</div>
												<h3>Anita Reddy</h3>
												<div class="title">Professional Team & Outstanding Results</div>
												<div class="text">
													From planning to execution, every detail was handled with care and professionalism. The
													final outcome exceeded our expectations, and our space looks elegant and modern.
												</div>
											</div>
										</div>
									</div>


									<div class="testimonial-block">
										<div class="inner-box">
											<div class="content">
												<div class="image-outer">
													<div class="image">
														<img src="{{ asset('website') }}/images/resource/author-2-1.jpg" alt="">
													</div>
												</div>
												<h3>Vikram Patel</h3>
												<div class="title">Beautiful Designs with Excellent Service</div>
												<div class="text">
													The team at Sanjeevanna and Company Enterprises understood our vision perfectly and
													delivered a stunning interior that blends style, comfort, and functionality. Highly
													recommended!
												</div>
											</div>
										</div>
									</div>


									<div class="testimonial-block">
										<div class="inner-box">
											<div class="content">
												<div class="image-outer">
													<div class="image">
														<img src="{{ asset('website') }}/images/resource/author-1-1.jpg" alt="">
													</div>
												</div>
												<h3>Priya Sharma</h3>
												<div class="title">Exceptional Interior Design & Quality Work</div>
												<div class="text">
													Sanjeevanna and Company Enterprises transformed our space with creative designs and
													outstanding craftsmanship. The team was professional, delivered on time, and exceeded our
													expectations.
												</div>
											</div>
										</div>
									</div>


									<div class="testimonial-block">
										<div class="inner-box">
											<div class="content">
												<div class="image-outer">
													<div class="image">
														<img src="{{ asset('website') }}/images/resource/author-2-1.jpg" alt="">
													</div>
												</div>
												<h3> Ramesh Kumar</h3>
												<div class="title">Our Dream Home Became a Reality</div>
												<div class="text">
													We are delighted with the beautiful interiors designed by Sanjeevanna and Company
													Enterprises. Their attention to detail, quality materials, and personalized approach made
													the entire experience seamless.
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</section> -->
	<!-- End Testimonial Section -->

	<!-- Featured Section -->
	<section class="featured-section" style="background-image: url({{ asset('website') }}/images/background/2-1.jpg)">
		<div class="auto-container">
			<!-- Title Box -->
			<div class="title-box">
				<h2>Our Work Process</h2>
			</div>

			<div class="row clearfix">

				<!-- Feature Block -->
				<div class="feature-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="icon-outer">
							<div class="icon-box">
								<span class="icon flaticon-hand-shake"></span>
							</div>
							<div class="feature-number">1</div>
						</div>
						<div class="lower-content">
							<h3><a href="#">Happy Clients</a></h3>
							<div class="text">
								Customer satisfaction is our priority, achieved through quality workmanship and dependable
								service.
							</div>
						</div>
					</div>
				</div>

				<!-- Feature Block -->
				<div class="feature-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="250ms" data-wow-duration="1500ms">
						<div class="icon-outer">
							<div class="icon-box">
								<span class="icon flaticon-answer"></span>
							</div>
							<div class="feature-number">2</div>
						</div>
						<div class="lower-content">
							<h3><a href="#">Design Planning</a></h3>
							<div class="text">
								We create practical design plans that maximize space, functionality, and aesthetics to match
								your requirements.
							</div>
						</div>
					</div>
				</div>

				<!-- Feature Block -->
				<div class="feature-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1500ms">
						<div class="icon-outer">
							<div class="icon-box">
								<span class="icon flaticon-sketch"></span>
							</div>
							<div class="feature-number">3</div>
						</div>
						<div class="lower-content">
							<h3><a href="#">Design Drafting</a></h3>
							<div class="text">
								We prepare detailed layouts and project plans to ensure smooth execution and quality results
								for every renovation project.
							</div>
						</div>
					</div>
				</div>

				<!-- Feature Block -->
				<div class="feature-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="750ms" data-wow-duration="1500ms">
						<div class="icon-outer">
							<div class="icon-box">
								<span class="icon flaticon-house-1"></span>
							</div>
							<div class="feature-number">4</div>
						</div>
						<div class="lower-content">
							<h3><a href="#">Project Execution</a></h3>
							<div class="text">
								Our experienced team executes every project with quality workmanship, timely delivery, and
								attention to every detail.
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>
	</section>
	<!-- End Featured Section -->

	<!-- News Section -->
	<!-- <section class="news-section">
			<div class="auto-container">

				<div class="sec-title">
					<h2>Get Inspired by Our Interior Design Ideas</h2>
					<div class="text">
						Discover the latest interior design trends, space-saving solutions, expert tips, and creative ideas to
						transform your home and workspace.
					</div>
				</div>

				<div class="row clearfix">

					<div class="news-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="image">
								<a href="#"><img src="{{ asset('website') }}/images/resource/news-1-1.jpg" alt=""></a>
							</div>
							<div class="lower-content">
								<ul class="post-meta">
									<li>By <span>Sanjeevanna & Company</span></li>
									<li>Modular Kitchen</li>
								</ul>
								<h3><a href="#">15 Vastu ideas for the main door emphasizes on every par
										...</a></h3>
								<a href="#" class="read-more">Read more <span class="icon flaticon-right-arrow-1"></span></a>
							</div>
						</div>
					</div>


					<div class="news-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInRight" data-wow-delay="250ms" data-wow-duration="1500ms">
							<div class="image">
								<a href="#"><img src="{{ asset('website') }}/images/resource/news-2-1.jpg" alt=""></a>
							</div>
							<div class="lower-content">
								<ul class="post-meta">
									<li>By <span>Sanjeevanna & Company</span></li>
									<li>Interior, awesome</li>
								</ul>
								<h3><a href="#">Storage ideas for the bedroom by interior designers ...</a>
								</h3>
								<a href="#" class="read-more">Read more <span class="icon flaticon-right-arrow-1"></span></a>
							</div>
						</div>
					</div>


					<div class="news-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInRight" data-wow-delay="500ms" data-wow-duration="1500ms">
							<div class="image">
								<a href="#"><img src="{{ asset('website') }}/images/resource/news-3-1.jpg" alt=""></a>
							</div>
							<div class="lower-content">
								<ul class="post-meta">
									<li>By <span>Sanjeevanna & Company</span></li>
									<li>Residential Interiors</li>
								</ul>
								<h3><a href="#">Kids bedroom design ideas by interior designers in NY</a></h3>
								<a href="#" class="read-more">Read more <span class="icon flaticon-right-arrow-1"></span></a>
							</div>
						</div>
					</div>

				</div>

			</div>
		</section> -->
	<!-- End News Section -->

	<!-- Call To Action Section -->
	<section class="call-to-action-section" style="background-image: url({{ asset('website') }}/images/background/1-1.jpg)">
		<div class="auto-container">
			<h2>Think Renovation. Think Sanjeevanna & Company</h2>
			<div class="text">
				We transform residential, office, and commercial spaces with quality renovation, POP false ceiling,
				electrical, painting, glass, carpentry, and plumbing solutions.
			</div>
			<a href="{{ route('contact') }}" class="theme-btn btn-style-two"><span class="txt">contact us</span></a>
		</div>
	</section>
	<!-- End Call To Action Section -->


@endsection