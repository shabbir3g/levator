<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package levator
 * Template Name: Partners Template
 
 */
		
get_header(); ?>

		<?php $banner_image = get_field('banner_image');
		if($banner_image): ?>
		<section class="partners-title-bg" style="background-image: url(<?php echo $banner_image['url']; ?>);"> 
			<div class="container  middle-area"> 
			<?php $banner_heading = get_field('banner_heading');
			if($banner_heading): 
			
			 echo $banner_heading; ?>
			
			<?php endif; ?>
			<hr /> 
			<?php $banner_subtitle = get_field('banner_subtitle');
			if($banner_subtitle): 
			
			 echo $banner_subtitle; ?>
			
			<?php endif; ?>
			<?php $banner_link = get_field('banner_link');
			if($banner_link): ?>
			<a href="<?php echo $banner_link['url']; ?>"><?php echo $banner_link['title']; ?> </a>
			<?php endif; ?>
			</div>
		</section>
		<?php endif; ?>
		
		
		
		<div class="levator-top">
			<div class="container  middle-area"> 
				<div class="row levator-content"> 
				
				
					<?php $marketing_stage = get_field('marketing_stage'); 
					if($marketing_stage): 
					foreach($marketing_stage as $stage): ?>
					<div class="col-md-4"> 
						<div class="levator-cont">
							<?php echo $stage['stage_content']; ?>
						</div>
					</div>	
					<?php endforeach; endif; ?>
					
				</div>
			</div>
		</div>
		
		
		<div class="lev-second-post">
			<div class="container  middle-area"> 
			
			
				<div class="lev-second"> 
				
				<?php $section_title = get_field('section_title');
				if($section_title): ?>
					<h2><?php echo $section_title; ?></h2>
				<?php endif; ?>
					
					
					<?php $section_subtitle = get_field('section_subtitle');
				if($section_subtitle): ?>
					<p><?php echo $section_subtitle; ?></p>
					<?php endif; ?>
				</div>
				<div class="row lev-sec-content"> 
				
				
				<?php 
				
				$amitumi =  get_field('news_category');  foreach($amitumi as $ami){ $categoryname =  get_the_category_by_ID( $ami);} 
				
				$postnumber = get_field('number_of_post');
				
				


				?>
				
					<?php $newsbbb = new WP_Query([
						'post_type'				=> 'news',
						'posts_per_page'		=> $postnumber,
						'tax_query' => array(
							array(
								'taxonomy' => 'newscategory',
								'field'    => 'slug',
								'terms'    => $categoryname,
							),
						),
							
						
					]); 
					
				
					
					while($newsbbb->have_posts()): $newsbbb->the_post(); ?>
					
					
					<div class="col-md-6 col-lg-3"> 
						<div class="lev-sec-cont"> 
							<a href="#">Vietnam</a>
							<h2><?php echo wp_trim_words(get_the_title(), 4,false); ?></h2>
							<div class="lev-sec-img"> 
								<?php the_post_thumbnail(); ?>
							</div>
							<p><?php echo wp_trim_words(get_the_content(), 13, '</p>
							<div class="learn-more"> 
								<a href="'.get_the_permalink().'">자세히 보기 ></a>'); ?>
							</div>
						</div>
					</div>
					<?php endwhile;  ?>
					
			
				</div>
			</div>
		</div>
		
		
		<div class="lev-third-post">
			<div class="container  middle-area"> 
				<div class="lev-second">
					<?php

					$page_id     = get_queried_object_id();
					$customer_title = get_field('customer_title',$page_id );
					if($customer_title): ?>
					<h2><?php echo $customer_title; ?></h2>
					<?php endif; ?>
					
					<?php $customer_subtitle = get_field('customer_subtitle',$page_id );
					if($customer_subtitle): ?>
					<p><?php echo $customer_subtitle; ?></p>
					<?php endif; ?>
					
				</div>
				
				
				<?php $our_customer = get_field('our_customer' ,$page_id); 
				if($our_customer): 
				foreach($our_customer as $customer): ?>
				<div class="row lav-third-content"> 
					<div class="col-md-2"> 
						<div class="lavs-img"> 
							<img src="<?php echo $customer['logo']['url']; ?>" alt="<?php echo $customer['title']['url']; ?>" />
							
						</div>
					</div>
					<div class="col-md-10"> 
						<h2><?php echo $customer['title']; ?></h2>
						
						<p><?php echo $customer['description']; ?></p>
					</div>
				</div>
				<?php endforeach; endif; ?>
				
				
				
			</div>
		</div>
		
		
		
		
<?php get_footer(); ?>