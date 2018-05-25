<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
				
				<div class="row"> 
				
					<?php while(have_Posts()): the_post(); ?>
					<div class="col-md-8"> 
						<div class="bread-crumb"> 
							<a href="#">What’s new  >  이슈</a>
						</div>
						<div class="single-title"> 
						<h2><?php the_title(); ?></h2>
						</div>
						<div class="blog-sharemeta"> 
							<div class="meta-cont"> 
								<span> 등록 <?php the_time('Y.m.d'); ?> |  이 기사는 14번 공유됐습니다.</span>
							</div>
						<!--	<div class="social-share"> 
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="far fa-envelope"></i></i></a></li>
									<li><a href="#"><i class="fas fa-link"></i></a></li>
								</ul>
							</div> -->
						</div>
						<div class="single-blog-img"> 
							<a href="<?php  echo get_the_post_thumbnail_url(); ?>" data-lightbox="imageesblog" data-title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a>
						</div>
						<div class="single-content"> 
							
							<?php the_content(); ?>
						
						<hr /> 
						<div class="tags"> 
							<?php $tags =   get_the_terms(get_the_id(), 'newstag'); 
							
							if($tags){
								foreach($tags as $tag){
								
									$singletag =  $tag->name;
									
									echo "<a href='#'>#$singletag</a> ";
									
								}
							}
							
							
							?>
						
						</div>
						
						</div>
						
					</div>
					<div class="entry-content"></div>
					<?php endwhile; ?>
					
					<div class="col-md-4 sidebar"> 
					
						<?php dynamic_sidebar('sidebar-1'); ?>
					
					
					
					<!--	<aside> 
							<div class="widget-title"> 
								<h2>인기 기사</h2> 
							</div>
							<ul>
								<li><a href="#">문대통령, 리커창과 회담…종전선언에서 긴밀..</a></li>
								<li><a href="#">경찰, '구치소 접견조사 거부' 드루킹 체포영...</a></li>
								<li><a href="#"><폼페이오 2차>트럼프에 회담前 ‘공개선물’…</a></li>
								<li><a href="#">인권 의례적 거론 그칠까</a></li>
								<li><a href="#">[단독] 의총 끝내려다 제지당한 홍준표…"원외...</a></li>
							</ul>
						</aside>
						<aside> 
							<div class="widget-title"> 
								<h2>관련기</h2> 
							</div>
							<div class="widget-content"> 
								<a href="<?php echo get_template_directory_uri(); ?>/images/sidebar-01.png" data-lightbox="imagesidebar" data-title="My caption"><img src="<?php echo get_template_directory_uri(); ?>/images/sidebar-01.png" alt="" /></a>
								<h2>무기력을 극복하고 내 안의 열정을 깨워라</h2>
								<p>서울 남부지검 형사4부(신영식 부장검사)는 4일 "폭행 혐의와 관련 공소를 제기하기 어렵고 법리적 다툼의 여지가 소지가 있다"며 조 전 전무에 대해 경찰이 신청한 구속영장을 기각했다고 밝혔다.</p>
							</div>
							<div class="widget-content"> 
								<a href="<?php echo get_template_directory_uri(); ?>/images/sidebar-02.png" data-lightbox="imagesidebar" data-title="My caption"><img src="<?php echo get_template_directory_uri(); ?>/images/sidebar-02.png" alt="" /></a>
								<h2>무기력을 극복하고 내 안의 열정을 깨워라</h2>
								<p>서울 남부지검 형사4부(신영식 부장검사)는 4일 "폭행 혐의와 관련 공소를 제기하기 어렵고 법리적 다툼의 여지가 소지가 있다"며 조 전 전무에 대해 경찰이 신청한 구속영장을 기각했다고 밝혔다.</p>
							</div>
						</aside> -->
						
					</div>
					
				</div>
				
			</div>
			
		</div>
<?php get_footer();
