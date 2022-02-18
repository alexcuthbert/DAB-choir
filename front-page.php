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
				<div class="col">
						<div class="d-inline-flex"><p>Folow That Star:</p></div> 
					<audio controls class="audio-ctrl">
					  	<source src="<?= get_template_directory_uri(); ?>/audio/Follow-that-Star.mp3" type="audio/mpeg">
						Your browser does not support the audio element.
					</audio>

					<!--
						on click {
							get clicked name
							name = file source
							set activeAudio to clicked item's 'name' attribute
							insert name src for audio controls

							also, have clas for active link, for UX

							use name attr for inner html?

						}


						onclick.event() ?								

						setHTML
						ID = activeAudio
						innerHTML = audio controls, src=activeAudio

						JS TO CHANGE SRC OF AUDIO CONTROLS WHEN LINKS ARE CLICKED
					-->

				</div>
			</div>

		</section>
		<section class="container">
			<div class="row">

				
				<?php echo apply_shortcodes( '[contact-form-7 id="35" title="Contact form 1"]' ); ?>
			</div>
		</section>


		<?php get_footer(); ?>