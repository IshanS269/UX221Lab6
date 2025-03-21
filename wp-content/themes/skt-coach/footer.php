<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package SKT Coach
 */
$footer_text = get_theme_mod('footer_text');
?>
<div id="footer">
<div class="copyright-area">
<?php if ( is_active_sidebar( 'fc-1' )) : ?>
<div class="footerarea">
    	<div class="container footer ftr-widg">
        	<div class="footer-row">
            <?php if ( is_active_sidebar( 'fc-1' ) ) : ?>
            <div class="cols-3 widget-column-1">  
              <?php dynamic_sidebar( 'fc-1' ); ?>
            </div><!--end .widget-column-1-->                  
    		<?php endif; ?> 
            </div>
        </div><!--end .container--> 
</div>
<?php endif; ?>         
<div class="copyright-wrapper">
<div class="container">
     <div class="copyright-txt">
     	<?php if (!empty($footer_text)) { ?>
	 		<?php echo esc_html($footer_text); ?>
		<?php } ?>
        <?php bloginfo('name'); ?> <?php esc_html_e('Theme By ','skt-coach');?>
       	<?php if( is_home() && is_front_page() || is_home() || is_front_page()) {?>
        <a href="<?php echo esc_url('https://www.sktthemes.org/shop/free-speaker-wordpress-theme/');?>" target="_blank">
        <?php esc_html_e('SKT Coach','skt-coach'); ?>
        </a>
        <?php } else {?>
        <?php esc_html_e('SKT Coach','skt-coach'); ?>
        <?php } ?>
        </div>
     <div class="clear"></div>
</div>           
</div>
</div><!--end #copyright-area-->
</div>
<?php wp_footer(); ?>
</body>
</html>