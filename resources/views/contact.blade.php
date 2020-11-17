@extends('templates.index')
@section('main')
<!--/main-->
	<section class="main-content-w3layouts-agileits">

		<h3 class="tittle">Contact Us</h3>
		<p class="sub text-center">We love to discuss your idea</p>
		<div class="contact-map inner-sec">

			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783"
			    class="map" style="border:0; width: 100%" allowfullscreen=""></iframe>
		</div>
		<div class="ad-inf-sec bg-light">
			<div class="container">
				<div class="address row">

					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-md-4 address-left text-center">
								<i class="far fa-map"></i>
							</div>
							<div class="col-md-8 address-right text-left">
								<h6>Address</h6>
								<p> California, USA

								</p>
							</div>
						</div>

					</div>
					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-md-4 address-left text-center">
								<i class="far fa-envelope"></i>
							</div>
							<div class="col-md-8 address-right text-left">
								<h6>Email</h6>
								<p>Email :
									<a href="mailto:example@email.com"> mail@example.com</a>

								</p>
							</div>

						</div>
					</div>
					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-md-4 address-left text-center">
								<i class="fas fa-mobile-alt"></i>
							</div>
							<div class="col-md-8 address-right text-left">
								<h6>Phone</h6>
								<p>+1 234 567 8901</p>

							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="contact_grid_right">
				<form action="#" method="post">
					<div class="row contact_left_grid">
						<div class="col-md-6 con-left">
							<div class="form-group">
								<label for="validationCustom01 my-2">Name</label>
								<input class="form-control" type="text" name="Name" placeholder="" required="">
							</div>
							<div class="form-group">
								<label for="exampleFormControlInput1">Email</label>
								<input class="form-control" type="email" name="Email" placeholder="" required="">
							</div>
							<div class="form-group">
								<label for="validationCustom03 my-2">Subject</label>
								<input class="form-control" type="text" name="Subject" placeholder="" required="">
							</div>
						</div>
						<div class="col-md-6 con-right">
							<div class="form-group">
								<label for="textarea">Message</label>
								<textarea id="textarea" placeholder=""></textarea>
							</div>
							<input class="form-control" type="submit" value="Submit">

						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
	<!--//main-->
	<!--footer-->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 footer-grid-agileits-w3ls text-left">
					<h3>About US</h3>
					<p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. lacinia eget consectetur sed, convallis at tellus..</p>
					<div class="read">
						<a href="single.html" class="btn btn-primary read-m">Read More</a>
					</div>
				</div>
				<div class="col-lg-4 footer-grid-agileits-w3ls text-left">

					<div class="tech-btm">
						<h3>Latest Posts</h3>
						<div class="blog-grids row mb-3">
							<div class="col-md-5 blog-grid-left">
								<a href="single.html">
									<img src="images/4.jpg" class="img-fluid" alt="">
								</a>
							</div>
							<div class="col-md-7 blog-grid-right">

								<h5>
									<a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
								</h5>
								<div class="sub-meta">
									<span>
										<i class="far fa-clock"></i> 20 Jan, 2018</span>
								</div>
							</div>

						</div>
						<div class="blog-grids row mb-3">
							<div class="col-md-5 blog-grid-left">
								<a href="single.html">
									<img src="images/5.jpg" class="img-fluid" alt="">
								</a>
							</div>
							<div class="col-md-7 blog-grid-right">

								<h5>
									<a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
								</h5>
								<div class="sub-meta">
									<span>
										<i class="far fa-clock"></i> 20 Jan, 2018</span>
								</div>
							</div>

						</div>
						<div class="blog-grids row mb-3">
							<div class="col-md-5 blog-grid-left">
								<a href="single.html">
									<img src="images/6.jpg" class="img-fluid" alt="">
								</a>
							</div>
							<div class="col-md-7 blog-grid-right">

								<h5>
									<a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
								</h5>
								<div class="sub-meta">
									<span>
										<i class="far fa-clock"></i> 20 Jan, 2018</span>
								</div>
							</div>

						</div>
					</div>
				</div>
				<!-- subscribe -->
				<div class="col-lg-4 subscribe-main footer-grid-agileits-w3ls text-left">
					<h2>Signup to our newsletter</h2>
					<div class="subscribe-main text-left">
						<div class="subscribe-form">
							<form action="#" method="post" class="subscribe_form">
								<input class="form-control" type="email" placeholder="Enter your email..." required="">
								<button type="submit" class="btn btn-primary submit">Submit</button>
							</form>
							<div class="clearfix"> </div>
						</div>
						<p>We respect your privacy.No spam ever!</p>
					</div>
					<!-- //subscribe -->
				</div>
			</div>
			<!-- footer -->
			<div class="footer-cpy text-center">
				<div class="footer-social">
					<div class="copyrighttop">
						<ul>
							<li class="mx-3">
								<a class="facebook" href="#">
									<i class="fab fa-facebook-f"></i>
									<span>Facebook</span>
								</a>
							</li>
							<li>
								<a class="facebook" href="#">
									<i class="fab fa-twitter"></i>
									<span>Twitter</span>
								</a>
							</li>
							<li class="mx-3">
								<a class="facebook" href="#">
									<i class="fab fa-google-plus-g"></i>
									<span>Google+</span>
								</a>
							</li>
							<li>
								<a class="facebook" href="#">
									<i class="fab fa-pinterest-p"></i>
									<span>Pinterest</span>
								</a>
							</li>
						</ul>

					</div>
				</div>
				<div class="w3layouts-agile-copyrightbottom">
					<p>© 2018 Weblog. All Rights Reserved | Design by
						<a href="http://w3layouts.com/">W3layouts</a>
					</p>

				</div>
			</div>

			<!-- //footer -->


		</div>
	</footer>
	<!---->
	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //js -->
	<!--/ start-smoth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!--// end-smoth-scrolling -->

	<script>
		$(document).ready(function () {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear'
							 		};
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
@endsection
