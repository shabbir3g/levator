<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package levator
 */

get_header(); ?>

	<section class="page-title-bgs"> 
			<div class="page-title-cont"> 
				<?php while(have_posts()): the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php endwhile; ?>
			</div>
		</section>
		<div class="blog-post">
			<div class="container middle-area"> 
				
				<div class="row"> 
				
					<?php while(have_Posts()): the_post(); ?>
					<div class="col-md-12"> 
						<br />
						<br />
						
						<div class="single-blog-img"> 
							<a href="<?php  echo get_the_post_thumbnail_url(); ?>" data-lightbox="imageesblog" data-title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a>
						</div>
						<div class="single-content"> 
							
							<?php the_content(); ?>
						
						
						
						</div>
						
					</div>
					
					<?php endwhile; ?>
					
					
					
				</div>
				
			</div>
			
		</div>
	

<?php get_footer();
