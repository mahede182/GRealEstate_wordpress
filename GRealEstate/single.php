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
	'post_type' => 'project'
);

$project = new WP_Query( $args ); 
?>

<!--////////////////////////////////////Container-->
<section id="container">
	<div class="wrap-container">

		<!-----------------content-box-------------------->
		<section class="content-box">
			<div class="zerogrid">
				<?php $project->the_post();?>
				<div class="row wrap-box"><!--Start Box-->
					<div id="main-content">
						<div class="wrap-content">
							<article>
								<div class="art-header">
									<h1 class="entry-title"><?php the_title();?></h1>
								</div>
								<div class="art-content">
									
									<div class="excerpt"><p><?php echo the_content();?></p>
									<div class="note">
									  <ol>
										
									  </ol>
									  <div class="clear"></div>
									</div>
									<p><?php the_content();?></p>
								</div>
							</article>
						</div>
					</div>
				</div>
			</div>
		</section>

	</div>
</section>
<?php wp_reset_query();?>
<!--////////////////////////////////////Footer-->
<?php get_footer();?>