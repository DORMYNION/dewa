<!doctype html>
<html lang="en-UK">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description" content="we develop the workforce for the future.">
    <meta name="author" content="DT Solutions">
    <title>Dew - developing the work-force for the future.</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/vendors.css">
    <link rel="stylesheet" href="assets/css/menu.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- MODERNIZR MENU -->
    <script src="assets/js/modernizr.js" charset="utf-8"></script>

  </head>

  <body>

    <div id="preloader">
      <div data-loader="circle-side"></div>
    </div><!-- /Preload -->

    <div id="loader_form">
      <div data-loader="circle-side-2"></div>
    </div><!-- /loader_form -->

    <nav>
      <ul class="cd-primary-nav">
        <li><a href="index.php" class="animated_link">Home</a></li>
        <li><a href="about.php" class="animated_link">About Us</a></li>
        <li><a href="contact.php" class="animated_link">Contact Us</a></li>
      </ul>
    </nav>
    <!-- /menu -->

    <div class="container-fluid full-height">
  		<div class="row row-height">
  			<div class="col-lg-6 content-left">
  				<div class="content-left-wrapper">
  					<a href="index.html" id="logo"><img src="assets/img/dew_big.png" alt="" width="100" height="50"></a>
  					<div id="social">
  						<ul>
  							<li><a href="#0"><i class="icon-facebook"></i></a></li>
  							<li><a href="#0"><i class="icon-twitter"></i></a></li>
  							<li><a href="#0"><i class="icon-google"></i></a></li>
  							<li><a href="#0"><i class="icon-linkedin"></i></a></li>
  						</ul>
  					</div>
  					<!-- /social -->
  					<div>
  						<figure><img src="assets/img/info_graphic_1.svg" alt="" class="img-fluid"></figure>
  						<h2>iTech Impact</h2>
  						<p>Registration is ongoing for a 3 month scholarship program on SEO and Front-end Web Developers Training. It is an Instructor-led and Online self-pace program.</p>
              <ul class="list_ok">
                  <li>Registration is limited to 90 participant.</li>
                  <li>It more of Homestudy and meetups(Bi-weekly).</li>
                  <li>Study materials will be provided at the begin of the training.</li>
              </ul>
  						<a href="#start" class="btn_1 rounded mobile_btn">Start Now!</a>
  					</div>
  					<div class="copy">© 2019 DEW</div>
  				</div>
  				<!-- /content-left-wrapper -->
  			</div>
  			<!-- /content-left -->

        <div class="col-lg-6 content-right" id="start">
  				<div id="wizard_container">
  					<div id="top-wizard">
  							<div id="progressbar"></div>
  						</div>
  						<!-- /top-wizard -->
  						<form id="wrapped" method="POST">
  							<input id="website" name="website" type="text" value="">
  							<!-- Leave for security protection, read docs for details -->
  							<div id="middle-wizard">
                  <div class="step">
  									<h3 class="main_question"><strong>1/4</strong>Please fill with your details</h3>
  									<div class="form-group">
  										<input type="text" name="firstname" class="form-control required" placeholder="First Name" onchange="getVals(this, 'firstname');">
  									</div>
  									<div class="form-group">
  										<input type="text" name="lastname" class="form-control required" placeholder="Last Name" onchange="getVals(this, 'lastname');">
  									</div>
  									<div class="form-group">
  										<input type="email" name="email" class="form-control required" placeholder="Your Email" onchange="getVals(this, 'email');">
  									</div>
  									<div class="form-group">
  										<input type="text" name="telephone" class="form-control" placeholder="Telephone" onchange="getVals(this, 'telephone');">
  									</div>
  									<div class="row">
  										<div class="col-3">
  											<div class="form-group">
  												<input type="text" name="age" class="form-control" placeholder="Age" onchange="getVals(this, 'age');">
  											</div>
  										</div>
  										<div class="col-9">
  											<div class="form-group radio_input">
  												<label class="container_radio">Male
  													<input type="radio" name="gender" value="Male" class="required" onchange="getVals(this, 'gender');">
  													<span class="checkmark"></span>
  												</label>
  												<label class="container_radio">Female
  													<input type="radio" name="gender" value="Female" class="required" onchange="getVals(this, 'gender');">
  													<span class="checkmark"></span>
  												</label>
  											</div>
  										</div>
  									</div>
  									<!-- /row -->
  									<div class="form-group terms">
  										<label class="container_check">Please accept our <a href="#" data-toggle="modal" data-target="#terms-txt">Terms and conditions</a>
  											<input type="checkbox" name="terms" value="Yes" class="required">
  											<span class="checkmark"></span>
  										</label>
  									</div>
  								</div>
  								<!-- /step-->
                  <div class="step">
  									<h3 class="main_question"><strong>2/4</strong>Please provide the following details</h3>
  									<div class="form-group">
                      <div class="styled-select clearfix">
                        <select name="profession" class="wide required" placeholder="Profession" onchange="getVals(this, 'profession');">
                          <option value="Student">Student</option>
                          <option value="Unemployed">Unemployed</option>
                          <option value="Software Engineer / Software Developer">Software Engineer / Software Developer</option>
                          <option value="Technology Product Manager">Technology Product Manager</option>
                          <option value="Data Scientist">Data Scientist</option>
                          <option value="Technical Team Lead">Technical Team Lead</option>
                          <option value="Solutions Architect">Solutions Architect</option>
                          <option value="Technical Sales Executive / Manager">Technical Sales Executive / Manager</option>
                          <option value="Digital Marketer">Digital Marketer</option>
                          <option value="Solutions Designer">Solutions Designer</option>
                          <option value="Product Designer">Product Designer</option>
                          <option value="Software Architect">Software Architect</option>
                          <option value="Technical Account Manager">Technical Account Manager</option>
                          <option value="Other">Other</option>
                      </select>
                      </div>
  									</div>
  									<div class="form-group">
                      <div class="styled-select clearfix">
  									    <select name="status" class="wide required" placeholder="Status" onchange="getVals(this, 'status');">
                          <option value="O Level">O Level</option>
                          <option value="OND">OND</option>
                          <option value="HND/BSc">HND/BSc</option>
                          <option value="MSc">MSc</option>
                          <option value="Higher than all">Higher than all</option>
                          <option value="Other">Other</option>
                      </select>
                      </div>
  									</div>
  									<!-- <div id="pass-info" class="clearfix"></div> -->
  								</div>
  								<!-- /step-->
                  <div class="step">
                    <h3 class="main_question"><strong>3/4</strong>How did you hear about our company?</h3>
                    <div class="form-group">
                      <label class="container_check version_2">Google Search Engine
                        <input type="checkbox" name="question_2[]" value="Google Search Engine" class="required" onchange="getVals(this, 'question_2');">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="form-group">
                      <label class="container_check version_2">A friend of mine
                        <input type="checkbox" name="question_2[]" value="A friend of mine" class="required" onchange="getVals(this, 'question_2');">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="form-group">
                      <label class="container_check version_2">Print Advertise
                        <input type="checkbox" name="question_2[]" value="Print Advertise" class="required" onchange="getVals(this, 'question_2');">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="form-group">
                      <label class="container_check version_2">Newspaper
                        <input type="checkbox" name="question_2[]" value="Newspaper" class="required" onchange="getVals(this, 'question_2');">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="form-group">
                      <label class="container_check version_2">Other
                        <input type="checkbox" name="question_2[]" value="Other" class="required" onchange="getVals(this, 'question_2');">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                  </div>
                  <!-- /step-->
  								<div class="submit step">
  									<h3 class="main_question"><strong>4/4</strong>Summary</h3>
  									<div class="summary">
  										<ul>
  											<li><strong>1</strong>
  												<h5>Personal Details</h5>
  												<ul>
  													<li><label>First Name</label>: <span id="firstname"></span></li>
  													<li><label>Last Name</label>: <span id="lastname"></span></li>
  													<li><label>Email</label>: <span id="email"></span></li>
                            <li><label>Telephone</label>: <span id="telephone"></span></li>
                            <li><label>Age</label>: <span id="age"></span></li>
  													<li><label>Gender</label>: <span id="gender"></span></li>
  												</ul>
  											</li>
  											<li><strong>2</strong>
  												<h5>Other Details</h5>
  												<ul>
  													<li><label>Profession</label>: <span id="profession"></span></li>
  													<li><label>Status</label>: <span id="status"></span></li>
  												</ul>
  											</li>
  										</ul>
  									</div>
  								</div>
  								<!-- /step-->
  							</div>
  							<!-- /middle-wizard -->
  							<div id="bottom-wizard">
  								<button type="button" name="backward" class="backward">Prev</button>
  								<button type="button" name="forward" class="forward">Next</button>
  								<button type="submit" name="process" class="submit">Submit</button>
  							</div>
  							<!-- /bottom-wizard -->
  						</form>
  					</div>
  					<!-- /Wizard container -->
  			</div>
  			<!-- /content-right-->
  		</div>
  		<!-- /row-->
  	</div>
  	<!-- /container-fluid -->

    	<div class="cd-overlay-nav">
    		<span></span>
    	</div>
    	<!-- /cd-overlay-nav -->

    	<div class="cd-overlay-content">
    		<span></span>
    	</div>
    	<!-- /cd-overlay-content -->

      <a href="#0" class="cd-nav-trigger">Menu<span class="cd-icon"></span></a>
      <!-- /menu button -->

      <!-- Modal terms -->
      <div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
              <p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
              <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
              <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn_1" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->


    	<!-- COMMON SCRIPTS -->

      <script src="assets/js/jquery-3.2.1.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>

      <script src="assets/js/common_scripts.min.js"></script>
    	<script src="assets/js/velocity.min.js"></script>
    	<script src="assets/js/functions.js"></script>

    	<!-- SPECIFIC SCRIPTS -->
    	<script src="assets/js/parallax.min.js"></script>
    	<script src="assets/js/owl-carousel.js"></script>

      <!-- Wizard script -->
      <script src="assets/js/mail.js"></script>



    </body>
    </html>
