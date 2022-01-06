<?php
include ('layouts/header.php');
?>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>
        <section id="home" class="hero-slider">
            <div class="container-fluid main-container">
                <div id="hero-carousel" class="carousel fade-carousel-slides slide" data-interval="3500" data-pause="false">
                    <ol class="carousel-indicators">
                        <li data-target="#hero-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#hero-carousel" data-slide-to="1"></li>
                        <li data-target="#hero-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <!-- First slide -->
                        <div class="item active">
                            <div class="homeslider-overlay">
                                <div class="info-carousel main">
                                    <h1 data-animation="animated fadeInDown" class="emphasis">Welcome to <br><span style="color:#006666">Oak Premier Bank</h1>
                                    <h2 data-animation="animated fadeInUp" class="text-light">Secure &amp; Reliable</h2>
                                    <p data-animation="animated fadeInUp" class="text-center"></p>

                                </div>
                            </div>
                        </div>
                        <!-- Second slide -->
                        <div class="item">
                            <div class="homeslider-overlay">
                                <div class="info-carousel main">
                                    <h1 data-animation="animated fadeInDown" class="emphasis"></h1>
                                    <h2 data-animation="animated fadeInUp" class="text-light">Flexible Wealth Management</h2>
                                    <p data-animation="animated fadeInUp" class="text-center">We've got the perfect offer for you!</p>
                                    <a data-animation="animated fadeInUp" class="btn btn-lg btn-colored local-scroll" href="index#about">Explore</a>
                                </div>
                            </div>
                        </div>
                        <!-- Third slide -->
                        <div class="item">
                            <div class="homeslider-overlay">
                                <div class="info-carousel main">
                                    <h1 data-animation="animated fadeInDown" class="emphasis"></h1>
                                    <h2 data-animation="animated flipInX" class="text-light">Sophisticated Technology</h2>
                                    <p data-animation="animated flipInY" class="text-center">With our state-of-the art technology, Internet banking becomes seemless</p>
                                    <a data-animation="animated fadeInUp" class="btn btn-lg btn-colored local-scroll" href="index">Explore</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Controls -->
                    <!-- <a class="left carousel-control" href="#hero-carousel" role="button" data-slide="prev">
                    <span class="ion-ios-arrow-left icon-2x"></span>
                    <span class="sr-only">Previous</span>
                                    </a>
                    <a class="right carousel-control" href="#hero-carousel" role="button" data-slide="next">
                    <span class="ion-ios-arrow-right icon-2x"></span>
                    <span class="sr-only">Next</span>
                                    </a> -->
                </div>
                <!-- carousel end -->
            </div>
        </section>
        <!-- About Our Skills -->
        <section id="about" class="p-t-b-80">
            <div class="container">
                <div>
			<h1 class="text-dark text-center"><span class="text-colored emphasis">Oak Premier Bank</span></h1>

                </div>
				<div class="row">
                        <div class="col-md-6" data-aos="fade">
                            <div class="p-t-20">
                                <h3 class="p-b-20 text-dark">About Us</h3>
                                <p class="text-dark" style="text-align:justify">Oak Premier Bank supports its clients and employees in today’s changing world and has positioned itself as a leading bank in the Switzerland and a prominent international banking institution. The region is a key hub for the Bank’s global network of 74 countries and 192,000 employees.</p>
                                <p class="text-dark" style="text-align:justify">Oak Premier Bank offers its clients a full range of services from investment and retail banking to asset management services. In the United States, the two core businesses of Oak Premier Bank mirror the Bank’s global organization: Corporate & Institutional Banking and Retail Banking & Services (comprised of Domestic Markets and International Financial Services).</p>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade">
                            <div class="video p-t-b-40">
                                <div class="embed-responsive">
                                    <img src="assets/img/homeslider/slide-2.jpg">
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
        </section>
		<section id="banking" class="p-t-b-80">
            <div class="container">
                <div>
                    <h1 class="text-dark text-center"><span class="text-colored emphasis">Banking</span></h1>
                    <p class="col-sm-12 sub-header text-dark text-center">Corporate</p>
                </div>

                <div class="row ">
                    <div class="col-sm-4 col-xs-12 m-t-b-30 card">
                        <span class="fa fa-list icon-3x text-colored col-xs-1 col-sm-1 col-md-2 col-lg-2"></span>
                        <div class="col-xs-11 col-sm-11 col-md-10 col-lg-10">
                            <h4 class="emphasis">Overview</h4>
                            <p style="text-align:justify">Backed by a global network of over 192,000 employees across 74 countries, Oak Premier Bank works with clients to provide solutions to daily banking needs, both large and small. Whether looking to expand or finance your business, access capital markets, or manage your assets and investments, Oak Premier Bank can support your business needs across the globe.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12 m-t-b-30 card">
                        <span class="fa fa-vcard icon-3x text-colored col-xs-1 col-sm-1 col-md-2 col-lg-2"></span>
                        <div class="col-xs-11 col-sm-11 col-md-10 col-lg-10">
                            <h4 class="emphasis">Corporate & Institutional Banking</h4>
                            <p style="text-align:justify">Oak Premier Bank Corporate & Institutional Banking (CIB) provides corporates, financial institutions, and institutional investors with a complete range of products and services from daily banking needs to sophisticated investment banking solutions. CIB is a globally recognized leader in many areas of expertise including corporate banking and derivatives across a variety of asset classes.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12 m-t-b-30 card">
                        <span class="fa fa-bank icon-3x text-colored col-xs-1 col-sm-1 col-md-2 col-lg-2"></span>
                        <div class="col-xs-11 col-sm-11 col-md-10 col-lg-10">
                            <h4 class="emphasis">Commercial Banking</h4>
                            <p style="text-align:justify">Coordinating with other banks we are able to provide companies the customer-focused attention of a local commercial bank and access to the breadth of products provided by one of the world’s largest and strongest financial groups.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-xs-12 m-t-b-30 card">
                        <span class="fa fa-database icon-3x text-colored col-xs-1 col-sm-1 col-md-2 col-lg-2"></span>
                        <div class="col-xs-11 col-sm-11 col-md-10 col-lg-10">
                            <h4 class="emphasis">Asset Management</h4>
                            <p style="text-align:justify">Oak Premier Bank Asset Management is a global investment manager with a significant presence in Switzerland. It offers a range of Turkish and global fixed income, equities, and alternatives strategies concentrating on select asset classes where it supplies institutionally qualified investment strategies.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12 m-t-b-30">
                        <span class="fa fa-car icon-3x text-colored col-xs-1 col-sm-1 col-md-2 col-lg-2"></span>
                        <div class="col-xs-11 col-sm-11 col-md-10 col-lg-10">
                            <h4 class="emphasis">Fleet Services</h4>
                            <p style="text-align:justify">Whatever your fleet management needs, Element Fleet Management has a comprehensive portfolio of customized fleet services to help you reduce your total cost of ownership and improve the productivity of your drivers.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12 m-t-b-30">
                        <span class="fa fa-home icon-3x text-colored col-xs-1 col-sm-1 col-md-2 col-lg-2"></span>
                        <div class="col-xs-11 col-sm-11 col-md-10 col-lg-10">
                            <h4 class="emphasis">Real Estate</h4>
                            <p style="text-align:justify">We expertly manage and maintain your real estate.</p>
                        </div>
                    </div>
                </div>
				<div>

                    <p class="col-sm-12 sub-header text-dark text-center">Individual</p>
                </div>
				<div class="row">
                    <div class="col-sm-4 col-xs-12 m-t-b-30">
                        <span class="fa fa-list icon-3x text-colored col-xs-1 col-sm-1 col-md-2 col-lg-2"></span>
                        <div class="col-xs-11 col-sm-11 col-md-10 col-lg-10">
                            <h4 class="emphasis">Overview</h4>
                            <p style="text-align:justify">With 7,300 branches and experienced wealth management professionals in locations across the world, Oak Premier Bank offers you the services you need to manage your personal finances. As an individual customer, you will benefit from local know-how and an extensive global network to support your banking needs at home and abroad.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12 m-t-b-30">
                        <span class="fa fa-users icon-3x text-colored col-xs-1 col-sm-1 col-md-2 col-lg-2"></span>
                        <div class="col-xs-11 col-sm-11 col-md-10 col-lg-10">
                            <h4 class="emphasis">Personal Banking</h4>
                            <p style="text-align:justify">In Switzerland, Oak Premier Bank offers personal banking services through our channels offer individuals a full range of services to meet everyday banking needs.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12 m-t-b-30">
                        <span class="fa fa-money icon-3x text-colored col-xs-1 col-sm-1 col-md-2 col-lg-2"></span>
                        <div class="col-xs-11 col-sm-11 col-md-10 col-lg-10">
                            <h4 class="emphasis">Wealth Management</h4>
                            <p style="text-align:justify">The Wealth Management team at our channels works with clients to address a full set of client financial needs with solutions ranging from deposit services and private mortgage banking to investment management and trust and estate services.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Progress Bars -->
        <section class="progressbars parallax parallax1" style="background:#000 url('assets/img/backgrounds/cu.jpg') 0 0 no-repeat fixed;">
            <div class="dark-overlay p-t-b-80" data-overlay-opacity="0.8">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 p-r-60">
                            <div>
                                <h1 class="text-light" data-aos="fade" data-aos-delay="0">Why <span class="text-colored">Choose</span> Us?</h1>

                            </div>
                            <hr>
                            <h3 class="text-li" data-aos="fade-left" data-aos-delay="0">
								<ul style="color:#fff">
									<li><span class="fa fa-check"></span> Flexibility</li>
									<li><span class="fa fa-check"></span> Great Coverage</li>
									<li><span class="fa fa-check"></span> Secure &amp; Convenient</li>
									<li><span class="fa fa-check"></span> State-of-the-art Technology</li>
									<li><span class="fa fa-check"></span> Great Customer Support</li>
								</ul>
							</h3>
                        </div>
                        <div class="col-md-6 progress-bar-frame-normal">
                           <h1 class="text-light" data-aos="fade" data-aos-delay="0">We <span class="text-colored">Offer</span></h1>
                        <hr>
						</div>
						<h3 class="text-li" data-aos="fade-left" data-aos-delay="0">
								<ul style="color:#fff">
									<li><span class="fa fa-check"></span> Multi Currency Accounts</li>
									<li><span class="fa fa-check"></span> Gold/Silver Accounts</li>
									<li><span class="fa fa-check"></span> Fast Action Registration</li>
									<li><span class="fa fa-check"></span> Brokerage</li>

								</ul>
							</h3>

                    </div>
                </div>
            </div>
        </section>


        <!-- Promo Section -->
        <section id="investing" class="border-top-gray p-t-b-80">
            <div class="container">
                <div class="row">
                    <h1 class="text-colored text-center emphasis">Investing</h1>
                    <p class="col-sm-12 sub-header text-center">Aid in day-to-day investment decisions</p>
                </div>
                <div class="ro promo-section1">
                    <div class="p-t-b-40" data-aos="fade-right">
                        <img class="img-responsive img-rounded" src="assets/img/backgrounds/lady.jpg" alt="Promo image">
                    </div>
                    <div class="p-t-b-40 services-text" data-aos="fade">
                        <div>
                            <span class="fa fa-users icon-3x text-colored"></span>
                            <div>
                                <h4 class="emphasis">The Management Team</h4>
                                <p>Union Trust Advisors manages its Separately Managed Accounts (SMAs) and Mutual Funds through a sub-advisory management agreement with a 150-year-old.</p>
                            </div>
                        </div>
                        <div>
                            <span class="fa fa-cubes icon-3x text-colored"></span>
                            <div>
                                <h4 class="emphasis">Investment Process</h4>
                                <p>Union Trust Advisors determines your specific strategy allocations and weighting by adhering to a structured, comprehensive review of your particular risk tolerance, experience, and several other relevant factors. </p>
                            </div>
                        </div>
                        <div>
                            <span class="fa fa-handshake-o icon-3x text-colored"></span>
                            <div>
                                <h4 class="emphasis">Complete Transparency</h4>
                                <p>Separately Managed Account holders can view their portfolios and statements at any time through the Client Portal.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call Action 2 -->
        <section class="parallax parallax2" style="background: url('assets/img/backgrounds/bg-dark3.jpg') 50% 0 no-repeat fixed;">
            <div class="dark-overlay p-t-b-80" data-overlay-opacity="0.8">
                <div class="container">
                   
					
					
					 <?php
		   if(!$user->is_logged_in()){ 
		   ?>
		    <div data-aos="fade">
                        <h1 class="text-light text-center">Don't Have <span class="text-colored emphasis">Account</span> Yet??</h1>
                        <h2 class="text-light text-center">Apply For  <span class="text-colored emphasis">Personal/Corporate</span> Account</h2>
                    </div>
                    <div class="row text-center p-t-40">
                        <a class="btn btn-lg btn-colored m-t-20 m-b-40" data-hash data-hash-offset="50" data-toggle="modal" href="#apply"><span>APPLY NOW!</span></a>
                    </div>
		   <?php
		   }
		   
		   ?>
		    <?php
		   if($user->is_logged_in()){ 
		   $session_id = 	$_SESSION['id']; 
$sql = "select * from customer where id = '$session_id'";
foreach($db->query($sql, PDO::FETCH_ASSOC) as $rws)
                 $balance= $rws['balance'];
				 $name= $rws['name'];
		   ?>
		 		    <div data-aos="fade">
                        <h1 class="text-light text-center">Hello <span class="text-colored emphasis"><?php echo $rws['name']; ?></span> </h1>
                     
                    </div>
                    <div class="row text-center p-t-40">
                        <a class="btn btn-lg btn-colored m-t-20 m-b-40" href="user"><span>Dashboard</span></a>
                    </div>
		   <?php
		   }
		   
		   ?>
					
                </div>
            </div>
        </section>

        <!-- Video Section -->
        <section class="parallax parallax3" id="services" style="background: url('assets/img/backgrounds/bg-white1.html') 50% 0 no-repeat fixed;">
            <div class="white-overlay p-t-b-80" data-overlay-opacity="0.8">
                <div class="container">
                        <h1 class="text-dark text-center"><span class="emphasis text-colored">Trading</span></h1>
                    <div>
                        <p class="col-sm-12 sub-header text-dark text-center">Equity &amp; ETF Trading</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6" data-aos="fade">
                            <div class="p-t-20">
                                <h3 class="p-b-20 text-dark">Trading Has Never Been Easier</h3>
                                <p class="text-dark">If you have ever thought of trading equities online, getting started is easier than ever with Global Trading. With Global Trading’s award-winning trading platforms, you can access more than 29 of the world’s major exchanges directly, putting over 14,500 global equities at your fingertips.</p>
                                <p class="text-dark">When it comes to your financial goals, your’re the expert. That’s why Global Trading offers the features and flexibility you need to put your trading ideas into action. Trade almost any Stock from around the world, manage risk easily and, if you think a Stock will fall, go short using Single Stock CFDs.</p>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade">
                            <div class="video p-t-b-40">
                                <div class="embed-responsive">
                                    <img src="assets/img/backgrounds/slide.jpg" class="img-responsive img-rounded">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call Action -->
        <section class="call-action p-t-b-80 bg-colored">
            <div class="container">
                <div class="row call-1">
				
                   
					
						     	   <?php
		   if(!$user->is_logged_in()){ 
		   ?>
		    <h4 class="text-left text-light">Log in to your Internet Banking account. You are in control!</h4>
                    <a class="btn btn-white btn-lg" href="login/internet-banking">LOG IN</a>
		   <?php
		   }
		   
		   ?>
		    <?php
		   if($user->is_logged_in()){ 
		   ?>
		    <h4 class="text-left text-light">Go to  your Internet Banking account. You are in control!</h4>
                    <a class="btn btn-white btn-lg" href="login/internet-banking">Dashboard</a>
		   <?php
		   }
		   
		   ?>
                </div>
            </div>
        </section>


        <!-- Testimonials -->
        <section class="parallax parallax4" style="background: url('assets/img/backgrounds/bg-dark2.jpg') 50% 0 no-repeat fixed;">
            <div class="dark-overlay p-t-b-40" data-overlay-opacity="0.75">
                <div>
                    <h1 class="text-light text-center" data-aos="fade" data-aos-delay="0">Our <span class="text-colored emphasis">Expertise</span> Speaks</h1>
                    <h2 class="text-light text-center" data-aos="fade" data-aos-delay="150">ABOUT US!</h2>
                </div>
                <div class="container">
                    <div id="testimonials" class="row carousel slide" data-interval="3500" data-pause="false">
                        <div class="carousel-inner" role="listbox">
                            <div class="item p-b-10 active">
                                <div class="text-light text-center">
                                    <p class="text-light p-t-10" data-animation="animated fadeInUp">I do not worry about transferring funds to and from any currency
                                        <br>Thank you so much for your help.</p>
                                    <img class="img-responsive clients" src="assets/img/testimonials/user1.jpg" alt="testimonial-client">
                                    <h4 class="text-light p-t-10" data-animation="animated fadeInUp">Heather Josephine</h4>
                                    <p class="text-light" data-animation="animated fadeInUp">Student</p>
                                </div>
                            </div>
                            <div class="item p-b-10">
                                <div class="text-light text-center">
                                    <p class="text-light p-t-10" data-animation="animated fadeInUp">The Internet Banking system is so friendly.
                                        <br>Very outstanding!</p>
                                    <img class="img-responsive clients" src="assets/img/testimonials/user2.jpg" alt="testimonial-client">
                                    <h4 class="text-light p-t-10" data-animation="animated fadeInUp">Greg Peters</h4>
                                    <p class="text-light" data-animation="animated fadeInUp">Entreprenuer</p>
                                </div>
                            </div>
                            <div class="item p-b-10">
                                <div class="text-light text-center">
                                    <p class="text-light p-t-10" data-animation="animated fadeInUp">We can undertake heavy transactions without the fear of outrageous cost.
                                        <br>Thanks to Union Trust.</p>
                                    <img class="img-responsive clients" src="assets/img/testimonials/user3.jpg" alt="testimonial-client">
                                    <h4 class="text-light p-t-10" data-animation="animated fadeInUp">Sandra Carter</h4>
                                    <p class="text-light" data-animation="animated fadeInUp">Secretary, Gredge Oil</p>
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="index.html#testimonials" role="button" data-slide="prev">
                                <span class="svg-arrow-left" aria-hidden="true">
                                <span class="ion-ios-arrow-thin-left icon-2x"></span>
                                </span>
                                <span class="sr-only">Previous</span>
                            </a>
                        <a class="right carousel-control" href="index.html#testimonials" role="button" data-slide="next">
                                <span class="svg-arrow-right" aria-hidden="true">
                                <span class="ion-ios-arrow-thin-right icon-2x"></span>
                                </span>
                                <span class="sr-only">Next</span>
                            </a>
                        <ol class="carousel-indicators testimonials-indicators">
                            <li data-target="#testimonials" data-slide-to="0" class="active"></li>
                            <li data-target="#testimonials" data-slide-to="1"></li>
                            <li data-target="#testimonials" data-slide-to="2"></li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Info -->
        <section class="p-t-b-80 bg-colored"  id="contact-field">
            <div class="container">
                <div>
                    <h2 class="text-light text-center"><span class="fa fa-phone"> </span><span class="emphasis"> +319700503174</span></h2>
                    <h2 class="text-light text-center"><span class="fa fa-envelope-o"> </span> <a href="mailto:info@oakpremierbank.com?subject=Message" class="__cf_email__" >info@</a><span class="emphasis">oakpremierbank.com</span></h2>
                    <h3 class="text-light text-center"><span class="fa fa-home"> </span> Talstrasse 59. 8001 Zurich. Switzerland</h3>
                </div>
            </div>
        </section>

        <!-- Map 
        <section class="maps" id="maps">
            <h1 class="hide_me">Map</h1>
            <div id="map-container" data-address="No:37 D:12 Karaköy, İSTANBUL, Switzerland" data-info="<span>Oak Premier Bank</span> <br>Şair Ziya Paşa Cad. Akgün iş hanı No:37 D:12 Karaköy, İSTANBUL, Switzerland. 34524" data-zoom="12" data-draggable="false"></div>
        </section>
