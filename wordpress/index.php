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
					5:00 PM on Tuesday & Wednesday, January 24-25 @ <a href="https://maps.google.com/maps?f=q&hl=en&q=ETLC">ETLC, University of Alberta</a>
				</header>
				<p>
					Workshops emphasize a hands-on approach to learning. Build something cool or learn how to use a new piece of technology in an informative and engaging one hour session! Whether you’re a novice or experienced tinkerer, our workshops will expand your knowledge about what work in the ECE industry looks like.
				</p>
				<p>
				If you are interested in hosting a workshop, contact eceweek@compeclub.com for details.
				</p>

				<section>
					<h3>Our Workshops</h3>

					<div class="row" style="margin-top: 0px">
						<a href="" class="4u 12u$(mobile)">
							<div class="CE1 workshop">
								<div class="text">
									Web API's: Gluing the Modern Web Together
									<div>Ben Zittlau - Jobber</div>
									<div>5pm Tuesday, ATCO</div>
								</div>
							</div>
						</a>
						<div class="4u 12u$(mobile)">
							<div class="EE1 workshop">
								<div class="text">
									TBA
								</div>
							</div>
						</div>
						<div class="4u$ 12u$(mobile)">
							<div class="EP1 workshop">
								<div class="text">
									TBA
								</div>
							</div>
						</div>
					</div>
					<br>
					<div class="row" style="margin-top: 0px">
						<div class="4u 12u$(mobile)">
							<div class="CE2 workshop">
								<div class="text">
									TBA
									<div>Dark Horse Analytics</div>
									<div>5pm Wednesday, location TBA</div>
								</div>
							</div>
						</div>
						<div class="4u 12u$(mobile)">
							<div class="EE2 workshop">
								<div class="text">
									TBA
								</div>
							</div>
						</div>
						<div class="4u$ 12u$(mobile)">
							<div class="EP2 workshop">
								<div class="text">
									TBA
								</div>
							</div>
						</div>
					</div>
				</section>
			</article>

		<!-- lunchalytics -->
			<article id="lunchalytics" class="panel">
				<header>
					<h2>Lunchalytics</h2>
					 11:45 AM on Wednesday, January 25 @ <a href="https://maps.google.com/maps?f=q&hl=en&q=301%2C+10359+-+104+Street%2C+Edmonton%2C+AB%2C+ca">StartUpEdmonton</a>
				</header>
				<p>Lunchalytics is a monthly event by Dark Horse Analytics and StartUp Edmonton. <br/><br/> Get a free lunch and learn about open source and open data analytics by Mark Diner (Chief Advisor, Open Government at Government of Alberta) and Taj Darra (Open Source Analytics Data Scientist at IBM)
				</p>
				<p>Learn more and RSVP <a href="https://www.meetup.com/startupedmonton/events/234082671/?isFromReg=true">here</a></p>
			</article>

		<!-- democamp/keynote -->
			<article id="democamp" class="panel">
				<header>
					<h2>Democamp</h2>
					5:00 PM on Tuesday & Wednesday, January 24-25 @ <a href="http://maps.google.com/?q=11335%20Saskatchewan%20Drive%20Northwest%20Edmonton,%20AB,%20T6G%202M9%20Canada">CCIS 1-140, University of Alberta</a>
				</header>
				<p>
					(Hosted by Startup Edmonton)<br>
					DemoCamp brings together developers, creatives, entrepreneurs and investors to share what they’ve been working on and to find others in the community interested in similar topics. For presenters, it’s a great way to get feedback on what you’re building from peers and the community, all in an informal setting. Started back in 2008, DemoCamp Edmonton has steadily grown into one of the largest in the country, with over 200 people attending each event.
				</p>
				<p>
					RSVP for democamp <a href="http://www.startupedmonton.com/new-events/2017/1/24/democamp-34">here</a>.
				</p>
			</article>

		<!-- Speaker -->
			<article id="speaker" class="panel">
				<header>
					<h2>Distinguished Speaker: Hemi Thaker</h2>
					4:30pm on Thursday January 26 @ <a href="https://goo.gl/maps/VE2qCo7nf6S2">8th floor DICE</a>
				</header>
				<h3>How We Built a Multi-million Dollar Tech Company</h3>
				<br/>
				<p>
					Hemi is a University of Alberta alum, graduating from the Computer Engineering program in '86, and a very successful business entrepreneur. He earned his Masters in Electrical Engineering from the University of Waterloo and has launched two winning companies with very little start-up money. As the winner of the Ernst and Young Entrepreneur of the Year Award he hopes to inspire Canadians to take risks in their careers. He has had successes and what he calls successful failures over the years and with his vast life experience this proves to be a stimulating lecture for both Engineers and business enthusiasts.
				</p>
			</article>

		<!-- Mixer -->
			<article id="mixer" class="panel">
				<header>
					<h2>Industry Social</h2>
					5:30 PM on Friday, January 27 @ <a href="https://maps.google.com/maps?f=q&hl=en&q=ETLC">ETLC Solarium, University of Alberta</a>
				</header>
				<p>
					The Industry Social is an opportunity for electrical engineering, computer engineering, and engineering physics students to learn about the work and culture of engineering in industry and an opportunity for industry professionals to meet and guide students through the industry.
					<br>The mixer is a casual setting for students and professions to connect and develop relationships - a good way for to create awareness of the career opportunities awesome technologies in our industry.
					<br>The evening will have free snacks throughout the event on behalf of the Department of Electrical and Computer Engineering.
				</p>
				<p>
					RSVP <a href="http://eceweekmixer.eventbrite.ca">here</a>
				</p>
			</article>

		<!-- Hack -->
							<article id="hack" class="panel">
								<header>
									<h2>HackEd 2017</h2>
									Saturday and Sunday, January 28-29th @ <a color="inherit" href="https://www.google.ca/maps/place/Startup+Edmonton">StartUP Edmonton.</a>
								</header>
								<p>
									HackEd is our student hackathon, an event where students have 24 hours to design, implement and present innovative solutions to life’s problems. Using software, hardware and collaboration, students get a chance to exercise their creativity and problem solving skills to build something awesome! Students of all disciplines and skill levels are welcome to join. <br/>
									<button color="inherit"><a href="https://hacked.compeclub.com">Apply & Learn More</a></button>
									<button color="inherit"><a href="http://hacked2016.devpost.com/">HackEd2016 Hacks</a></button>
								</p>
								<section>
									<div class="row">
										<div class="4u 12u$(mobile)">
											<div class="image fit"><img src="https://cdn.rawgit.com/UAlbertaCompEClub/eceweekwebsite2017/master/images/hacked/HackED.jpg" alt=""></div>
										</div>
										<div class="4u 12u$(mobile)">
											<div class="image fit"><img src="https://cdn.rawgit.com/UAlbertaCompEClub/eceweekwebsite2017/master/images/hacked/HackED2.JPG" alt=""></div>
										</div>
										<div class="4u$ 12u$(mobile)">
											<div class="image fit"><img src="https://cdn.rawgit.com/UAlbertaCompEClub/eceweekwebsite2017/master/images/hacked/HackED3.jpg" alt=""></div>
										</div>
										<div class="4u 12u$(mobile)">
											<div class="image fit"><img src="https://cdn.rawgit.com/UAlbertaCompEClub/eceweekwebsite2017/master/images/hacked/HackED4.jpg" alt=""></div>
										</div>
										<div class="4u 12u$(mobile)">
											<div class="image fit"><img src="https://cdn.rawgit.com/UAlbertaCompEClub/eceweekwebsite2017/master/images/hacked/HackED7.JPG" alt=""></div>
										</div>
										<div class="4u$ 12u$(mobile)">
											<div class="image fit"><img src="https://cdn.rawgit.com/UAlbertaCompEClub/eceweekwebsite2017/master/images/hacked/HackED9.JPG" alt=""></div>
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
