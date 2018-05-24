<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package levator
 */

?>
		<?php $scroll_to_top = get_field('scroll_to_top','option'); 
			if($scroll_to_top): ?>
		<div class="to-top"> 
			<a href="#"><i class="fas fa-arrow-up"></i></a>
		</div>
		<?php endif;  ?>
		<footer class="footer-section"> 
			<div class="footer-logo"> 
				<?php $footer_logo = get_field('footer_logo','option'); 
				if($footer_logo): ?>
				<a href="<?php echo home_url(); ?>"><img src="<?php echo $footer_logo['url']; ?>" alt="<?php echo $footer_logo['title']; ?>" /></a>
				<?php endif;  ?>
			</div>
			<?php $footer_text = get_field('footer_text','option'); 
				if($footer_text): ?>
				
				<?php echo $footer_text; ?>
			
			<?php endif;  ?>
		</footer>
  
      <?php wp_footer(); ?>
    </body>
</html>