-->
    <?php
	include ('layouts/footer.php');
	?>
		<!-- Modal Start -->
	<div class="modal fade" id="apply" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
	  <form id="register" method="POST" enctype="multipart/form-data">
        <div class="modal-header" style="background-color:#006666">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><img src="assets/img/logo.png" height="40px" width="45px"> <b> Apply For An Account</b></h4>
        </div>
        <div class="modal-body">
          <p>Please, provide your details correctly.</p>
		  <div class="container-fluid">
		  <div class="row">
			<div class="col-md-6">
			<div class="form-group">
				<label>First Name</label>
				<input type="text" class="form-control" name="fname" placeholder="eg. Wilson" required>
			</div>
			</div>
			<div class="col-md-6">
			<div class="form-group">
				<label>Surname</label>
				<input type="text" class="form-control" name="lname" placeholder="eg. Doe" required>
			</div>
		    </div>
		    </div>
			<div class="row">
			<div class="col-md-6">
			<div class="form-group">
				<label>Other Names</label>
				<input type="text" class="form-control" name="other_name" placeholder="eg. Jon" required>
			</div>
			</div>
			<div class="col-md-6">
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" name="email" placeholder="eg. jon@example.com" required>
			</div>
		    </div>
		    </div>
			<div class="row">
			<div class="col-md-6">
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" min-length="8" name="password" placeholder="eg. minimum of 8 characters" required>
			</div>
			</div>
			<div class="col-md-6">
			<div class="form-group">
				<label>Account Type</label>
				<select type="text" class="form-control" name="account" required>
					<option class="form-control" value="Savings">Savings</option>
					<option class="form-control" value="Current">Current</option>
					<option class="form-control" value="Checking">Checking</option>
				</select>
			</div>
		    </div>
		    </div>
			<div class="row">
			<div class="col-md-6">
			<div class="form-group">
				<label>Phone</label>
				<input type="number" class="form-control" name="mobile" placeholder="eg. +1 917 663 6666" required>
			</div>
			</div>
			<div class="col-md-6">
			<div class="form-group">
				<label>Gender</label>
				<select type="text" class="form-control" name="gender" required>
					<option class="form-control" value="Male">Male</option>
					<option class="form-control" value="Female">Female</option>
					<option class="form-control" value="Widowed">Other</option>
				</select>
			</div>
		    </div>
		    </div>
			<div class="row">
			<div class="col-md-6">
			<div class="form-group">
				<label>Date of Birth</label>
				<input type="text" class="form-control" name="dob" placeholder="eg. 20/05/1981" required>
			</div>
			</div>
			<div class="col-md-6">
			<div class="form-group">
				<label>Address</label>
				<textarea class="form-control" name="address" placeholder="eg. 2334 Bronxville, NY, United States of America" required></textarea>
			</div>
		    </div>
		    </div>
			<div class="row">
			<div class="col-md-6">
			<div class="form-group">
				<label>Occupation</label>
				<input type="text" class="form-control" name="work" placeholder="eg. Teacher"  required/>
			</div>
			</div>
			<div class="col-md-6">
			<div class="form-group">
				<label>Marital Status</label>
				<select type="text" class="form-control" name="marry" required>
					<option class="form-control" value="Single">Single</option>
					<option class="form-control" value="Married">Married</option>
					<option class="form-control" value="Widowed">Widowed</option>
					<option class="form-control" value="Divorced">Divorced</option>
				</select>
			</div>
		    </div>
		    </div>
			<div class="row">
			<div class="col-md-6">
			<div class="form-group">
				<label>Account Currency</label>
				<select type="text" class="form-control" name="currency" required>
					<option class="form-control" value="₺">Lira (TRY)</option>
					<option class="form-control" value="$">Dollar (US)</option>
					<option class="form-control" value="£">Pounds</option>
					<option class="form-control" value="€">Euro</option>
				</select>
			</div>
			</div>
			<div class="col-md-6">
			<div class="form-group">
				<label>Upload Photo(Passport)</label>
				<input type="file" class="form-control" name="image"  required/>
			</div>
		    </div>
		    </div>


        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-inverse" data-dismiss="modal">Close</button>
		  
          <button type="submit" class="btn btn-success" name="sign-up"><span id="textw"> Apply </span>
		 <span id="imgw" style="display:none;"> <img src="assets/img/loading.gif" style="width:15px; height:15px"> </span></button>
		  
        </div>
	</form>
	<aside id="show-register">
