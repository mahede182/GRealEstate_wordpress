<?php get_header();?>
<!--////////////////////////////////////Container-->
<section id="container">
	<div class="wrap-container">

		<!-----------------content-box-------------------->
		<section class="content-box">
			<div class="zerogrid">
				<div class="row wrap-box"><!--Start Box-->
					<div id="main-content">
						<div class="header">
							<div class="zerogrid wrapper">
								<h2>CONTACT</h2>
							</div>
						</div>							
						<div class="zerogrid">
							<div class="row">
								<div class='embed-container maps'>
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.289259162295!2d-120.7989351!3d37.5246781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8091042b3386acd7%3A0x3b4a4cedc60363dd!2sMain+St%2C+Denair%2C+CA+95316%2C+Hoa+K%E1%BB%B3!5e0!3m2!1svi!2s!4v1434016649434" width="100%" height="450px" frameborder="0" style="border: 0"></iframe>
								</div>
								<div class="col-2-3">
									<div class="wrap-col">
										<div class="contact">
											<h5 class="color-orange">Contact Form</h5>
											<div id="contact_form">
												<div id="ff">
 <?php
 include_once(ABSPATH.'wp-admin/includes/plugin.php');
 if(is_plugin_active( 'wp-contact-form-7.php' )){
	 echo do_shortcode($content);
 }
echo do_shortcode('[contact-form-7 id="44" title="greal contact"]');
 ?>


												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-1-3">
									<div class="wrap-col">
										<h5 class="color-orange">Contact Info</h5>
											<span>SED UT PERSPICIATIS UNDE OMNIS ISTE NATUS ERROR SIT VOLUPTATEM ACCUSANTIUM DOLOREMQUE.</span>
											<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque la udantium, totam rem aperiam, eaque ipsa quae ab illo inventore quasi. Nemo enim ipsam voluptatem quia.</p>
											<p>JL.Kemacetan timur no.23. block.Q3<br>
												Jakarta-Indonesia</p>
											   <p>+6221 888 888 90 <br>
												+6221 888 88891</p>
											<p>info@yourdomain.com</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	</div>
</section>

<!--////////////////////////////////////Footer-->
 <?php get_footer();?>