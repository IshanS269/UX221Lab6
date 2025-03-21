<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="container">
 *
 * @package SKT Nutritionist Coach
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
<?php endif; ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<a class="skip-link screen-reader-text" href="#content_navigator">
<?php esc_html_e( 'Skip to content', 'skt-nutritionist-coach' ); ?>
</a>
<?php
	$showpagebanner = esc_html(get_theme_mod('inner_page_banner_option', 1));
	$showpostbanner = esc_html(get_theme_mod('inner_post_banner_option', 1));
	$pagethumb = esc_html(get_theme_mod('inner_page_banner_thumb'));
	$postthumb = esc_html(get_theme_mod('inner_post_banner_thumb'));
	$left_heading_text = get_theme_mod('left_heading_text'); 
	$left_button_text = get_theme_mod('left_button_text');
	$left_button_link = get_theme_mod('left_button_link'); 
	$right_heading_text = get_theme_mod('right_heading_text'); 
	$right_button_text = get_theme_mod('right_button_text');
	$right_button_link = get_theme_mod('right_button_link'); 

	$hidetopbar = get_theme_mod('hide_header_topbar', 1);	
?>
<div id="main-set">
<div class="header">
<div class="mywrap">
<div class="header_wrap layer_wrapper">
<div class="topheader-area">
<div class="container">
<div class="left">
<?php if( $hidetopbar == '') { ?>
<span class="phnarea">
<?php if(!empty($left_heading_text)){?><span><?php echo esc_html($left_heading_text); ?></span><?php } ?><?php if(!empty($left_button_link)){?><a href="<?php echo esc_url($left_button_link); ?>" target="_blank"><?php echo esc_html($left_button_text); ?></a><?php } ?></span>
<?php } ?>
</div>
<div class="centerlogo">
<div class="logo">
<?php skt_coach_the_custom_logo(); ?>
        <div class="clear"></div>
		<?php	
        $description = get_bloginfo( 'description', 'display' );
        ?>
        <div id="logo-main">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <h2 class="site-title"><?php bloginfo('name'); ?></h2>
        <?php if ( $description || is_customize_preview() ) :?>
        <p class="site-description"><?php echo esc_html($description); ?></p>                          
        <?php endif; ?>
        </a>
        </div> 
</div>

</div>
<div class="right">
<?php if( $hidetopbar == '') { ?>
<span class="appointment">
<?php if(!empty($right_heading_text)){?><span><?php echo esc_html($right_heading_text); ?></span><?php } ?><?php if(!empty($right_button_link)){?><a href="<?php echo esc_url($right_button_link); ?>" target="_blank"><?php echo esc_html($right_button_text); ?></a><?php } ?></span>
<?php } ?>
</div>
<div class="clear"></div>
</div>
</div>
<div class="container centerlogoarea">
 <div id="navigation"><nav id="site-navigation" class="main-navigation">
				<button type="button" class="menu-toggle">
					<span></span>
					<span></span>
					<span></span>
				</button>
		<?php wp_nav_menu( array('theme_location' => 'primary', 'container' => 'ul', 'menu_id' => 'primary', 'menu_class' => 'primary-menu menu' ) ); ?>
			</nav></div>
</div>
</div>
</div>    
  </div>
  <div class="clear"></div> 
  
  </div><!--main-set-->
  <?php if( !is_home() && !is_front_page() && is_page()) {?>
      <div class="clear"></div>
      <div class="inner-banner-thumb">
      	<?php if($showpagebanner == '') {?>
        <?php 	if ( has_post_thumbnail() ) {
                    echo esc_url(the_post_thumbnail('full'));
                }else{
			if(!empty($pagethumb)){ ?>
            <img src="<?php echo esc_url($pagethumb); ?>" />
            <?php } } ?>
        <?php } ?>    
        <div class="banner-container <?php if($showpagebanner != '') {?>black-title<?php }?>"><h1><?php the_title(); ?></h1></div>
        <div class="clear"></div>
      </div>
  <?php } ?>
  <?php if( !is_home() && !is_front_page() && !is_page() && is_single() && 'post' == get_post_type()) {?>
      <div class="clear"></div>
      <div class="inner-banner-thumb">
      	<?php if($showpostbanner == '') {?>
        <?php 	if ( has_post_thumbnail() ) {
                    echo esc_url(the_post_thumbnail('full'));
                }else{
			if(!empty($postthumb)){ ?>
            <img src="<?php echo esc_url($postthumb); ?>" />
            <?php }  } ?>
         <?php } ?>   
        <div class="banner-container <?php if($showpostbanner != '') {?>black-title<?php }?>"><h1><?php the_title(); ?></h1></div>
        <div class="clear"></div>
      </div>
  <?php } ?>  
  <?php if (is_category() || is_archive()) { ?>
  <div class="clear"></div>
  <div class="inner-banner-thumb">
      	<?php if($showpostbanner == '') {?>
        <?php 
			if(!empty($postthumb)){ ?>
            <img src="<?php echo esc_url($postthumb); ?>" />
            <?php }   ?>
         <?php } ?>   
        <div class="banner-container <?php if($showpostbanner != '') {?>black-title<?php }?>">
  	    <?php if ( class_exists( 'WooCommerce' ) ) {
		if(is_shop()) {
			?><h1><?php woocommerce_page_title(); ?></h1><?php
		}else{
		?><h1><?php the_archive_title(); ?></h1><?php	
		}
	}else{ ?>
    <h1><?php the_archive_title(); ?></h1>
    <?php } ?>	
  </div>
        <div class="clear"></div>
      </div>
  <?php } ?>  
  <div class="clear"></div> 
  