<?php get_header(); ?>
	</header>
	<main>
		<!--<div class="jumbotron jumbotron-fluid">-->
			<div class="container front-banner">
				<div class="row">
				
					<div class="col">
						<h2 class="display-2 text-white">
							Derby & Burton<br>
							Hospitals <strong style="color:#B33951;">Choir</strong>
						</h2>
						<p style="font-weight: 300; font-size: 1.5em;" class="jumbo">Raising money for local health-related charities.</p>
					</div>
				</div>
			</div>
		<!--</div>-->
		<!-- 

		3 part 'features'
			est 83, raised over £170k to date, yearly xmas concert

		about the choir (page content plugged in)

		listen to us
			media player with most recent choir tracks
		
		Contact (either full part, or prompt with button to page)

		-->

		<section class="container">
			<div class="row py-5">
				<div class="col-md-4 m-auto">
					<!-- custom fields? -->
					<h3>things!</h3>
					<img src="<?= get_template_directory_uri(); ?>/images/Header8-150x150.png">
					<p></p>
				</div>
				<div class="col-md-4 m-auto">
					<h3>things!</h3>
					<img src="<?= get_template_directory_uri(); ?>/images/Header8-150x150.png">
				</div>
				<div class="col-md-4 m-auto">
					<h3>things!</h3>
					<img src="<?= get_template_directory_uri(); ?>/images/Header8-150x150.png">
				</div>									
			</div>
		</section>
		<section class="container home-content"> <!-- 'The content' goes here -->
			<div class="row">
				<div class="col my-5 text-white">	
				<?php 
					the_content();
				?>
				<a href="<?= get_site_url() ?>/about" class='btn btn-dark'>More about the Choir</a>
				</div>
				<!--
				<div class="col-md-4 my-5 pb-5">
					<h2 class="text-center">Rehearse with us</h2>
					<p>
						it could be fun... <br>why not? please? <br>well, there's no ned to be rude... <br>you know what? forget it! we dont need you!.
					</p>
					<div class="text-right">
						<a href="" class="btn btn-outline-primary">Join us today</a>
					</div>
				</div>
			-->
			</div>
		</section>
		<section class="container audio">
			<div class="row">
				<div class="col">
					<h2>Listen to us!</h2>
					<p>hear our most recent concert.</p>
					<?php get_template_part( 'template-parts/carousel', get_post_type() ); ?>
				</div>
			</div>
			<div class="row pb-5">
				<div class="col-md-8">
					<audio id="controls" controls class="audio-ctrl">
					  	<source  id="current-audio" src="<?= get_template_directory_uri(); ?>/audio/Follow-that-Star.mp3" type="audio/mpeg">
						Your browser does not support the audio element.
					</audio>
					<script type="text/javascript">
						function getSiblings (e) {
				           // for collecting siblings
				            if(!e.parentNode) {
				               return;
				           }
				           // first child of the parent node
				           let sibling  = e.parentNode.firstChild;
				           // collecting siblings
				           while (sibling) {
				            	if (sibling.nodeType === 1 && sibling !== e) {
				            		// remove
				            		classList.remove("active");
				            	}
				               sibling = sibling.nextSibling;
				           }
				       };
							function changeAudio(e, newSource) {
								getSiblings();
								e.classList.add("active");

								document.getElementById('current-audio').src = '<?= get_template_directory_uri(); ?>/audio/' + newSource;
								document.getElementById('controls').load();
								document.getElementById('controls').play();
								/*
									Select 5-8 tracks to use
									remove active from previous track(s)

								*/
						}
					</script>
					</div>

				<div class="col-md-4">
					<ol>
						<a href="#1" onclick="changeAudio(this, 'Follow-that-star.mp3');"><li>Follow That Star</li></a>
						<a href="#1" onclick="changeAudio(this, 'Christmas-Lullaby.mp3');"><li>Christmas Lullaby</li></a>
						<a href="#1" onclick="changeAudio(this, 'Calypso-Carol.mp3');"><li>Calypso Carol</li></a>
						<a href="#1" onclick="changeAudio(this, 'Calypso-Carol.mp3');"><li>audio 2</li></a>
					
					</ol>
				</div>
			</div>

		</section>
		<section class="container">
			<div class="row">

				
				<?php echo apply_shortcodes( '[contact-form-7 id="35" title="Contact form 1"]' ); ?>
			</div>
		</section>


		<?php get_footer(); ?>