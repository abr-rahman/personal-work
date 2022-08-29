<?php
require_once "database.php";
require_once "header.php";
?>
                    
        	<!-- Begin text carousel intro section -->
			<section id="text-carousel-intro-section" class="parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/slider-bg.jpg);">
				
				<div class="container">
					<div class="caption text-center text-white" data-stellar-ratio="0.7">

						<div id="owl-intro-text" class="owl-carousel">
							<div class="item">
								<h1>We have Awesome things</h1>
								<p>Let's make the web beautiful together</p>
                                <div class="extra-space-l"></div>
								<a class="btn btn-blank" href="https://creativemarket.com/Themetorium" target="_blank" role="button">View More!</a>
							</div>
							<div class="item">
								<h1>Join with us</h1>
								<p>To the greatest Journey</p>
								<div class="extra-space-l"></div>
								<a class="btn btn-blank" href="https://creativemarket.com/Themetorium" target="_blank" role="button">View More!</a>
							</div>
							<div class="item">
								<h1><?= setup('setups', 'author_name') ?></h1>
								<p>One Page Responsive Theme</p>
								<div class="extra-space-l"></div>
								<a class="btn btn-blank" href="https://creativemarket.com/Themetorium" target="_blank" role="button">View More!</a>
							</div>
						</div>

					</div> <!-- /.caption -->
				</div> <!-- /.container -->

			</section>
			<!-- End text carousel intro section -->
                
                
                
                
            <!-- Begin about section -->
			<section id="about-section" class="page bg-style1">
                <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
                            <h2>About</h2>
                            <div class="devider"></div>
                            <p class="subtitle">little information</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->

                <!-- Begin rotate box-1 -->
                <div class="rotate-box-1-wrapper">
                    <div class="container">
                        <div class="row">

                        <?php foreach(unika_unika("about") as $single_about) : ?>

                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0">
                                    <span class="rotate-box-icon"><i class="fa <?=$single_about['icon'] ?>"></i></span>
                                    <div class="rotate-box-info">
                                        <h4><?=$single_about['head_line'] ?></h4>
                                        <p><?=$single_about['details'] ?></p>
                                    </div>
                                </a>
                            </div>
                            <?php endforeach; ?>
                            
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                </div>
                <!-- End rotate box-1 -->
                


                <div class="extra-space-l"></div>
                
                <!-- Begin page header--> 
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
                            <h4>Our Skills</h4>
                        </div>
                    </div>
                </div>
                <!-- End page header-->

                <!-- Begin Our Skills -->
                <div class="our-skills">
                	<div class="container">
                    	<div class="row">
                        <?php foreach(unika_unika("skill") as $single_skill) : ?>

                        	<div class="col-sm-6">
                                <div class="skill-bar wow slideInLeft" data-wow-delay="0.2s">
                                    <div class="progress-lebel">
                                        <h6><?=$single_skill['subject'] ?></h6>
                                    </div>
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:<?=$single_skill['pecentage'] ?>%">
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                       
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                </div>
                <!-- End Our Skill -->
          </section>
          <!-- End about section -->

              
            <!-- Begin Services -->
            <section id="services-section" class="page text-center">
                <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>Services</h2>
                            <div class="devider"></div>
                            <p class="subtitle">what we really know how</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
            
                <!-- Begin roatet box-2 -->
                <div class="rotate-box-2-wrapper">
                    <div class="container">
                        <div class="row">
                        <?php foreach(unika_unika("service") as $single_service) : ?>

                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0">
                                    <span class="rotate-box-icon"><i class="fa <?=$single_service['icon'] ?>"></i></span>
                                    <div class="rotate-box-info">
                                        <h4><?=$single_service['head_line'] ?></h4>
                                        <p><?=$single_service['details'] ?></p>
                                    </div>
                                </a>
                            </div>
                            <?php endforeach; ?>

                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                    
                    <div class="container">
                        <!-- Cta Button -->
                        <div class="extra-space-l"></div>
                        <div class="text-center">
                    		<a class="btn btn-default btn-lg-xl" href="#http://www.imransdesign.com/" target="_blank" role="button">Large Button</a>
                        </div>
                    </div> <!-- /.container -->                       
                </div>
                <!-- End rotate-box-2 -->
            </section>
            <!-- End Services -->

            <!-- Begin testimonials -->
            <section id="testimonial-section">
                <div id="testimonial-trigger" class="testimonial text-white parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/testimonial-bg.jpg);">
                    <div class="cover"></div>
                    <!-- Begin page header-->
                    <div class="page-header-wrapper">
                        <div class="container">
                            <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                                <h2>Reviews</h2>
                                <div class="devider"></div>
                                <p class="subtitle">What people say about us</p>
                            </div>
                        </div>
                    </div>
                    <!-- End page header-->
                    <div class="container">
                        <div class="testimonial-inner center-block text-center">
                            <div id="owl-testimonial" class="owl-carousel">

                            <?php foreach(unika_unika("reviews") as $single_reviews) : ?>
                                <div class="item">
                                    <blockquote>
                                        <p><?=$single_reviews['message'] ?></p>
                                        <footer><cite title="Source Title"><?=$single_reviews['name'] ?></cite></footer>
                                    </blockquote>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End testimonials -->
          
            <!-- Begin Portfolio -->
            <section id="portfolio-section" class="page bg-style1">
            	<div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portfolio">
                                <!-- Begin page header-->
                                <div class="page-header-wrapper">
                                    <div class="container">
                                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                                            <h2>Our Works</h2>
                                            <div class="devider"></div>
                                            <p class="subtitle">What we are proud of</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End page header-->
                                <div class="portfoloi_content_area" >
                                    <div class="portfolio_menu" id="filters">
                                        <ul>
                                            <li class="active_prot_menu"><a href="#porfolio_menu" data-filter="*">all</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".websites">websites</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".webDesign" >web design</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".appsDevelopment">apps development</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".GraphicDesign">graphic design</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".responsive">responsive</a></li>
                                        </ul>
                                    </div>

                                    <div class="portfolio_content">
                                        <div class="row"  id="portfolio">

                                            <?php foreach(unika_unika("work") as $single_wor) : ?>

                                            <div class="col-xs-12 col-sm-4 GraphicDesign">
                                                <div class="portfolio_single_content">
                                                    <img src="img/portfolio/<?=$single_wor['work_photo'] ?>" alt="title"/>
                                                    <div>
                                                        <a href="#"><?=$single_wor['photo_name'] ?></a>
                                                        <span><?=$single_wor['submitet'] ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End portfolio -->
                
                
                
            <!-- Begin counter up -->
            <section id="counter-section">                					
				<div id="counter-up-trigger" class="counter-up text-white parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/counter-bg.jpg);">
					<div class="cover"></div>
                    <!-- Begin page header-->
                    <div class="page-header-wrapper">
                        <div class="container">
                            <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                                <h2>Some Fun Facts</h2>
                                <div class="devider"></div>
                                <p class="subtitle">Before anyone is not told</p>
                            </div>
                        </div>
                    </div>
                    <!-- End page header-->
					<div class="container">

						<div class="row">

							<div class="fact text-center col-md-3 col-sm-6">
								<div class="fact-inner">
									<i class="fa fa-users fa-3x"></i>
                                    <div class="extra-space-l"></div>
									<span class="counter">6666</span>
									<p class="lead">Clients Worked With</p>
								</div>
							</div>

							<div class="fact text-center col-md-3 col-sm-6">
								<div class="fact-inner">
									<i class="fa fa-leaf fa-3x"></i>
                                    <div class="extra-space-l"></div>
									<span class="counter">800</span>
									<p class="lead">Completed Projects</p>
								</div>
							</div>

							<div class="fact text-center col-md-3 col-sm-6">
								<div class="fact-inner">
									<i class="fa fa-trophy fa-3x"></i>
                                    <div class="extra-space-l"></div>
									<span class="counter">55</span>
									<p class="lead">Winning Awards</p>
								</div>
							</div>

							<div class="fact last text-center col-md-3 col-sm-6">
								<div class="fact-inner">
									<i class="fa fa-coffee fa-3x"></i>
                                    <div class="extra-space-l"></div>
									<span class="counter">1100</span>
									<p class="lead">Cups of coffee drinking</p>
								</div>
							</div>

						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div>
            </section>
			<!-- End counter up -->
                
                
                
                
            <!-- Begin team-->
            <section id="team-section" class="page">
                <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>Our Team</h2>
                            <div class="devider"></div>
                            <p class="subtitle">Meat our experts</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
                <div class="container">
                    <div class="row">
                        <div class="team-items">

                        <?php foreach(unika_unika("our_team") as $single_team) : ?>
                            
                            <div class="col-md-2">
                                <div class="team-container wow bounceIn" data-wow-delay="0.2s">
                                    <div class="team-item">
                                        <div class="team-triangle">
                                            <div class="content">
                                                <img src="img/team/<?= $single_team['photo']?>" alt="title"/>
                                                <div class="team-hover text-center">
                                                    <i class="fa fa-male"></i>
                                                    <p><?= $single_team['name']?></p>
                                                </div>
                                            </div>
                                           

                                        </div>
                                    </div>
                                </div>
                             </div>
                             <?php endforeach?>
                            <div class="clearfix"></div>
                        </div>  
                    </div>
                </div>

            </section>
            <!-- End team-->
                      
            <!-- Begin partners -->
            <section id="partners-section">
                <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>Our Partners</h2>
                            <div class="devider"></div>
                            <p class="subtitle">Those who trust us</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
                <div class="container">
                    <div id="owl-partners" class="owl-carousel">
                    <?php foreach(unika_unika("partners") as $single_partners) : ?>
                        <img src="img/partners/<?= $single_partners['partners_icon']?>" alt="img">
                        <?php endforeach?>
                    </div>
                </div>
            </section>
            <!-- End partners -->
                
                
                
                
            <!-- Begin prices section -->
			<section id="prices-section" class="page">

                <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>Prices</h2>
                            <div class="devider"></div>
                            <p class="subtitle">That how much</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->

				<div class="extra-space-l"></div>

				<!-- Begin prices -->
				<div class="prices">
					<div class="container">
						<div class="row">
                        <?php foreach(unika_unika("price") as $single_price) : ?>

							<div class="price-box col-sm-6 price-box-featured col-md-3 wow flipInY" data-wow-delay="0.7s">
								<div class="panel panel-default">
									<div class="panel-heading text-center">
										<i class="fa fa-star fa-2x"></i>
										<h3><?= $single_price['basic_title']?></h3>
									</div>
									<div class="panel-body text-center">
										<p class="lead"><strong><?= $single_price['basic_price']?></strong></p>
									</div>
									<ul class="list-group text-center">
										<li class="list-group-item"><?= $single_price['basic_use']?></li>
										<li class="list-group-item"><?= $single_price['basic_project']?></li>
										<li class="list-group-item"><?= $single_price['basic_disk']?></li>
										<li class="list-group-item"><?= $single_price['basic_domain']?></li>
										<li class="list-group-item"><?= $single_price['basic_support']?></li>
									</ul>
									<div class="panel-footer text-center">
										<a class="btn btn-default" href="#">Order Now!</a>
									</div>
									<div class="price-box-ribbon"><strong>Popular</strong></div>
								</div>										
							</div>
							<?php endforeach?>
						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div>
				<!-- End prices -->
				<div class="extra-space-l"></div>
			</section>
			<!-- End prices section -->
                
                
                
                
            <!-- Begin social section -->
			<section id="social-section">
                 <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>Join Us</h2>
                            <div class="devider"></div>
                            <p class="subtitle">Follow us on social networks</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
                <div class="container">
                	<ul class="social-list">
                		<li> <a href="#" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.3s"><span class="rotate-box-icon"><i class="fa fa-facebook"></i></span></a></li>
                		<li> <a href="#" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.4s"><span class="rotate-box-icon"><i class="fa fa-twitter"></i></span></a></li>
                		<li> <a href="#" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.5s"><span class="rotate-box-icon"><i class="fa fa-google-plus"></i></span></a></li>
                		<li> <a href="#" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.6s"><span class="rotate-box-icon"><i class="fa fa-pinterest-p"></i></span></a></li>
                		<li> <a href="#" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.7s"><span class="rotate-box-icon"><i class="fa fa-tumblr"></i></span></a></li>
                		<li> <a href="#" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.8s"><span class="rotate-box-icon"><i class="fa fa-dribbble"></i></span></a></li>                      
                    </ul>
                </div>
            </section>
            <!-- End social section -->    
            <!-- Begin contact section -->
			<section id="contact-section" class="page text-white parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/map-bg.jpg);">
            <div class="cover"></div>
            
                 <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>Contacts</h2>
                            <div class="devider"></div>
                            <p class="subtitle">All to contact us</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
                
                <div class="contact wow bounceInRight" data-wow-delay="0.4s">
                    <div class="container">
                    	<div class="row">
                        
                            <div class="col-sm-6">
                                <div class="contact-info">
                                    <h4>Our Address</h4>
                                    <ul class="contact-address">
			                            <li><i class="fa fa-map-marker fa-lg"></i>&nbsp;<?= setup('setups', 'address') ?></li>
			                            <li><i class="fa fa-phone"></i>&nbsp; <?= setup('setups', 'phone_number') ?></li>
			                            <li><i class="fa fa-print"></i>&nbsp; 1 -234 -456 -7890</li>
			                            <li><i class="fa fa-envelope"></i><?= setup('setups', 'email') ?></li>
			                        </ul>
                                </div>
                            </div>
                        
                        	<div class="col-sm-6">
                                <div class="contact-form">
                                	<h4>Write to us</h4>
                                    <form role="form" action="contact_form.php" method="POST">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control input-lg" placeholder="Your Name" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control input-lg" placeholder="E-mail" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="subject" class="form-control input-lg" placeholder="Subject" required>
                                        </div>
                                        <div class="form-group">
                                            <textarea name="message" class="form-control input-lg" rows="5" placeholder="Message" required></textarea>
                                        </div>
                                        <button type="submit" class="btn wow bounceInRight" data-wow-delay="0.8s">Send</button>
                                    </form>
                                </div>	
                            </div>
                                                                                
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                </div>
            </section>
            <!-- End contact section -->
                
                

<?php
    require_once "footer.php";
    session_unset();
?>   
