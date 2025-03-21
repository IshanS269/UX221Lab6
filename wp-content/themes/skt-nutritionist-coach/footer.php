<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package SKT Nutritionist Coach
 */
$footer_text = get_theme_mod('footer_text');
$footerlogo = get_theme_mod('footer_logo_image'); 
$footerlogo_link = get_theme_mod('footer_logo_url');
$fb_link = esc_url(get_theme_mod('fb_link')); 
$twitt_link = esc_url(get_theme_mod('twitt_link'));
$linked_link = esc_url(get_theme_mod('linked_link'));
$instagram_link = esc_url(get_theme_mod('insta_link'));

$hidefooterbox = get_theme_mod('hide_footer_bar', 1);

?>
<div id="footer">
<?php if( $hidefooterbox == '') { ?>
<div id="footer-wrapper" class="ft-infobox">
		<div class="footerarea">
            <div class="container footerinfobox">
                <div class="footer-infobox-left">
                	<img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/footer-info-phn-icon.png"><div class="fot-phone"><h5><?php echo esc_html__('Call Us','skt-nutritionist-coach'); ?></h5><span><?php echo esc_html__('123 456 7890','skt-nutritionist-coach'); ?></span></div>
                </div>
                <div class="footer-infobox-center">
                	<?php 
				if (!empty($footerlogo)) { ?>
                <div class="footer-logo">
                	<?php if (!empty($footerlogo_link)) { ?>
                	<a href="<?php echo esc_url($footerlogo_link); ?>">
                    <?php
					}
					?>
                    <img src="<?php echo esc_url($footerlogo); ?>" />
                    <?php 
					if (!empty($footerlogo_link)) { ?>
                    </a>
                    <?php } ?>
                 </div>
                 <?php } ?>
                </div>
                <div class="footer-infobox-right">
                
                <div class="social-icons">
    		<?php 
            if (!empty($fb_link)) { ?><a title="<?php echo esc_attr__('Facebook','skt-nutritionist-coach'); ?>" class="fb" target="_blank" href="<?php echo esc_url($fb_link); ?>"></a><?php } if (!empty($twitt_link)) { ?><a title="<?php echo esc_attr__('Twitter','skt-nutritionist-coach'); ?>" class="tw" target="_blank" href="<?php echo esc_url($twitt_link); ?>"></a><?php } if (!empty($instagram_link)) { ?><a title="<?php echo esc_attr__('Instagram','skt-nutritionist-coach'); ?>" class="insta" target="_blank" href="<?php echo esc_url($instagram_link); ?>"></a><?php } if (!empty($linked_link)) { ?><a title="<?php echo esc_attr__('Linkedin','skt-nutritionist-coach'); ?>" class="in" target="_blank" href="<?php echo esc_url($linked_link); ?>"></a> 
            <?php } ?>   
            </div>
                
                </div>
                <div class="clear"></div>
            </div>
        </div>
</div>
<?php } ?>
<div class="clear"></div>
<div class="copyright-area">
<?php if ( is_active_sidebar( 'fc-1-ntc' ) || is_active_sidebar( 'fc-2-ntc' ) || is_active_sidebar( 'fc-3-ntc' ) || is_active_sidebar( 'fc-4-ntc' ) ) : ?>
<div class="footerarea ftrbg">
    	<div class="container footer ftr-widg">
        	<div class="footer-row">
            <?php if ( is_active_sidebar( 'fc-1-ntc' ) ) : ?>
            <div class="cols-3 widget-column-1">  
              <?php dynamic_sidebar( 'fc-1-ntc' ); ?>
            </div><!--end .widget-column-1-->                  
    		<?php endif; ?> 
			<?php if ( is_active_sidebar( 'fc-2-ntc' ) ) : ?>
            <div class="cols-3 widget-column-2">  
            <?php dynamic_sidebar( 'fc-2-ntc' ); ?>
            </div><!--end .widget-column-2-->
            <?php endif; ?> 
			<?php if ( is_active_sidebar( 'fc-3-ntc' ) ) : ?>    
            <div class="cols-3 widget-column-3">  
            <?php dynamic_sidebar( 'fc-3-ntc' ); ?>
            </div><!--end .widget-column-3-->
			<?php endif; ?> 	
			<?php if ( is_active_sidebar( 'fc-4-ntc' ) ) : ?>    
            <div class="cols-3 widget-column-4">  
            <?php dynamic_sidebar( 'fc-4-ntc' ); ?>
            </div><!--end .widget-column-3-->
			<?php endif; ?>             	         
            <div class="clear"></div>
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
        <?php bloginfo('name'); ?> <?php esc_html_e('Theme By ','skt-nutritionist-coach');?>
        <?php if( is_home() && is_front_page() || is_home() || is_front_page()) {?>
        <a href="<?php echo esc_url('https://www.sktthemes.org/shop/nutritionist-coach-wordpress-theme/');?>" target="_blank">
        <?php esc_html_e('SKT Nutritionist Coach','skt-nutritionist-coach'); ?>
        </a>
        <?php } else {?>
        <?php esc_html_e('SKT Nutritionist Coach','skt-nutritionist-coach'); ?>
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