<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package levator
 */

get_header(); ?>

	
		<section class="page-title-bgs"> 
			
			<div class="page-title-cont"> 
			<h2>매일 업데이트 되는 최신 정보를 받아보세요.</h2>
				<a href="#">구독하기</a>
			</div>
		</section>
		<div class="blog-post">
			<div class="container middle-area"> 
			
			
				<?php
					
					$news = new WP_Query([
						'post_type'				=> 'news',
						'posts_per_page'		=> 12,
					]);
					
					
					if($news->have_posts()): ?>
					
					
				<div class="blog-menu"> 
					<ul>
						<li><a data-filter="*" data-sort="default:asc" >전체</a></li>
						<li><a  data-sort="default:desc" >What's new</a></li>
						<li><a   data-filter="*" data-sort="default:asc"  >국가별 트렌드</a></li>
					</ul>
				</div>
				<div class="row blog-content"> 
				
				
					<?php
					
					

					while($news->have_posts()): $news->the_post();?>
				
					<div class="col-lg-3 col-md-6 mix ami"> 
						<span>이슈</span>
						<h2><?php echo wp_trim_words(get_the_title(), 5,false); ?></h2>
						<div class="blog-img"> 
							
							
						
							<a href="<?php the_permalink(); ?>" ><?php the_post_thumbnail(); ?></a>
							<div class="layer"> 
								<a class="lock-icon" href="<?php the_permalink(); ?>"></a>
							</div>
						</div>
						<p><?php echo wp_trim_words(get_the_content(), 18, '</p>
						<div class="learn-more"> 
							<a href="'.get_the_permalink().'">자세히 보기 ></a>'); ?>
						</div>
					</div>
					
					<?php endwhile; ?>
					
					
					
					
				</div>
				
				<hr />
				<div class="load-more"> 
					<a href="#">더보기</a>
				</div>
				<?php endif; ?>
			</div>
			
		</div>
		
		

	

<?php get_footer();
