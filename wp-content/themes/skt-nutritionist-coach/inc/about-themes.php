<?php
//about theme info
add_action( 'admin_menu', 'skt_nutritionist_coach_abouttheme' );
function skt_nutritionist_coach_abouttheme() {    	
	add_theme_page( esc_html__('About Theme', 'skt-nutritionist-coach'), esc_html__('About Theme', 'skt-nutritionist-coach'), 'edit_theme_options', 'skt_nutritionist_coach_guide', 'skt_nutritionist_coach_mostrar_guide');   
} 
//guidline for about theme
function skt_nutritionist_coach_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
<div class="wrapper-info">
	<div class="col-left">
   		   <div class="col-left-area">
			  <?php esc_html_e('Theme Information', 'skt-nutritionist-coach'); ?>
		   </div>
          <p><?php esc_html_e('SKT Nutrionist Coach is easy to use, simple, scalable and flexible. It can be applied for industries: sports coach, nutrition coach, health and well being, training, motivation authors, inspiration advisors, personal development, life, psychotherapist, psychotherapy, therapy, online psychological counselor, finance, wealth, entrepreneurs, public speakers, tutor, guide, mentor, dating coaches, relationship advice, copywriters, therapists, medical practitioners, instructors, leaders, course creators, tyle coaches, personal stylists, fashion consultants, and empowerment experts. SEO optimized, lead generation possible, ebook plugins, LMS plugin compatible, WooCommerce compatible. Call to action friendly.','skt-nutritionist-coach'); ?></p>
          <a href="<?php echo esc_url(SKT_NUTRITIONIST_COACH_SKTTHEMES_PRO_THEME_URL); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/free-vs-pro.png" alt="" /></a>
	</div><!-- .col-left -->
	<div class="col-right">			
			<div class="centerbold">
				<hr />
				<a href="<?php echo esc_url(SKT_NUTRITIONIST_COACH_SKTTHEMES_LIVE_DEMO); ?>" target="_blank"><?php esc_html_e('Live Demo', 'skt-nutritionist-coach'); ?></a> | 
				<a href="<?php echo esc_url(SKT_NUTRITIONIST_COACH_SKTTHEMES_PRO_THEME_URL); ?>"><?php esc_html_e('Buy Pro', 'skt-nutritionist-coach'); ?></a> | 
				<a href="<?php echo esc_url(SKT_NUTRITIONIST_COACH_SKTTHEMES_THEME_DOC); ?>" target="_blank"><?php esc_html_e('Documentation', 'skt-nutritionist-coach'); ?></a>
                <div class="space5"></div>
				<hr />                
                <a href="<?php echo esc_url(SKT_NUTRITIONIST_COACH_SKTTHEMES_THEMES); ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sktskill.jpg" alt="" /></a>
			</div>		
	</div><!-- .col-right -->
</div><!-- .wrapper-info -->
<?php } ?>