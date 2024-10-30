<?php
/*
Plugin Name: Maintenance Mode by Arrow Plugins
Plugin URI: https://wordpress.org/plugins/maintenance-mode-arrowplugins
Description: Responsive and easy to use the Maintenance Mode plugin for WordPress.
Author: Arrow Plugins
Author URI: https://www.arrowplugins.com
Version: 1.0.0
License: GplV2
Copyright: 2019 Arrow Plugins
*/


if(!defined('ABSPATH')) exit(); //Break the request if accessed directly

/**
 * Default Constants
 */

define('MMBA_ARROW_PLUGIN_PATH', plugin_dir_path( __FILE__ ) ); 
define('MMBA_ARROW_PLUGIN_URL', plugin_dir_url( __FILE__ ) ); 
define('MMBA_ARROW_PLUGIN_NAME', __( 'Maintenance Mode by Arrow Plugins', 'mmba-wp-arrow' ) );
define('MMBA_ARROW_VERSION', '1.0.0'); // Plugin Version Number.
define('MMBA_ARROW_ID_PREFIX', 'maintenance_wp_by_arrow');

register_uninstall_hook(__FILE__, 'maintenance_wp_by_arrow_uninstall_db');

register_activation_hook( __FILE__,  function(){

    set_transient('_mmba_arrow_welcome_screen_activation_redirect', true, 30);
    maintenance_wp_by_arrow_install_db();
});

add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), function($links){

	$links[] = '<a href="'.esc_url(add_query_arg(array('page' => 'maintenance-mode-page'), admin_url('options-general.php'))).'">Settings</a>';
	return $links;
});

include_once('includes/mmba-wp-admin-menu-settings-by-arrow.php');
include_once('includes/mmba-wp-redirect-maintenance-by-arrow.php');
add_action( 'plugins_loaded', array( 'MMBA_WP_REDIRECTION', 'get_instance' ) );

if(is_admin())
{

	include_once('includes/mmba-wp-config-settings-by-arrow.php');
	include_once('includes/mmba-wp-settings-page-by-arrow.php');
    add_action( 'plugins_loaded', array( 'MMBA_WP_ARROW', 'get_instance' ) );
}

function maintenance_wp_by_arrow_install_db()
{
   global $wpdb;

   $table_name = $wpdb->prefix . "wp_notification_alert";
   if($wpdb->get_var("show tables like '$table_name'") != $table_name) {

    $sql = "CREATE TABLE " . $table_name . " (
                id int(10) NOT NULL AUTO_INCREMENT,
                email text NOT NULL,
                _status char(1) NOT NULL DEFAULT '0',
                UNIQUE KEY id (id)
            );";

      require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
      dbDelta($sql);
      
   }    
}

function maintenance_wp_by_arrow_uninstall_db()
{
    global $wpdb;
    $table = $wpdb->prefix."wp_notification_alert";
    $wpdb->query("DROP TABLE IF EXISTS $table");
}

function maintenance_wp_by_arrow_get_settings()
{
    $settingsContent = get_option(MMBA_ARROW_ID_PREFIX.'_settings_content');
    $settingsDesign = get_option(MMBA_ARROW_ID_PREFIX.'_settings_design');
    $settingsNotification = get_option(MMBA_ARROW_ID_PREFIX.'_settings_notification');
    $settingsSocialLink = get_option(MMBA_ARROW_ID_PREFIX.'_settings_social_link');
    $settingsSocialIcon = get_option(MMBA_ARROW_ID_PREFIX.'_settings_social_icon');
    $settingsAdvance = get_option(MMBA_ARROW_ID_PREFIX.'_settings_advance');
    $settingsTemplate = get_option(MMBA_ARROW_ID_PREFIX.'_settings_template');

    if(empty($settingsContent))
        $settingsContent = array();

    if(empty($settingsDesign))
        $settingsDesign = array();

    if(empty($settingsNotification))
        $settingsNotification = array();

    if(empty($settingsSocialLink))
        $settingsSocialLink = array();

    if(empty($settingsSocialIcon))
        $settingsSocialIcon = array();

    if(empty($settingsAdvance))
        $settingsAdvance = array();

    if(empty($settingsTemplate))
        $settingsTemplate = array();

    $settings = $settingsContent + $settingsDesign + $settingsNotification + $settingsSocialLink + $settingsSocialIcon + $settingsAdvance + $settingsTemplate; 

    return apply_filters( MMBA_ARROW_ID_PREFIX.'_get_settings', $settings );
}

 if(isset($_GET['page']) && $_GET['page']=="maintenance-mode-page"){

 ?>

     <script type="text/javascript">
         setTimeout(function(){

             jQuery("#adminmenu").find("li#toplevel_page_maintenance-mode-page").removeClass("wp-not-current-submenu");
             jQuery("#adminmenu").find("li#toplevel_page_maintenance-mode-page").addClass("current");
             jQuery("#adminmenu").find("li#toplevel_page_maintenance-mode-page").children().removeClass("wp-not-current-submenu");
             jQuery("#adminmenu").find("li#toplevel_page_maintenance-mode-page").children().addClass("current");
//             $("#menu-settings").removeClass('wp-has-current-submenu');
             jQuery("#menu-settings").find("a").removeClass('wp-has-current-submenu');
         }, 1000);
     </script>
 <?php
 }

?>


