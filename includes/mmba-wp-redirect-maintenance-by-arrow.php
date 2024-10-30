<?php

/**
* 
*/
class MMBA_WP_REDIRECTION
{
	
    protected static $instance = null;

	function __construct()
	{
		extract(maintenance_wp_by_arrow_get_settings());

        if(((!empty($maintenance_wp_by_arrow_status) && $maintenance_wp_by_arrow_status === '1')) || 
        	(isset($_GET['mmba_arrow_preview']) && $_GET['mmba_arrow_preview'] == 'true')){


                if(!empty($maintenance_wp_by_arrow_by_pass_url) && 
                        ($maintenance_wp_by_arrow_by_pass_url==='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] || 
                            $maintenance_wp_by_arrow_by_pass_url==='https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ||
                                $maintenance_wp_by_arrow_by_pass_url.'/'==='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] || 
                                    $maintenance_wp_by_arrow_by_pass_url.'/'==='https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']) ){
                    return '';
                }else{

                    add_action( 'template_redirect', array(&$this,MMBA_ARROW_ID_PREFIX.'_render_maintenance_page'));            
                }

                add_action('admin_bar_menu', function($wp_admin_bar){

                    $arg = array(
                        'id'        =>  'mmba-arrow-notice',
                        'title'     =>  'Arrow Maintenance Mode Active',
                        'parent'    =>  'top-secondary',
                        'href'      =>  admin_url().'options-general.php?page=maintenance-mode-page',
                        'meta'      =>  array( 'class' => 'mmba-arrow-mode-active' )
                    );

                    $wp_admin_bar->add_menu($arg);

                }, 1000);
        }
	}

    public static function get_instance() {

        if ( null == self::$instance ) self::$instance = new self;

        return self::$instance;
    }

    function maintenance_wp_by_arrow_render_maintenance_page()
    {
    	extract(maintenance_wp_by_arrow_get_settings());
    	
        if(!isset($maintenance_wp_by_arrow_status)){
            $err =  new WP_Error('error', __("Please enter your settings.", 'mmba-wp-arrow'));
            echo $err->get_error_message();
            exit();
        }

        if(empty($_GET['mmba_arrow_preview'])){
            $_GET['mmba_arrow_preview'] = false;
        }

        $preview_flag = false;
        if ((isset($_GET['mmba_arrow_preview']) && $_GET['mmba_arrow_preview'] == 'true')) {
            $preview_flag = true;

        } 

        if($preview_flag === false){
            if(is_user_logged_in()){
                return false;
            }
        }

        if($maintenance_wp_by_arrow_status == '1'){
            header('HTTP/1.1 503 Service Temporarily Unavailable');
            header('Status: 503 Service Temporarily Unavailable');
            header('Retry-After: 86400'); // retry in a day
        }


        if(!defined('DONOTCACHEPAGE')) {
              define('DONOTCACHEPAGE', true);
        }
        if(!defined('DONOTCDN')) {
          define('DONOTCDN', true);
        }
        if(!defined('DONOTCACHEDB')) {
          define('DONOTCACHEDB', true);
        }
        if(!defined('DONOTMINIFY')) {
          define('DONOTMINIFY', true);
        }
        if(!defined('DONOTCACHEOBJECT')) {
          define('DONOTCACHEOBJECT', true);
        }
        nocache_headers();


        $defaultTemplate = $this->maintenance_wp_by_arrow_get_default_template();
        include_once( MMBA_ARROW_PLUGIN_PATH.'themes/default/mmba-wp-default-mapping-by-arrow.php' );
        
        $templateHeadline = array("", "COMING SOON", "We Are Coming Very Soon!", "We will be back with new and exciting feature!", "We are currently working on an awesome new site.", "COMING SOON IN", "COMMING SOON!", "WeBuild", "UNDER CONSTRUCTION.", "COUNTDOWN TEMPLATE");

        $templateDescription = array("", "We're working hard to finish the development of this site. Sign up for updates using the form below!", "", "turpis gravida vel donec id tuarpis tellus odio magna", "Ut sagittis tortor vel elit venenatis blandit. Donec eu libero et urna pretium molestie. Aenean non sollicitudin ipsum. Duis et tempor leo.", "", "BE READY, THERE IS JUST:", "We're working hard to improve our website and we'll ready to launch after", "We are working hard to bring to you our great project soon.", "WE ARE STILL TWEAKING FEW DETAILS, STAY TUNED!");

        $templateLogoCss = array("", "max-height: 100px; max-width: 100px;", "max-height: 77px; max-width: 350px; margin-top: 50px;", "margin: 50px 0px 70px 0px; display: block; margin-right: auto; margin-left: auto;", "background-size: cover; padding-top: 100px; color: #fff; position: relative; z-index: 100; display: inline-block; margin-right: 65%;", "font-size: 36px; font-weight: 300; text-transform: uppercase; letter-spacing: -1px; color: #292928; margin-top: 50px;", "", "", "margin: 10% 50% 0 0", ""); 

        $templateCss = array("", "color: white; font-family: Courier New, Courier, monospace; font-size: 25px; padding-top: 50px; margin: 0 auto; max-width: 55%;", "margin-bottom: 20px; font-size: 60px; line-height: 1.5; font-family: Work Sans, Arial, sans-serif; font-weight: 300; margin: 0; padding: 0; color: white;", "color: #ffffff; font-weight: 700; font-size: 35px; font-family: Cabin, sans-serif;", "font-size: 30px; line-height: 40px; font-weight: 300; margin-bottom: 24px; color: #fff; padding-left: 70px; margin: 25px 0 25px; font-family: Open Sans, sans-serif; width: 375px;", "    background: #fff; text-transform: uppercase; font-size: 16px; font-weight: 300; margin-top: 35px; padding: 0 2px; text-shadow: none; color: #000; font-family: Roboto, sans-serif; width: 200px; margin-left: auto; margin-right: auto;", "color: #fd3267; font-size: 5.9vw; width: 100%; text-align: center; font-family: Montserrat; font-weight: 440; margin: 0;", "margin-top: 50px; color: #fff; font-size: 45px; font-weight: 900; letter-spacing: -1px; font-family: 'Lato', sans-serif;", "margin-right: 20%; font-family: 'Roboto', Helvetica, Arial, sans-serif; font-weight: 700; line-height: 1.2; color: #000; letter-spacing: 0.1em;", "margin-top: 50px; text-transform: uppercase; font-size: 50px; text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6); margin-bottom: 40px; letter-spacing: 0.13em; font-family: 'Source Sans Pro', sans-serif; font-weight: 700; line-height: 1.2; color: #ffffff;");

        $templateDescpCss = array("", "color: white; font-family: Courier New, Courier, monospace; font-size: 25px; padding-top: 50px; margin: 0 auto; max-width: 55%;", "", "color: #ffffff; font-style: italic; font-size: 25px; margin-top: 20px; margin-bottom: 60px; font-family: inherit; font-weight: 500; line-height: 1.1;", "margin-bottom: 62px; color: #fff; margin: 0 0 50px; font-family: 'Open Sans', sans-serif; font-size: 13px; line-height: 24px; color: #ffffff; font-weight: 400; width: 445px; padding-left: 65px;", "", "font-weight: 500; font-size: 2vw; margin: 0 auto; color: #fff; width: 100%; text-align: center; top: 45%;", "color: #fff; font-size: 24px; font-weight: 300; font-family: 'Lato', sans-serif;", "font-size: 22.5px; font-weight: 300; line-height: 1.4; font-family: 'Roboto', Helvetica, Arial, sans-serif;", "text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6); text-transform: uppercase; letter-spacing: 0.13em; margin-top: 20px; margin-bottom: 20px; font-family: 'Source Sans Pro', sans-serif; font-weight: 700; line-height: 1.2; color: #ffffff; font-size: 30px;");

        $notificationCss = array("", "width: 423px; height: 60px; border: 0; padding: 0 35px; font-size: 26px; color: #8598bb; font-family: Helvetica Neue, Helvetica, Arial; border-bottom-left-radius: 15px; border-top-left-radius: 15px;", "width: 400px; height: 50px; font-size: 16px; background: white; border: transparent; margin-right: -5px;", "display: inline-block; width: auto; vertical-align: middle; font: inherit; resize: none; height: 38px; width: 234px !important; border: 0; border-radius: 20px; margin-left: 10px; margin-right: 10px;", "height: 42px; background-color: transparent; background-image: none; border: 1px solid #fff; display: table-cell; position: relative; z-index: 2; width: 35%; margin-left: 80px; padding: 6px 12px; font-size: 14px; line-height: 1.42857143; color: #555; float: left;", "border-radius: 5px 5px 5px 5px; background: #fff; font-family: Roboto, sans-serif; font-weight: 400; border: 2px solid #fff; font-size: 12px; color: #999; padding: 8px; width: 30%;", "text-align: center; width: 100%; top: 66%; width: 30%; padding: 16px; font-size: 0.85em; color: #fff; outline: none; font-weight: 600; background: none; border: 1px solid #FFFFFF; padding-right: 25%;", "height: 42px; width: 250px !important; border-radius: 0; border: none; padding: 6px 12px; font-size: 14px; color: #555; background-color: #fff; background-image: none;", "", "width: 300px;background: rgba(255, 255, 255, 0.3); border: solid 1px #fff; color: #767d7d; height: 34px; padding: 6px 12px; font-size: 14px; line-height: 1.42857143; border-radius: 4px;");

        $notificationButtonCss = array("", "background: url('" . MMBA_ARROW_PLUGIN_URL . "themes/templates/1/images/submit.jpg'); width: 150px; height: 61px; border: none; padding-bottom: 22px; margin-left: -10px;", "margin-top: .3em; padding: 1.26em !important; margin-left: -5px; background: #FA4659 !important; color: #fff; border: none !important; font-size: 14px; text-transform: uppercase;", "outline: none; color: #ffffff; background-color: #FF7E00; border-color: #adadad; text-decoration: none; padding: 10px 35px; border-radius: 20px; border: 0; font-style: italic; font-weight: 700; font-size: 14px; transition-duration: 0.4s; font-family: Cabin, sans-serif;", "margin-left: 10px; height: 42px; background-color: #fff; color: #31aae2; font-size: 13px; font-weight: 600; z-index: 2; padding: 6px 12px; font-family: Open Sans, sans-serif; margin-right: 600px; border: 1px solid transparent;", "background: #fcfdff; border-radius: 5px; font-size: 16px; font-family: Roboto, sans-serif; cursor: pointer; font-weight: 700; padding: 7px 0; border: none;", "border: 1px solid #fd3267; color: #fd3267; font-family: Montserrat, sans-serif; padding: 16px 16px; font-size: 0.85em; -webkit-transition: 0.5s all; -moz-transition: 0.5s all; -o-transition: 0.5s all; -ms-transition: 0.5s all; background: none; outline: none; cursor: pointer;", "font-weight: 700; color: #fff; background-color: #5cacce; border-color: #5cacce; display: inline-block; padding: 12px 20px; margin-bottom: 0; font-size: 14px; cursor: pointer; border: 1px solid transparent;", "", "color: #fff; background-color: #c9302c; border-color: #ac2925; font-weight: 700; font-family: 'Source Sans Pro', sans-serif; text-transform: uppercase; letter-spacing: 0.08em; padding: 6px 12px; font-size: 14px; line-height: 1.42857143; border-radius: 3px; border: 1px solid transparent; cursor: pointer;");

        $counterCss = array("", "font-size: 80; !important", "display: inline-block; width: 110px; height: 120px; background: rgba(0, 0, 0, 0.2); border-bottom: 4px solid rgba(250, 70, 89, 0.5); margin: 0 7px; position: relative; animation: pulse 1.01s ease infinite;", "font-size: 50px !important; margin: 1.3em 0px 1em;", "width: 30px !important; margin-bottom: 0; background-size: cover; padding: 170px 0 150px; position: relative; z-index: 100; display: inline-block; float: left; text-align: center; border-right: 1px solid #827977; padding: 10px 40px 0px 28px;", "margin-top: 5px; margin-bottom: 0px; background: none !important; color: #fff !important; width: 80px !important; border-right: 1px solid #988984; line-height: 20px;", "font-size: 5.8vw; width: 150px; letter-spacing: 5px; font-weight: 300; color: #fff;", "font-size: 48px; color: #fff; line-height: 1.1em; margin: 0; font-weight: 300", "", "margin-right: -15px; margin-left: -15px; width: 25%; font-size: 124px; line-height: 1; font-weight: 200; text-align: center; color: #fff; text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6); -webkit-box-sizing: border-box; -moz-box-sizing: border-box;");

        if(empty($html)){
    	    $template_tags = array(
	            '{Title}' => maintenance_wp_by_arrow_get_title(),
	            '{MetaDescription}' => maintenance_wp_by_arrow_get_seo_description(),
	            '{Favicon}' => maintenance_wp_by_arrow_get_favicon(),
	            '{CustomCSS}' => maintenance_wp_by_arrow_get_customcss(),
	            '{Headline}' => maintenance_wp_by_arrow_get_headline($templateHeadline, $templateCss),
	            '{MsgDescription}' => maintenance_wp_by_arrow_get_msg_description($templateDescription, $templateDescpCss),
                '{Logo}' => maintenance_wp_by_arrow_get_logo($templateLogoCss),
                '{Head}' => maintenance_wp_by_arrow_get_head(),
                '{Footer}' => maintenance_wp_by_arrow_get_footer($templateDescription, $templateCss),
                '{Credit}' => maintenance_wp_by_arrow_get_footer_credits(),
                '{Notify}' => maintenance_wp_by_arrow_get_notify_me($notificationCss, $notificationButtonCss),
                '{SocialLink}' => maintenance_wp_by_arrow_get_social_link(),
                '{SocialPost}' => maintenance_wp_by_arrow_get_social_post(),
                '{ProgressBar}' => maintenance_wp_by_arrow_get_progress_bar(),
                '{Countdown}' => maintenance_wp_by_arrow_get_count_down($templateCss, $counterCss)
            );

			echo strtr($defaultTemplate, $template_tags);
        }else{
            echo $html;
        }
        exit();            
    }

    function maintenance_wp_by_arrow_get_default_template(){
        $file = file_get_contents(MMBA_ARROW_PLUGIN_PATH.'themes/default/mmba-wp-default-by-arrow.php');
        return $file;
    }
	
}

?>