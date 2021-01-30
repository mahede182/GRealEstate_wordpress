<?php get_header();
/*
 * Setup query to show the ‘services’ post type with ‘8’ posts.
 * Output the title with an excerpt.
 
    $args = array(  
        'post_type' => 'services',
        'post_status' => 'publish',
        'posts_per_page' => 4, 
        'orderby’ => 'title', 
        'order’ => 'ASC', 
    );

    $loop = new WP_Query( $args ); 
        
    while ( $loop->have_posts() ) : $loop->the_post(); 
        print the_title(); 
        the_excerpt(); 
    endwhile;

	wp_reset_postdata(); 
*/
	
$args = array(  
	'post_type' => 'project',
	'post_status' => 'publish',
	'posts_per_page' => 4
);

$project = new WP_Query( $args ); 
?>

<section id="container">
	<div class="wrap-container">
		<!-----------------content-box-1-------------------->
		<section class="content-box boxstyle-2 box-1">
			<div class="zerogrid">
				<div class="row wrap-box"><!--Start Box-->
				<?php while($project->have_posts())	:	$project->the_post();?>
					<div class="col-1-2">
						<div class="post">
							<div class="col-2-5">
								<div class="wrap-col">
									<?php the_post_thumbnail();?>
								</div>
							</div>
							<div class="col-3-5">
								<div class="wrap-col">
									<div class="price"> <?php the_meta();?></div>
									<span><?php the_title();?></span>
									<p><?php the_content();?></p>
									<a class="button" href="<?php the_permalink();?>">Learn More</a>
								</div>
							</div>
						</div>
					</div>
<?php endwhile;?>
				</div>
			</div>
		</section>
	<?php wp_reset_postdata();?>	
		<!-----------------content-box-2-------------------->
		<section class="content-box boxstyle-1 box-2">
			<div class="zerogrid">
				<div class="row wrap-box"><!--Start Box-->
					<h2>Find Homes to Suit Your <br>Lifestyles</h2>
					<span>MES CUML DIA SED INENIASINGE DOLOR IPSUM COMMETE IPSUM COMNETUS MES INENIASINGE. DOLOR IPSUM COMMETE IPSUM COMNETUS MES INENIASINGE DOLOR.</span>
				</div>
			</div>
		</section>
		
		<!-----------------content-box-3-------------------->
		<section class="content-box box-3">
			<div class="zerogrid">
				<div class="row wrap-box"><!--Start Box-->
					<div class="header">
						<div class="wrapper">
							<h2 class="color-yellow">HOW TO CHOOSE THE PERFECT HOME?</h2>
						</div>
					</div>	
					<div class="row">
						<div class="col-1-3">
							<div class="wrap-col wrapper">
								<h3>1. MES CUML</h3>
								<span>INGERON ALIIQTES DOLORE</span>
								<p>Mes cuml dia sed in lacus ut eniascet ingerto aliiqt es site amet eismod ictor ut ligulate ameti dapibus ticdu nt mtsen lusto dolor ltissim. comes cuml dia sed inertio lacusueni ascet dolingerto aliiqt sit amet. Eism com odictor ut ligulate cot ameti dapibu enim ipsam voluptatem.</p>
							</div>
						</div>
						<div class="col-1-3">
							<div class="wrap-col wrapper">
								<h3>2. SUSPENDIS</h3>
								<span>INGERON ALIIQTES DOLORE</span>
								<p>Mes cuml dia sed in lacus ut eniascet ingerto aliiqt es site amet eismod ictor ut ligulate ameti dapibus ticdu nt mtsen lusto dolor ltissim. comes cuml dia sed inertio lacusueni ascet dolingerto aliiqt sit amet. Eism com odictor ut ligulate cot ameti dapibu enim ipsam voluptatem.</p>
							</div>
						</div>
						<div class="col-1-3">
							<div class="wrap-col wrapper">
								<h3>3. PROIN</h3>
								<span>INGERON ALIIQTES DOLORE</span>
								<p>Mes cuml dia sed in lacus ut eniascet ingerto aliiqt es site amet eismod ictor ut ligulate ameti dapibus ticdu nt mtsen lusto dolor ltissim. comes cuml dia sed inertio lacusueni ascet dolingerto aliiqt sit amet. Eism com odictor ut ligulate cot ameti dapibu enim ipsam voluptatem.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		
	</div>
</section>
<?php get_footer();?>