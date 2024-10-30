<?php

add_action("admin_init", function(){
  
  // Bail if no activation redirect
  if (!get_transient('_mmba_arrow_welcome_screen_activation_redirect' ) ) return;

  // Delete the redirect transient
  delete_transient( '_mmba_arrow_welcome_screen_activation_redirect' );

  // Bail if activating from network, or bulk
  if(is_network_admin() || isset($_GET['activate-multi'])) return;

  wp_safe_redirect( add_query_arg(array('page' => 'maintenance-mode-page'), admin_url('options-general.php')));

});


add_action( 'admin_enqueue_scripts', function(){

    wp_enqueue_style( MMBA_ARROW_ID_PREFIX.'_jquery_ui_css', MMBA_ARROW_PLUGIN_URL.'css/mmba-wp-jquery-ui.min.css', false, MMBA_ARROW_VERSION, 'screen');
    wp_enqueue_style( MMBA_ARROW_ID_PREFIX.'_jquery_ui_datetimepicker_css', MMBA_ARROW_PLUGIN_URL.'css/jquery.datetimepicker.min.css', false, MMBA_ARROW_VERSION, 'screen');
    wp_enqueue_style( MMBA_ARROW_ID_PREFIX.'_notification', MMBA_ARROW_PLUGIN_URL.'css/mmba-wp-main.css', false, MMBA_ARROW_VERSION, 'screen');
    wp_enqueue_script( MMBA_ARROW_ID_PREFIX.'_form_container_js', MMBA_ARROW_PLUGIN_URL . 'js/mmba-wp-main.js', array() );
    wp_enqueue_script( MMBA_ARROW_ID_PREFIX.'_jquery_ui_js', MMBA_ARROW_PLUGIN_URL . 'js/mmba-wp-jquery-ui.min.js', array() );
    wp_enqueue_script( MMBA_ARROW_ID_PREFIX.'_jquery_ui_datetimepicker_js', MMBA_ARROW_PLUGIN_URL . 'js/jquery.datetimepicker.full.min.js', array() );
    wp_enqueue_media();
});

?>