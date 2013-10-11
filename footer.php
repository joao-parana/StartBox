<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package sbx
 */
?>
		</div><!-- .wrap -->
	</div><!-- #content -->
	<div class="footer-widgets">
		<div class="wrap">
			<?php sb_do_sidebar( 'footer_widget_area_1', 'footer-widget-area-1', 'span-4' ); ?>
			<?php sb_do_sidebar( 'footer_widget_area_2', 'footer-widget-area-1', 'span-4' ); ?>
			<?php sb_do_sidebar( 'footer_widget_area_3', 'footer-widget-area-1', 'span-4' ); ?>
		</div>
	</div><!-- .footer-widgets -->
	<footer id="colophon" class="site-footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
		<div class="site-info clear">
			<?php do_action( 'sbx_credits' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>