</aside>
      </div>
    </div>
  </div>
  
 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
   <script type="text/javascript">
$(document).ready(function() {	
	// submit form using $.ajax() method
	$('#register').submit(function(e){
		e.preventDefault(); // Prevent Default Submission
		 $('#textw').hide();
		 $('#imgw').show();
		 $('#text2w').show();
		 var formData = new FormData($(this)[0]);
		$.ajax({
			url: 'auth/register',
				type: 'POST',
			data: formData,
			cache: false,
        contentType: false,
        processData: false
		})
		.done(function(data){
			$('#show-register').fadeOut('slow', function(){
				$('#show-register').fadeIn('slow').html(data);
				 $('#imgw').hide();
				 $('#textw').show();
			});
			if (data  == 1){
			    
           swal({
 title: "Success",
  text: "Registration Successfull, Please check your Email.",
  type: "success",
  confirmButtonText: "click to homepage"
},
function(isConfirm){
  if (isConfirm) {
   window.location.href = "https://oakpremierbank.com/";
  }
});
            return false;
            }
		})
		.fail(function(){
			alert('Registering not Available, please contact Bank.');	
		});
	});
});
</script>
  <!-- Modal End -->
    </div>
    <script src="assets/js/plugins.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;key=AIzaSyAC0h0f0HXUzD3JGdO0SOEyJl22aNxAm1g"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
