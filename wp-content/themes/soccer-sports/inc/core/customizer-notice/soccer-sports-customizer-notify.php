<?php

class Soccer_Sports_Customizer_Notify {

	private $config = array(); // Declare $config property
	
	private $soccer_sports_recommended_actions;
	
	private $recommended_plugins;
	
	private static $instance;
	
	private $soccer_sports_recommended_actions_title;
	
	private $soccer_sports_recommended_plugins_title;
	
	private $dismiss_button;
	
	private $soccer_sports_install_button_label;
	
	private $soccer_sports_activate_button_label;
	
	private $soccer_sports_deactivate_button_label;

	
	public static function init( $config ) {
		if ( ! isset( self::$instance ) && ! ( self::$instance instanceof Soccer_Sports_Customizer_Notify ) ) {
			self::$instance = new Soccer_Sports_Customizer_Notify;
			if ( ! empty( $config ) && is_array( $config ) ) {
				self::$instance->config = $config;
				self::$instance->setup_config();
				self::$instance->setup_actions();
			}
		}

	}

	
	public function setup_config() {

		global $soccer_sports_customizer_notify_recommended_plugins;
		global $soccer_sports_customizer_notify_soccer_sports_recommended_actions;

		global $soccer_sports_install_button_label;
		global $soccer_sports_activate_button_label;
		global $soccer_sports_deactivate_button_label;

		$this->soccer_sports_recommended_actions = isset( $this->config['soccer_sports_recommended_actions'] ) ? $this->config['soccer_sports_recommended_actions'] : array();
		$this->recommended_plugins = isset( $this->config['recommended_plugins'] ) ? $this->config['recommended_plugins'] : array();

		$this->soccer_sports_recommended_actions_title = isset( $this->config['soccer_sports_recommended_actions_title'] ) ? $this->config['soccer_sports_recommended_actions_title'] : '';
		$this->soccer_sports_recommended_plugins_title = isset( $this->config['soccer_sports_recommended_plugins_title'] ) ? $this->config['soccer_sports_recommended_plugins_title'] : '';
		$this->dismiss_button            = isset( $this->config['dismiss_button'] ) ? $this->config['dismiss_button'] : '';

		$soccer_sports_customizer_notify_recommended_plugins = array();
		$soccer_sports_customizer_notify_soccer_sports_recommended_actions = array();

		if ( isset( $this->recommended_plugins ) ) {
			$soccer_sports_customizer_notify_recommended_plugins = $this->recommended_plugins;
		}

		if ( isset( $this->soccer_sports_recommended_actions ) ) {
			$soccer_sports_customizer_notify_soccer_sports_recommended_actions = $this->soccer_sports_recommended_actions;
		}

		$soccer_sports_install_button_label    = isset( $this->config['soccer_sports_install_button_label'] ) ? $this->config['soccer_sports_install_button_label'] : '';
		$soccer_sports_activate_button_label   = isset( $this->config['soccer_sports_activate_button_label'] ) ? $this->config['soccer_sports_activate_button_label'] : '';
		$soccer_sports_deactivate_button_label = isset( $this->config['soccer_sports_deactivate_button_label'] ) ? $this->config['soccer_sports_deactivate_button_label'] : '';

	}

	
	public function setup_actions() {

		// Register the section
		add_action( 'customize_register', array( $this, 'soccer_sports_plugin_notification_customize_register' ) );

		// Enqueue scripts and styles
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'soccer_sports_customizer_notify_scripts_for_customizer' ), 0 );

		/* ajax callback for dismissable recommended actions */
		add_action( 'wp_ajax_quality_customizer_notify_dismiss_action', array( $this, 'soccer_sports_customizer_notify_dismiss_recommended_action_callback' ) );

		add_action( 'wp_ajax_ti_customizer_notify_dismiss_recommended_plugins', array( $this, 'soccer_sports_customizer_notify_dismiss_recommended_plugins_callback' ) );

	}

	
	public function soccer_sports_customizer_notify_scripts_for_customizer() {

		wp_enqueue_style( 'soccer-sports-customizer-notify-css', get_template_directory_uri() . '/core/includes/customizer-notice/css/soccer-sports-customizer-notify.css', array());

		wp_enqueue_style( 'plugin-install' );
		wp_enqueue_script( 'plugin-install' );
		wp_add_inline_script( 'plugin-install', 'var pagenow = "customizer";' );

		wp_enqueue_script( 'updates' );

		wp_enqueue_script( 'soccer-sports-customizer-notify-js', get_template_directory_uri() . '/core/includes/customizer-notice/js/soccer-sports-customizer-notify.js', array( 'customize-controls' ));
		wp_localize_script(
			'soccer-sports-customizer-notify-js', 'soccersportsCustomizercompanionObject', array(
				'ajaxurl'            => admin_url( 'admin-ajax.php' ),
				'template_directory' => get_template_directory_uri(),
				'base_path'          => admin_url(),
				'activating_string'  => __( 'Activating', 'soccer-sports' ),
			)
		);

	}

	
	public function soccer_sports_plugin_notification_customize_register( $wp_customize ) {

		
		require_once get_template_directory() . '/core/includes/customizer-notice/soccer-sports-customizer-notify-section.php';

		$wp_customize->register_section_type( 'Soccer_Sports_Customizer_Notify_Section' );

		$wp_customize->add_section(
			new Soccer_Sports_Customizer_Notify_Section(
				$wp_customize,
				'soccer-sports-customizer-notify-section',
				array(
					'title'          => $this->soccer_sports_recommended_actions_title,
					'plugin_text'    => $this->soccer_sports_recommended_plugins_title,
					'dismiss_button' => $this->dismiss_button,
					'priority'       => 0,
				)
			)
		);

	}

	
	public function soccer_sports_customizer_notify_dismiss_recommended_action_callback() {

		global $soccer_sports_customizer_notify_soccer_sports_recommended_actions;

		$action_id = ( isset( $_GET['id'] ) ) ? $_GET['id'] : 0;

		echo esc_html( $action_id ); /* this is needed and it's the id of the dismissable required action */ 

		if ( ! empty( $action_id ) ) {
			
			if ( get_option( 'soccer_sports_customizer_notify_show' ) ) {

				$soccer_sports_customizer_notify_show_soccer_sports_recommended_actions = get_option( 'soccer_sports_customizer_notify_show' );
				switch ( $_GET['todo'] ) {
					case 'add':
						$soccer_sports_customizer_notify_show_soccer_sports_recommended_actions[ $action_id ] = true;
						break;
					case 'dismiss':
						$soccer_sports_customizer_notify_show_soccer_sports_recommended_actions[ $action_id ] = false;
						break;
				}
				update_option( 'soccer_sports_customizer_notify_show', $soccer_sports_customizer_notify_show_soccer_sports_recommended_actions );

				
			} else {
				$soccer_sports_customizer_notify_show_soccer_sports_recommended_actions = array();
				if ( ! empty( $soccer_sports_customizer_notify_soccer_sports_recommended_actions ) ) {
					foreach ( $soccer_sports_customizer_notify_soccer_sports_recommended_actions as $soccer_sports_lite_customizer_notify_recommended_action ) {
						if ( $soccer_sports_lite_customizer_notify_recommended_action['id'] == $action_id ) {
							$soccer_sports_customizer_notify_show_soccer_sports_recommended_actions[ $soccer_sports_lite_customizer_notify_recommended_action['id'] ] = false;
						} else {
							$soccer_sports_customizer_notify_show_soccer_sports_recommended_actions[ $soccer_sports_lite_customizer_notify_recommended_action['id'] ] = true;
						}
					}
					update_option( 'soccer_sports_customizer_notify_show', $soccer_sports_customizer_notify_show_soccer_sports_recommended_actions );
				}
			}
		}
		die(); 
	}

	
	public function soccer_sports_customizer_notify_dismiss_recommended_plugins_callback() {

		$action_id = ( isset( $_GET['id'] ) ) ? $_GET['id'] : 0;

		echo esc_html( $action_id ); /* this is needed and it's the id of the dismissable required action */

		if ( ! empty( $action_id ) ) {

			$soccer_sports_lite_customizer_notify_show_recommended_plugins = get_option( 'soccer_sports_customizer_notify_show_recommended_plugins' );

			switch ( $_GET['todo'] ) {
				case 'add':
					$soccer_sports_lite_customizer_notify_show_recommended_plugins[ $action_id ] = false;
					break;
				case 'dismiss':
					$soccer_sports_lite_customizer_notify_show_recommended_plugins[ $action_id ] = true;
					break;
			}
			update_option( 'soccer_sports_customizer_notify_show_recommended_plugins', $soccer_sports_lite_customizer_notify_show_recommended_plugins );
		}
		die(); 
	}

}
