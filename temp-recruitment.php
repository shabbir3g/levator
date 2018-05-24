<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package levator
 * Template Name: Recruitment Template
 
 */

get_header(); ?>
		<?php $page_banner = get_field('page_banner');
		if($page_banner): ?>
		<section class="page-title-bg" style="background-image: url(<?php echo $page_banner['url']; ?>);"> 
			<?php $page_banner_title = get_field('page_banner_title'); 
			if($page_banner_title): ?>	
			<h2><?php echo $page_banner_title; ?></h2>
			<?php endif; ?>
		</section>
		<?php endif; ?>
		
		
		
		<?php $recruitment_section = get_field('recruitment_section'); 
		if($recruitment_section): 
		foreach($recruitment_section as $recruitment): ?>
		<div class="recruitment-section"> 
			<div class="container middle-area"> 
					<div class="rec-title">  
						<h2><?php echo  $recruitment['title']; ?></h2>
						<p><?php echo  $recruitment['subtitle']; ?></p>
					</div>
					<div class="rows-rec"> 
						<div class="single-rec"> 
							<div class="rec-cont"> 
								<?php echo  $recruitment['content']; ?>
								
							</div>
						</div>
						<div class="single-rec"> 
							<div class="rec-cont"> 
								<a href="<?php echo  $recruitment['image']['url']; ?>" data-lightbox="image-3" data-title="<?php echo  $recruitment['title']; ?>"><img src="<?php echo  $recruitment['image']['url']; ?>" alt="<?php echo  $recruitment['image']['title']; ?>" /></a>
							</div>
						</div>
					</div>
			</div>
		</div>
		<?php endforeach; endif; ?>
		
		<?php $botton_page_link = get_field('botton_page_link'); 
			if($botton_page_link): ?>	
		<div class="contact-us-button"> 
			<a href="<?php echo  $botton_page_link['url']; ?>"><?php echo  $botton_page_link['title']; ?></a>
		</div>
		<?php endif; ?>
		
		
		
		
<?php get_footer(); ?>