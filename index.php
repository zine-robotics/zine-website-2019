<?php
	include('header.php')
?>
    <body class="no-loader">
		<style>
			.list-inline li {
    padding-bottom: 0.5em;
  }
             .social-icons .fa {
      font-size: 1.8em;
  }
  /*Change icons circle size and color here*/
  .social-icons .fa {
      width: 50px;
      height: 50px;
      line-height: 50px;
      text-align: center;
      color: #FFF;
      color: rgba(255, 255, 255, 0.8);
      -webkit-transition: all 0.3s ease-in-out;
      -moz-transition: all 0.3s ease-in-out;
      -ms-transition: all 0.3s ease-in-out;
      -o-transition: all 0.3s ease-in-out;
      transition: all 0.3s ease-in-out;
  }
  
  .social-icons.icon-circle .fa{ 
      border-radius: 50%;
  }
  .social-icons.icon-rounded .fa{
      border-radius:5px;
  }
  .social-icons.icon-flat .fa{
      border-radius: 0;
  }
  
  .social-icons .fa:hover, .social-icons .fa:active {
      color: #FFF;
      -webkit-box-shadow: 1px 1px 3px #333;
      -moz-box-shadow: 1px 1px 3px #333;
      box-shadow: 1px 1px 3px #333; 
  }
  .social-icons.icon-zoom .fa:hover, .social-icons.icon-zoom .fa:active { 
       -webkit-transform: scale(1.1);
      -moz-transform: scale(1.1);
      -ms-transform: scale(1.1);
      -o-transform: scale(1.1);
      transform: scale(1.1); 
  }
  .social-icons.icon-rotate .fa:hover, .social-icons.icon-rotate .fa:active { 
      -webkit-transform: scale(1.1) rotate(360deg);
      -moz-transform: scale(1.1) rotate(360deg);
      -ms-transform: scale(1.1) rotate(360deg);
      -o-transform: scale(1.1) rotate(360deg);
      transform: scale(1.1) rotate(360deg);
  }
   
  .social-icons .fa-adn{background-color:#504e54;} 
  .social-icons .fa-apple{background-color:#aeb5c5;} 
  .social-icons .fa-android{background-color:#A5C63B;}  
  .social-icons .fa-bitbucket,.social-icons .fa-bitbucket-square{background-color:#003366;} 
  .social-icons .fa-bitcoin,.social-icons .fa-btc{background-color:#F7931A;} 
  .social-icons .fa-css3{background-color:#1572B7;} 
  .social-icons .fa-dribbble{background-color:#F46899;}  
  .social-icons .fa-dropbox{background-color:#018BD3;}
  .social-icons .fa-facebook,.social-icons .fa-facebook-square{background-color:#3C599F;}  
  .social-icons .fa-flickr{background-color:#FF0084;}
  .social-icons .fa-foursquare{background-color:#0086BE;}
  .social-icons .fa-github,.social-icons .fa-github-alt,.social-icons .fa-github-square{background-color:#070709;} 
  .social-icons .fa-google-plus,.social-icons .fa-google-plus-square{background-color:#CF3D2E;} 
  .social-icons .fa-html5{background-color:#E54D26;}
  .social-icons .fa-instagram{background-color:#A1755C;}
  .social-icons .fa-linkedin,.social-icons .fa-linkedin-square{background-color:#0085AE;} 
  .social-icons .fa-linux{background-color:#FBC002;color:#333;}
  .social-icons .fa-maxcdn{background-color:#F6AE1C;}
  .social-icons .fa-pagelines{background-color:#241E20;color:#3984EA;}
  .social-icons .fa-pinterest,.social-icons .fa-pinterest-square{background-color:#CC2127;} 
  .social-icons .fa-renren{background-color:#025DAC;}
  .social-icons .fa-skype{background-color:#01AEF2;}
  .social-icons .fa-stack-exchange{background-color:#245590;}
  .social-icons .fa-stack-overflow{background-color:#FF7300;}
  .social-icons .fa-trello{background-color:#265A7F;}
  .social-icons .fa-tumblr,.social-icons .fa-tumblr-square{background-color:#314E6C;} 
  .social-icons .fa-twitter,.social-icons .fa-twitter-square{background-color:#32CCFE;} 
  .social-icons .fa-vimeo-square{background-color:#229ACC;}
  .social-icons .fa-vk{background-color:#375474;}
  .social-icons .fa-weibo{background-color:#D72B2B;}
  .social-icons .fa-windows{background-color:#12B6F3;}
  .social-icons .fa-xing,.social-icons .fa-xing-square{background-color:#00555C;} 
  .social-icons .fa-youtube,.social-icons .fa-youtube-play,.social-icons .fa-youtube-square{background-color:#C52F30;}
  
		</style>  
    	<div class="loader">
    		<div class="strip-holder">
				<div class="strip-1"></div>
				<div class="strip-2"></div>
				<div class="strip-3"></div>
    		</div>
    	</div>

    	<a id="top"></a>

		<div class="nav-container">

				<nav class="overlay-nav">
					<div class="container">
						<div class="row">
							<div class="col-md-2">
								<a  target="_blank" class="inner-link" href="index.php"><img alt="ZINE" class="logo logo-light" src="img/ZINE/zine1.png">
								<img alt="ZINE" class="logo logo-dark" src="img/ZINE/zine1.png"></a>
							</div>

							<div class="col-md-10 text-right">
								<ul class="menu">
                                    <li><a target="_blank" href="index.php">Home</a></li>
									<li><a target="_blank" href="team.php">Team</a></li>
									<li><a target="_blank" href="project/Projects.php">Projects</a></li>
									<li><a target="_blank" href="achievements.php">Achievements</a></li>
                                    <li><a target="_blank" href="about.php">About</a></li>	
									<li class="social-link hidden-md hidden-sm hidden-xs"><a target="_blank" href="https://www.facebook.com/ROBOTICS.ZINE"><i class="icon social_facebook"></i></a></li>
      								<li class="social-link hidden-md hidden-sm hidden-xs"><a target="_blank" href="https://www.instagram.com/zine.robotics"><i class="icon social_instagram"></i></a></li>
                                    		<li class="social-link hidden-md hidden-sm hidden-xs"><a target="_blank" href="https://www.linkedin.com/company/de-zine-limited"><i class="icon social_linkedin"></i></a></li>
								    
								    <div class="mobile-menu-toggle"><i class="icon icon_menu"></i></div>
								</ul>
							</div>
						</div>
					</div>
					
					<div class="bottom-border"></div>
				</nav>
        </div>

		<div class="main-container">
			<section class="hero-slider lazy-section">
				<ul class="slides">
					<li class="hero-slide">
						<div class="background-image-holder parallax-background">
							<img class="background-image" alt="Background Image" data-src="img/ZINE/slider5.jpg">
						</div>
						<div class="container">
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<h1 class="large-h1 text-white">Where Imagination Leads to Creation</h1>
								</div>
							</div>
						</div>
					</li>

					<li class="hero-slide">
						<div class="background-image-holder parallax-background">
							<img class="background-image" alt="Background Image" data-src="img/ZINE/slider3.jpeg">
						</div>

						<div class="container">   
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<h1 class="large-h1 text-white">Conducts Robotics Workshop annually</h1>
									<a href="register2k18/index.php" class="btn" style="background: None; border: 2px solid #fff;" target="_blank">Register</a>
								</div>

							</div>
						</div>
					</li>

					<li class="hero-slide">
						<div class="background-image-holder parallax-background">
							<img class="background-image" alt="Background Image" data-src="img/ZINE/events.png">
						</div>
						<div class="container">
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<h1 class="large-h1 text-white">Participates in various national and international events </h1>
									<a href="achievements.php" class="btn additional" style="background: None; border: 2px solid #fff" target="_blank">Achievements</a>
								</div>
							</div>
						</div>
					</li><li class="hero-slide">
						<div class="background-image-holder parallax-background">
							<img class="background-image" alt="Background Image" data-src="img/ZINE/slider4.jpg">
						</div>
						<div class="container">
							<div class="row">
								<div class="col-sm-6 col-md-7">
									<h1 class="large-h1 text-white">Works on various research problems and innovative projects</h1>
									<a href="projects.php" class="btn" target="_blank" style="background: None; border: 2px solid #fff">Projects</a>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</section>
            
            		<section class="section">
                        <div class="background-image-holder parallax-background">
				<img class="background-image" alt="Background Image" data-src="img/ZINE/hero7.jpg">
			</div>
                        <div class="container">
						<div class="row">
							<div class="col-sm-12 text-center">
								<h1 class="large-h1">About ZINE</h1>
                            </div>
                                <div class="col-sm-12">
                                    <div class="info-box">
                                    </div>
                                    <p style="justify-content: center;font-size:16px;">Zine is a creative group of engineering undergraduates of Malaviya National Institute of Technology, Jaipur who are together to learn, improve and apply their technical skills to help foster the growth of society and India in the field of technology by utilising their engineering skills to work on real time problems. It is comprised of students from various disciplines working under guidance of Dr. Rajesh Kumar from Electrical Engineering department and various alumni working in reputed firms and doing research in Universities in India and abroad. Zine has been the only active robotics and research group of MNIT for the last 11 years, since its foundation. 
                                </p>
                                </div>
                            </div>
						</div>
				</section>
            <a id="activities" class="in-page-link"></a>
			<section class="duplicatable-content visitor-info lazy-section">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 text-center">
								<h1 class="large-h1">ZINE Activities</h1>
								<br>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-sm-6">
								<div class="info-box">
									<img alt="Venue" data-src="img/ZINE/compet.jpg">
									<h3>Participates in Various Competitions</h3>
									<p>Our team has participated and emerged victorious in various national and international robotics events for the past decade owing to the skills and commitment of our members. We firmly believe that having participated in various national and international level events has lended us valuable experience and a knack for victory competing alongside the most premiere robotics teams of India.</p>
                                    <div><br></div><div><br></div>
                                    <div class="text-link">
									<a href="achievements.php" target="_blank">Find Out About Achievements</a>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<div class="info-box">
									<img alt="Venue" data-src="img/ZINE/gallery/research.jpg">
									<h3>Reseach and Development<br></h3>
									<p> Our research falls in many domains including Artifical Intelligence, Controls and System, Gait Analysis, Human Robot Interaction, Algorithm Development and many more. Spanning all domains, ZINE Robotics has 9 patents and multiple papers in reputed IEEE Journals. ZINE has also collaborated with several hospitals for research and development.</p><br><div><br></div><div><br></div>
									<div class="text-link">
									<a href="projects.php" target="_blank">Find Out About our projects</a>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<div class="info-box">
									<img alt="Venue" data-src="img/ZINE/workshop.jpg">
									<h3>Workshop<br></h3>
                                    <div><p>Our team conducts a 9 day workshop that guides the incoming freshers into the field of robotics, along with lectures on various other engineering skills such as Android app development, Website Development, Ethical hacking and many basic lectures which are required to enhance your skills in Robotics. Every year our team had successfully delivered the impactful lectures and practicals to more than 300 freshers.</p><div><br></div><div><br></div>
									<div class="text-link">
										<a href="register2k18/index.php" target="_blank">Register for Workshop 2019</a>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>
				</section>
            
			<section class="strip-divider primary-overlay lazy-section">
					<div class="background-image-holder parallax-background">
						<img class="background-image" alt="About Image" data-src="img/hero7.jpg">
					</div>
					<div class="video-wrapper">
						<video autoplay muted="" loop>
							<source src="video/video_2.webm" type="video/webm">
							<source src="video/video_2.mp4" type="video/mp4">
							<source src="video/video_2.ogv" type="video/ogg">
						</video>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-sm-12 text-center">
								<h1 class="text-white">Interested to be a part of ZINE?<div><a class="text-white" href="register2k18/index.php" target="_blank">Register</a> on our page for workshop </div></h1>
							</div>
						</div>
					</div>
			</section>
<?php include('footer.php')?>