<?php get_header(); ?>
	</header>
	<main>
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


		<section class="container"> <!-- Features, Custom Fields -->
			<div class="row py-5">
				<div class="col-sm-4">
					<!-- custom fields -->
					<div class="feature-wrapper mx-auto ">
						<h3 class="feature mx-auto"><?= get_field('bragging-1'); ?></h3>
						<img class="feature mx-auto d-block" src="<?= get_field('image-1')?>">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="feature-wrapper mx-auto">
						<h3 class="feature mx-auto"><?= get_field('bragging-2'); ?></h3>
						<img class="feature mx-auto d-block" src="<?= get_field('image-2')?>">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="feature-wrapper mx-auto">
						<h3 class="feature mx-auto"><?= get_field('bragging-3'); ?></h3>
						<img class="feature mx-auto d-block" src="<?= get_field('image-3')?>">
					</div>
				</div>									
			</div>
		</section>
		<section class="container home-content"> <!-- 'The content' goes here -->
			<div class="row">
				<div class="col my-5 text-white">	
				<?php 
					the_content();
				?>
				<a href="<?= get_site_url() ?>/about" class='btn btn-outline-light'>More about the Choir</a>
				</div>
				
			</div>
		</section>
		<section class="container">
			<div class="audio">
				<div class="row">
					<div class="col">
						<div class="audio-title mx-auto">
							<h2>Listen to us!</h2>
							<p>hear our most recent concert.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<audio id="controls" controls class="audio-ctrl">
						  	<source  id="current-audio" src="<?= get_template_directory_uri(); ?>/audio/Follow-that-Star.mp3" type="audio/mpeg">
							Your browser does not support the audio element.
						</audio>
						<script type="text/javascript">
							function getSiblings (event) {
					           // for collecting siblings
					            if(!this.parentNode) {
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
								function changeAudio(event, newSource) {
									getSiblings();
									event.classList.add("active");

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

					<div class="col-md-3">
						<ol>
							<a href="#1" onclick="changeAudio(this, 'Follow-that-star.mp3');"><li>Follow That Star</li></a>
							<a href="#1" onclick="changeAudio(this, 'Christmas-Lullaby.mp3');"><li>Christmas Lullaby</li></a>
							<a href="#1" onclick="changeAudio(this, 'Calypso-Carol.mp3');"><li>Calypso Carol</li></a>
							<a href="#1" onclick="changeAudio(this, 'Calypso-Carol.mp3');"><li>audio 2</li></a>
						</ol>
					</div>
					<div class="col-md-6">
						<img src="<?= get_field('image-3')?>" class="w-50">
					</div>
				</div>
			</div>

		</section>
		<section class="container">
			<div class="row">
				<?php echo apply_shortcodes( '[contact-form-7 id="35" title="Contact form 1"]' ); ?>
			</div>
		</section>


		<?php get_footer(); ?>