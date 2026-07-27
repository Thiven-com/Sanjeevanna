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

		@if(session('success'))
			<div class="success-alert" style="background:#d4edda;
											color:#155724;
											border:1px solid #c3e6cb;
											padding:15px 20px;
											border-radius:8px;
											margin-bottom:20px;
											display:flex;
											justify-content:space-between;
											align-items:center;
											font-weight:600;">

				<span>✅ {{ session('success') }}</span>

				<button type="button" onclick="this.parentElement.remove();" style="background:none;
																				   border:none;
																			   font-size:22px;
																			   color:#155724;
																			   cursor:pointer;">
					&times;
				</button>
			</div>
		@endif
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
							<a href="javascript:void(0);" class="enquiry-now"
								onclick="openModal('POP False Ceiling Works')">Enquiry Now</a>
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
							<h3><a href="#">Renovation</a></h3>
							<div class="text">
								Complete renovation solutions for residential, office, and commercial spaces with quality
								craftsmanship and on-time delivery.
							</div>
							<a href="javascript:void(0);" class="enquiry-now" onclick="openModal('Renovation')">Enquiry
								Now</a>
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
							<a href="javascript:void(0);" class="enquiry-now"
								onclick="openModal('Electrical Works')">Enquiry Now</a>
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
							<a href="javascript:void(0);" class="enquiry-now" onclick="openModal('Painting Works')">Enquiry
								Now</a>
						</div>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="250ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="#"><img src="{{asset('website')}}/images/glaswo.png" alt=""></a>
						</div>
						<div class="lower-content">
							<h3><a href="#">Glass Works</a></h3>
							<div class="text">
								We provide premium glass installation solutions, including partitions, doors, windows, and
								decorative glass for residential, office, and commercial spaces.
							</div>
							<a href="javascript:void(0);" class="enquiry-now" onclick="openModal('Glass Works')">Enquiry
								Now</a>
						</div>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="#"><img src="{{asset('website')}}/images/carpwor.png" alt=""></a>
						</div>
						<div class="lower-content">
							<h3><a href="#">Carpentry Works</a></h3>
							<div class="text">
								We provide expert carpentry services, including custom furniture, doors, windows,
								cabinets, wardrobes, and woodwork with quality craftsmanship.
							</div>
							<a href="javascript:void(0);" class="enquiry-now" onclick="openModal('Carpentry Works')">Enquiry
								Now</a>
						</div>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="#"><img src="{{asset('website')}}/images/plumbwor.png" alt=""></a>
						</div>
						<div class="lower-content">
							<h3><a href="#">Plumbing Works</a></h3>
							<div class="text">
								Professional plumbing installation, maintenance, and repair services for homes, offices, and
								commercial spaces.
							</div>
							<a href="javascript:void(0);" class="enquiry-now" onclick="openModal('Plumbing Works')">Enquiry
								Now</a>

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






		<div id="myModal" class="modal">
			<div class="modal-content">

				<span class="close" onclick="closeModal()">&times;</span>
				<h2>Service Enquiry</h2>

				<h2 id="serviceName" style="
						display:inline-block;
						color:#000;
						padding:8px;
						border-radius:6px;
						font-size:18px;
						font-weight:600;
						margin:0 15px;">
					Selected Service
				</h2>

				<form action="{{ route('service.store') }}" method="POST">
					@csrf
					<input type="hidden" name="service" id="serviceInput">

					<label>Full Name <span class="text-danger">*</span></label>
					<input type="text" name="full_name" placeholder="Enquirer Full Name " required>

					<label>Phone Number <span style="color:red">*</span></label>
					<input type="tel" name="contact" placeholder="Enter your contact number" pattern="[6-9][0-9]{9}"
						maxlength="10" required oninput="this.value=this.value.replace(/[^0-9]/g,'').slice(0,10);">

					<label>Email <span style="color:red">*</span></label>
					<input type="email" name="email" placeholder="Enter your email" maxlength="100" required
						pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please enter a valid email address">





					<label>Property Name</label>
					<select name="property_type">
						<option value="">Property Type</option>
						<option>Residential</option>
						<option>Office</option>
						<option>Commercial</option>
					</select>

					<label>Preferred Visit Date<span style="color:red">*</span></label>
					<input type="date" name="preferred_date" id="preferred_date" min="{{ date('Y-m-d') }}" required>

					<label>Project Address</label>
					<textarea name="address" rows="3" placeholder="Enter your address"></textarea>

					<label>Project Requirements</label>
					<textarea name="message" rows="4" placeholder="Enter your requirements"></textarea>

					<button type="submit">Send Enquiry</button>

				</form>

			</div>
		</div>
	</section>
	<!-- End Story Section -->

	<script>
		document.getElementById('preferred_date').min = new Date().toISOString().split("T")[0];
	</script>

	<script>
		function openModal(serviceName) {

			// Open the modal
			document.getElementById("myModal").style.display = "block";

			// Set hidden input
			document.getElementById("serviceInput").value = serviceName;

			// Show selected service name at the top
			document.getElementById("serviceName").innerText = serviceName;
		}

		function closeModal() {
			document.getElementById("myModal").style.display = "none";
		}

		// Close when clicking outside the modal
		window.onclick = function (event) {
			let modal = document.getElementById("myModal");
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
	</script>


	<style>
		/* Modal Background */
		.modal {
			display: none;
			position: fixed;
			z-index: 99999;
			left: 0;
			top: 0;
			width: 100%;
			height: 100%;
			overflow-y: auto;
			background: rgba(0, 0, 0, 0.65);
			padding: 40px 15px;
		}

		/* Modal Box */
		.modal-content {
			background: #fff;
			width: 100%;
			max-width: 650px;
			margin: auto;
			padding: 35px;
			border-radius: 12px;
			position: relative;
			animation: modalZoom .35s ease;
			box-shadow: 0 15px 45px rgba(0, 0, 0, .25);
		}

		/* Animation */
		@keyframes modalZoom {
			from {
				opacity: 0;
				transform: scale(.8);
			}

			to {
				opacity: 1;
				transform: scale(1);
			}
		}

		/* Close Button */
		.close {
			position: absolute;
			top: 15px;
			right: 20px;
			font-size: 30px;
			color: #555;
			cursor: pointer;
			transition: .3s;
		}

		.close:hover {
			color: #c59d5f;
		}

		/* Heading */
		.modal-content h2 {
			text-align: center;
			margin-bottom: 25px;
			font-size: 30px;
			font-weight: 700;
			color: #222;
		}

		/* Labels */
		.modal-content label {
			display: block;
			margin-bottom: 8px;
			margin-top: 18px;
			font-weight: 600;
			color: #333;
		}

		/* Inputs */
		.modal-content input,
		.modal-content select,
		.modal-content textarea {
			width: 100%;
			height: 50px;
			border: 1px solid #ddd;
			border-radius: 8px;
			padding: 0 15px;
			font-size: 15px;
			outline: none;
			transition: .3s;
			background: #fafafa;
			box-sizing: border-box;
		}

		.modal-content select {
			white-space: normal;
			text-overflow: ellipsis;
			overflow: hidden;
		}

		.modal-content textarea {
			height: auto;
			min-height: 120px;
			padding: 13px 15px;
			resize: vertical;
		}

		.modal-content input:focus,
		.modal-content select:focus,
		.modal-content textarea:focus {
			border-color: #c59d5f;
			box-shadow: 0 0 8px rgba(197, 157, 95, .25);
			background: #fff;
		}

		/* Submit Button */
		.modal-content button {
			width: 100%;
			margin-top: 30px;
			padding: 15px;
			border: none;
			border-radius: 8px;
			background: #c59d5f;
			color: #fff;
			font-size: 17px;
			font-weight: 600;
			cursor: pointer;
			transition: .3s;
		}

		.modal-content button:hover {
			background: #a67b3d;
		}

		/* Required Star */
		.text-danger {
			color: #dc3545;
		}

		/* Mobile */
		@media(max-width:767px) {

			.modal {
				padding: 20px 10px;
			}

			.modal-content {
				padding: 25px 20px;
			}

			.modal-content h2 {
				font-size: 24px;
			}

			.close {
				top: 10px;
				right: 15px;
				font-size: 26px;
			}
		}
	</style>



@endsection