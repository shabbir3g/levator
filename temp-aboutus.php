<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package levator
 * Template Name: About Us
 
 */

get_header(); ?>

<?php $banner_image = get_field('banner_image'); 
if($banner_image): ?>
<section class="page-title-about" style="background-image: url(<?php echo $banner_image['url']; ?>);"> 
	<div class="container middle-area">  
		<div class="row"> 
		
			
			<div class="col-md-5"> 
			<?php $banner_title = get_field('banner_title'); 
				if($banner_title): ?>
					<h2><?php echo $banner_title; ?></h2>
				<?php endif; ?>
			</div>

			
			<div class="col-md-7"> 
				<?php $banner_descriptions = get_field('banner_descriptions'); 
				if($banner_descriptions): ?>
				<?php echo $banner_descriptions; ?>
				
				<?php endif; ?>
			</div>
		</div>
	</div> 
</section>
<?php endif; ?>


<div class="recruitment-section"> 
	<div class="container middle-area"> 
		<div class="rec-title"> 
			<?php $section_title = get_field('section_title'); 
				if($section_title): ?>
			<h2><?php echo $section_title; ?></h2>
			<?php endif; ?>
			<?php $section_description = get_field('section_description'); 
				if($section_description): ?>
			<p><?php echo $section_description; ?></p>
			<?php endif; ?>
		</div>
		<div class="row"> 
		
		
			<?php $all_mebers = get_field('all_mebers'); 
			if($all_mebers): 
			foreach($all_mebers as $members): ?>
			<div class="col-md-6"> 
				<div class="row"> 
					<div class="col-md-6"> 
						<div class="team-cont"> 
							<a href="<?php echo $members['member_image']['url']; ?>" data-lightbox="image-team-members" data-title="<?php echo $members['member_name']; ?>"><img src="<?php echo $members['member_image']['url']; ?>" alt="<?php echo $members['member_name']; ?>" /></a>
						</div>
					</div>
					<div class="col-md-6"> 
						<div class="team-cont"> 
							<h2><?php echo $members['member_name']; ?></h2>
							<h4><?php echo $members['member_designaion']; ?></h4>
							<p><?php echo $members['member_description']; ?></p>
							<a href="<?php echo $members['language']['url']; ?>"><i class="far fa-comments"></i><?php echo $members['language']['title']; ?></a>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach; endif; ?>
			
			
			
		</div>
	</div>
</div>


<div class="recruitment-section"> 
	<div class="container middle-area"> 
		<div class="rec-title"> 
			<?php $section_title_copy = get_field('section_title_copy'); 
				if($section_title_copy): ?>
			<h2><?php echo $section_title_copy; ?></h2>
			<?php endif; ?>
			
		</div>
		<div class="row"> 
		
		
		
			
			<?php $all_mebers_copy = get_field('all_mebers_copy'); 
			if($all_mebers_copy): 
			foreach($all_mebers_copy as $mem): ?>
			<div class="col-md-6"> 
				<div class="row"> 
					<div class="col-md-6"> 
						<div class="team-cont"> 
							<a href="<?php echo $mem['member_image']['url']; ?>" data-lightbox="image-team-group" data-title="<?php echo $mem['member_name']; ?>"><img src="<?php echo $mem['member_image']['url']; ?>" alt="<?php echo $mem['member_name']; ?>" /></a>
						</div>
					</div>
					<div class="col-md-6"> 
						<div class="team-cont"> 
							<h2><?php echo $mem['member_name']; ?></h2>
							<h4><?php echo $mem['member_designaion']; ?></h4>
							<p><?php echo $mem['member_description']; ?></p>
							<a href="<?php echo $mem['language']['url']; ?>"><i class="far fa-comments"></i><?php echo $mem['language']['title']; ?></a>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach; endif; ?>
			
			
			
			
			

		</div>
	</div>
</div>

		
		
		
<?php get_footer(); ?>