<?php
	//response generation function
	$response = "";

	//function to generate response
	function my_contact_form_generate_response($type, $message){
		global $response;

		if($type == "success") $response = "<div class='success'>{$message}</div>";
		else $response = "<div class='error'>{$message}</div>";
	}

	//response messages
	$missing_content = "Please supply all information.";
	$email_invalid   = "Email Address Invalid.";
	$message_unsent  = "Message was not sent. Try Again.";
	$message_sent    = "Thanks! Your message has been sent.";
	 
	//user posted variables
	$name = $_POST['message_name'];
	$email = $_POST['message_email'];
	$subjectin = $_POST['subject_text'];
	$message = $_POST['message_text'];
	 
	//php mailer variables
	$to = get_option('admin_email');
	$subject = "Someone sent a message from ".get_bloginfo('name') . $subjectin;
	$headers = 'From: '. $email . "\r\n" .
	  'Reply-To: ' . $email . "\r\n";
?>

<?php get_header(); ?>

<!-- Main -->
	<div id="main">
		<!-- Me -->
			<article id="home" class="panel no-bg">
				<header>
					<h1>ECE Week 2017</h1>
					<p>Celebrating ECE Technology and Education</p>
				</header>
				<!-- <div class="pic">
					<img src="images/frontaction.jpg" alt="" />
				</div> -->
				<div class="pic">
					<img src="https://raw.githubusercontent.com/UAlbertaCompEClub/eceweekwebsite2017/master/images/frontaction.jpg" alt="" />
				</div>
			</article>

		<!-- workshops -->
			<article id="workshops" class="panel">
				<header>
					<h2>Workshops</h2>
					When&Where
  					(tuesday and wednesday) - tbd
				</header>
				<p>
					Workshops emphasize a hands-on approach to learning. Build something cool or learn how to use a new piece of technology in an informative and engaging one hour session! Whether you’re a novice or experienced tinkerer, our workshops will expand your knowledge about what work in the ECE industry looks like.
				</p>
		        <p>
		    	    If you are interested in hosting a workshop, contact eceweek@compeclub.com for details.
		        </p>

				<section>
					<h3>Our Workshops</h3>
					<p style="margin:0px">To be determined - contact for more</p>
					<div class="row" style="margin-top: 0px">
						<div class="4u 12u$(mobile)">
							<a href="#" class="image fit"><img src="https://cdn.rawgit.com/UAlbertaCompEClub/eceweekwebsite2017/master/static/images/Workshop01.jpg" alt=""></a>
						</div>
						<div class="4u 12u$(mobile)">
							<a href="#" class="image fit"><img src="https://cdn.rawgit.com/UAlbertaCompEClub/eceweekwebsite2017/master/static/images/Workshop02.jpg" alt=""></a>
						</div>
						<div class="4u$ 12u$(mobile)">
							<a href="#" class="image fit"><img src="https://cdn.rawgit.com/UAlbertaCompEClub/eceweekwebsite2017/master/static/images/Workshop03.jpg" alt=""></a>
						</div>
					</div>
				</section>
			</article>

		<!-- democamp/keynote 
			<article id="democamp" class="panel">
				<header>
					<h2>Democamp</h2>
					When&Where
			        (Thursday, January 26th at tbd) - tbd
				</header>
				<p>
					DemoCamp brings together developers, creatives, entrepreneurs and investors to share what they’ve been working on and to find others in the community interested in similar topics. For presenters, it’s a great way to get feedback on what you’re building from peers and the community, all in an informal setting. Started back in 2008, DemoCamp Edmonton has steadily grown into one of the largest in the country, with over 200 people attending each event.
					(Hosted by Startup Edmonton)
				</p>

				<section>
					<h3>Demos</h3>
					<p style="margin:0px">To be determined - contact for more</p>
					<div class="row" style="margin-top: 0px">
						<div class="4u 12u$(mobile)">
							<a href="#" class="image fit"><img src="https://cdn.rawgit.com/UAlbertaCompEClub/eceweekwebsite2017/master/static/images/Demo01.jpg" alt=""></a>
						</div>
						<div class="4u 12u$(mobile)">
							<a href="#" class="image fit"><img src="https://cdn.rawgit.com/UAlbertaCompEClub/eceweekwebsite2017/master/static/images/Demo02.jpg" alt=""></a>
						</div>
						<div class="4u$ 12u$(mobile)">
							<a href="#" class="image fit"><img src="https://cdn.rawgit.com/UAlbertaCompEClub/eceweekwebsite2017/master/static/images/Demo03.jpg" alt=""></a>
						</div>
					</div>
				</section>
			</article>-->

		<!-- Mixer -->
			<article id="mixer" class="panel">
				<header>
					<h2>Industry Social</h2>
				  When&Where
              		(Friday at DICE 8th Floor)
				</header>
				<p>
				  The Industry Social is an evening event comprised of tech talks and a mixer. Tech talks are 10 minute presentations about interesting technology, and its role and applications in industry. Come out and learn about the innovative technologies used by companies. After the talks, the mixer gives students, professors and industry representatives a chance to socialize, network and forge personal connections in a friendly setting. Food and beverages will be provided!
				</p>
				<!-- <span class="embed-youtube" style="text-align:center; display: block;"><iframe class="youtube-player" type="text/html" width="560" height="315" src="http://www.youtube.com/embed/videoseries?list=PLRp9jPf602CCu8xiaUwp-fZqAnMVAjIZ-&amp;hl=en_US" allowfullscreen="true" style="border:0;"></iframe></span> -->
				<section>
					<h3>Tech Talks</h3>
					<p style="margin:0px">To be determined - contact for more</p>
					<div class="row" style="margin-top: 0px">
						<div class="4u 12u$(mobile)">
							<a href="#" class="image fit"><img src="https://cdn.rawgit.com/UAlbertaCompEClub/eceweekwebsite2017/master/static/images/TechTalk01.jpg" alt=""></a>
						</div>
						<div class="4u 12u$(mobile)">
							<a href="#" class="image fit"><img src="https://cdn.rawgit.com/UAlbertaCompEClub/eceweekwebsite2017/master/static/images/TechTalk02.jpg" alt=""></a>
						</div>
						<div class="4u$ 12u$(mobile)">
							<a href="#" class="image fit"><img src="https://cdn.rawgit.com/UAlbertaCompEClub/eceweekwebsite2017/master/static/images/TechTalk03.jpg" alt=""></a>
						</div>
						<div class="4u 12u$(mobile)">
							<a href="#" class="image fit"><img src="https://cdn.rawgit.com/UAlbertaCompEClub/eceweekwebsite2017/master/static/images/TechTalk04.jpg" alt=""></a>
						</div>
						<div class="4u 12u$(mobile)">
							<a href="#" class="image fit"><img src="https://cdn.rawgit.com/UAlbertaCompEClub/eceweekwebsite2017/master/static/images/TechTalk05.jpg" alt=""></a>
						</div>
						<div class="4u$ 12u$(mobile)">
							<a href="#" class="image fit"><img src="https://cdn.rawgit.com/UAlbertaCompEClub/eceweekwebsite2017/master/static/images/TechTalk06.jpg" alt=""></a>
						</div>
					</div>
				</section>
			</article>

		<!-- Hack -->
			<article id="hack" class="panel">
				<header>
					<h2>HackEd 2017</h2>
					Saturday and Sunday, January 28-29th. At <a color="inherit" href="https://www.google.ca/maps/place/Startup+Edmonton">StartUP Edmonton.</a>
				</header>
				<p>
					HackEd is our student hackathon, an event where students have 24 hours to design, implement and present innovative solutions to life’s problems. Using software, hardware and collaboration, students get a chance to exercise their creativity and problem solving skills to build something awesome! Students of all disciplines and skill levels are welcome to join. Learn more about HackEd 2017 on the  <a color="inherit" href="https://hacked.compeclub.com">HackEd website</a>. Previous hacks can be found on the <a color="inherit" href="http://hacked2016.devpost.com/">HackEd2016 Devpost</a> page.
				</p>
				<section>
					<div class="row">
						<div class="4u 12u$(mobile)">
							<a href="#" class="image fit"><img src="https://cdn.rawgit.com/UAlbertaCompEClub/eceweekwebsite2017/master/images/HackED.jpg" alt=""></a>
						</div>
						<div class="4u 12u$(mobile)">
							<a href="#" class="image fit"><img src="https://cdn.rawgit.com/UAlbertaCompEClub/eceweekwebsite2017/master/images/HackED2.JPG" alt=""></a>
						</div>
						<div class="4u$ 12u$(mobile)">
							<a href="#" class="image fit"><img src="https://cdn.rawgit.com/UAlbertaCompEClub/eceweekwebsite2017/master/images/HackED3.jpg" alt=""></a>
						</div>
						<div class="4u 12u$(mobile)">
							<a href="#" class="image fit"><img src="https://cdn.rawgit.com/UAlbertaCompEClub/eceweekwebsite2017/master/images/HackED4.jpg" alt=""></a>
						</div>
						<div class="4u 12u$(mobile)">
							<a href="#" class="image fit"><img src="https://cdn.rawgit.com/UAlbertaCompEClub/eceweekwebsite2017/master/images/HackED7.JPG" alt=""></a>
						</div>
						<div class="4u$ 12u$(mobile)">
							<a href="#" class="image fit"><img src="https://cdn.rawgit.com/UAlbertaCompEClub/eceweekwebsite2017/master/images/HackED9.JPG" alt=""></a>
						</div>
					</div>
				</section>
			</article>

		<!-- Contact -->
			<article id="contact" class="panel">
				<header>
					<h2>Contact</h2>
				</header>
				<p>
					For involvement, participation and sponsorship queries, please email us here!
				</p>
				<div id="respond">
					<?php echo $response; ?>
					<form action="<?php the_permalink(); ?>" method="post">
						<div>
							<div class="row">
								<div class="6u 12u$(mobile)">
									<input type="text" name="message_name" placeholder="Name" value="<?php echo esc_attr($_POST['message_name']); ?>"/>
								</div>
								<div class="6u$ 12u$(mobile)">
									<input type="text" name="message_email" placeholder="Email Address" value="<?php echo esc_attr($_POST['message_email']); ?>" />
								</div>
								<div class="12u$">
									<input type="text" name="subject_text" placeholder="Subject" value="<?php echo esc_textarea($_POST['subject_text']); ?>" />
								</div>
								<div class="12u$">
									<textarea name="message_text" placeholder="Message" rows="8">
										<?php echo esc_textarea($_POST['message_text']); ?>
									</textarea>
								</div>
								<input type="hidden" name="submitted" value="1">
								<div class="12u$">
									<input type="submit" value="Send Message" />
								</div>
							</div>
						</div>
					</form>
				</div>
			</article>
	</div>

<?php get_footer(); ?>
