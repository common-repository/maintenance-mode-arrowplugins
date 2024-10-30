<?php 
	require_once( $_SERVER['DOCUMENT_ROOT'] . '/wordpress/wp-config.php' );
	require_once( $_SERVER['DOCUMENT_ROOT'] . '/wordpress/wp-includes/wp-db.php' );

	$email = $_REQUEST['email'];

	if(strlen($email)>0)
	{

	    global $wpdb;
	    $table_name = $wpdb->prefix . 'wp_notification_alert';

	    $check_existing = $wpdb->get_results("SELECT * FROM `$table_name` WHERE `email` = '$email'");

	    if (empty($check_existing)) 
	    {
	    	echo "Added";
	    	return $wpdb->insert( $table_name, array( 'email' => $email, '_status' => '0' ));
	    }
	    else 
    	{
	    	echo 'Already Exists';
	    	return;
		}		
	    wp_die();
	}
?>