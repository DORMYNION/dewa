<?php include('part/header.php'); ?>

	<main id="general_page">
		<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19864.623539539858!2d-0.1407216728393208!3d51.51178603603532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604cb878e81b3%3A0x91f10fa364452046!2sCovent+Garden%2C+Londra+WC2E+8BG%2C+Regno+Unito!5e0!3m2!1sit!2ses!4v1538380105649" width="600" height="450" allowfullscreen id="map_iframe"></iframe> -->
		<!-- end map-->
		<div class="container margin_60_35">
			<div class="row">
        <div class="col-lg-2">
        </div>
				<div class="col-lg-8">
					<h3>Contact us</h3>
					<p>
						For inquries, support, sponsorship.
					</p>
					<div>
						<div id="message-contact"></div>
						<form method="post" action="part/contact.php" id="contactform">
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label>First name</label>
										<input type="text" class="form-control" id="name_contact" name="name_contact" placeholder="firstname">
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label>Last name</label>
										<input type="text" class="form-control" id="lastname_contact" name="lastname_contact" placeholder="lastname">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label>Email</label>
										<input type="email" id="email_contact" name="email_contact" class="form-control" placeholder="youremail@email.com">
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label>Phone number</label>
										<input type="text" id="phone_contact" name="phone_contact" class="form-control" placeholder="000 00000000">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Your message</label>
										<textarea rows="5" id="message_contact" name="message_contact" class="form-control" style="height:100px;" placeholder="Your Message Here"></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Are you human? 3 + 1 =</label>
										<input type="text" id="verify_contact" class=" form-control" placeholder=" 3 + 1 =">
									</div>
									<p><input type="submit" value="Submit" class="btn_1 add_bottom_15" id="submit-contact"></p>
								</div>
							</div>
						</form>
					</div>
				</div>
				<!-- End col lg 9 --
				<aside class="col-lg-4">
					<div class="box_style_2">
						<h4>Contacts info</h4>
						<p>
							11 Fifth Ave - New York, US
							<br> +234 (0) 805 919 7797
							<br>
							<a href="#">info@dew.com.ng/a>
						</p>
						<h5>Get directions</h5>
						<form action="http://maps.google.com/maps" method="get" target="_blank">
							<div class="form-group">
								<input type="text" name="saddr" placeholder="Enter your location" class="form-control" style="background:none;">
								<input type="hidden" name="daddr" value="New York, NY 11430">
								<!-- Write here your end point --
							</div>
							<input type="submit" value="Get directions" class="btn_1 add_bottom_15">
						</form>
						<hr class="styled">
						<h4>Departmens</h4>
						<ul class="contacts_info">
							<li>Administration
								<br>
								<a href="tel://003823932342">0038 23932342</a>
								<br><a href="tel://003823932342">admin@Wilio.com</a>
								<br>
								<small>Monday to Friday 9am - 7pm</small>
							</li>
							<li>General questions
								<br>
								<a href="tel://003823932342">0038 23932342</a>
								<br><a href="tel://003823932342">questions@Wilio.com</a>
								<br>
								<small>Monday to Friday 9am - 7pm</small>
							</li>
						</ul>
					</div>
				</aside>
				<!--End aside -->
			</div>
			<!-- end row-->
		</div>
		<!-- end container-->
	</main>

<?php include('part/footer.php'); ?>
