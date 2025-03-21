<?php
//about theme info
add_action( 'admin_menu', 'skt_coach_abouttheme' );
function skt_coach_abouttheme() {    	
	add_theme_page( esc_html__('About Theme', 'skt-coach'), esc_html__('About Theme', 'skt-coach'), 'edit_theme_options', 'skt_coach_guide', 'skt_coach_mostrar_guide');   
} 
//guidline for about theme
function skt_coach_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
<div class="wrapper-info">
	<div class="col-left">
   		   <div class="col-left-area">
			  <?php esc_html_e('Theme Information', 'skt-coach'); ?>
		   </div>
          <p><?php esc_html_e('SKT Coach is a coaching related WordPress theme for mentors, therapists, motivational speakers, leaders, counselors, copywriters, course creators, medical practitioners, entrepreneurs, nutritionists, personal development experts, fitness, gym, weight training, educational websites, learning management systems (LMS), training centers, colleges, academies, schools, universities, kindergartens and course-selling platforms. You can create a professional website to showcase your services like (Life, Health, Career, Instructor, GYM, Wellness & Fitness) and introduce yourself to potential clients. SEO optimized, responsive, flexible, scalable and easy to use. Build using Elementor page builder.','skt-coach'); ?></p>
          <a href="<?php echo esc_url(SKT_COACH_SKTTHEMES_PRO_THEME_URL); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/free-vs-pro.png" alt="" /></a>
	</div><!-- .col-left -->
	<div class="col-right">			
			<div class="centerbold">
				<hr />
				<a href="<?php echo esc_url(SKT_COACH_SKTTHEMES_LIVE_DEMO); ?>" target="_blank"><?php esc_html_e('Live Demo', 'skt-coach'); ?></a> | 
				<a href="<?php echo esc_url(SKT_COACH_SKTTHEMES_PRO_THEME_URL); ?>"><?php esc_html_e('Buy Pro', 'skt-coach'); ?></a> | 
				<a href="<?php echo esc_url(SKT_COACH_SKTTHEMES_THEME_DOC); ?>" target="_blank"><?php esc_html_e('Documentation', 'skt-coach'); ?></a>
                <div class="space5"></div>
				<hr />                
                <a href="<?php echo esc_url(SKT_COACH_SKTTHEMES_THEMES); ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sktskill.jpg" alt="" /></a>
			</div>		
	</div><!-- .col-right -->
</div><!-- .wrapper-info -->
<?php } ?>