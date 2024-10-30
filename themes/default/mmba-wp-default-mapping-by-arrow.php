<?php

function maintenance_wp_by_arrow_get_title()
{
	$response = maintenance_wp_by_arrow_get_settings();
	extract($response);

	if(!empty($maintenance_wp_by_arrow_seo_title)) return $maintenance_wp_by_arrow_seo_title;

	return '';
}

function maintenance_wp_by_arrow_get_seo_description()
{
	$response = maintenance_wp_by_arrow_get_settings();
	extract($response);

	if(!empty($maintenance_wp_by_arrow_seo_meta_description)) return '<meta name="description" content="'.esc_attr( $maintenance_wp_by_arrow_seo_meta_description ).'">';

	return '';
}

function maintenance_wp_by_arrow_get_favicon() 
{
	$response = maintenance_wp_by_arrow_get_settings();
	extract( $response );

	if ( !empty( $maintenance_wp_by_arrow_favicon ) ) return '<link href="'.esc_attr( $maintenance_wp_by_arrow_favicon ).'" rel="shortcut icon" type="image/x-icon" />';

	return '';
}

function maintenance_wp_by_arrow_get_customcss() 
{
	$response = maintenance_wp_by_arrow_get_settings();
	extract( $response );

	if ( !empty( $maintenance_wp_by_arrow_custom_css ) ) '<style type="text/css">'.$maintenance_wp_by_arrow_custom_css.'</style>';
	
	return '';
}

function maintenance_wp_by_arrow_get_headline($templateHeadline, $templteCss) 
{
	$response = maintenance_wp_by_arrow_get_settings();
	extract( $response );

	$heading = "";
	$templateCss = "";

   	if(strlen($maintenance_wp_by_arrow_templates) > 0 && $maintenance_wp_by_arrow_templates > 0)
   	{
   		$templateCss = $templteCss[$maintenance_wp_by_arrow_templates];
   		if(strlen($maintenance_wp_by_arrow_headline) > 0) 
   			$heading = $maintenance_wp_by_arrow_headline;	
		else 
		{
			$heading = $templateHeadline[$maintenance_wp_by_arrow_templates];
		}

   	} else
		$heading = $maintenance_wp_by_arrow_headline;

	if ( strlen($heading) > 0 ) return '<h1 style="' . $templateCss . '" id="' . MMBA_ARROW_ID_PREFIX . '_headline">'.$heading.'</h1>';

	return '';

} 	

function maintenance_wp_by_arrow_get_msg_description($templateDescription, $templteCss) 
{
	$response = maintenance_wp_by_arrow_get_settings();
	extract( $response );

	$description = "";
	$templateCss = "";

	if($maintenance_wp_by_arrow_templates == 6)
	{
?>
		<script type="text/javascript">
			setTimeout(function(){

				document.body.style.background = "url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAICAYAAAAx8TU7AAAAG0lEQVQIW2NkYGB4BsQogBGXYBo2lVgFqW0mAAMyBTnkxKBjAAAAAElFTkSuQmCC) repeat";	

				document.body.style.margin = "0";
			}, 1000);
			
			

		</script>
<?php
	} else if($maintenance_wp_by_arrow_templates == 8)
	{
?>
		<script type="text/javascript">
			setTimeout(function(){

				document.body.style.height = "105%";
				document.body.style.background = "#fff";
				document.body.style.width = "50%";
				document.body.style.margin = "0";

			}, 1000);
		</script>
<?php

	}

   	if(strlen($maintenance_wp_by_arrow_templates) > 0 && $maintenance_wp_by_arrow_templates > 0)
   	{
   		$templateCss = $templteCss[$maintenance_wp_by_arrow_templates];
   		if(strlen($maintenance_wp_by_arrow_msg_description) > 0) 
   			$description = $maintenance_wp_by_arrow_msg_description;	
		else 
		{
			$description = $templateDescription[$maintenance_wp_by_arrow_templates];
		}

   	} else
		$description = $maintenance_wp_by_arrow_msg_description;

	if ( strlen($description) > 0 ) return '<h1 style="' . $templateCss . '" id="' . MMBA_ARROW_ID_PREFIX . '_msg_description">'.$description.'</h1>';

	return '';
} 	

function maintenance_wp_by_arrow_get_logo($templateLogoCss) 
{
	$response = maintenance_wp_by_arrow_get_settings();
	extract( $response );
	
	$logo = "";
	$logoCss = "";
	if($maintenance_wp_by_arrow_templates != 7 && $maintenance_wp_by_arrow_templates != 9)
	{
	   	if(strlen($maintenance_wp_by_arrow_templates) > 0 && $maintenance_wp_by_arrow_templates > 0)
	   	{
	   		$logoCss = $templateLogoCss[$maintenance_wp_by_arrow_templates];
	   		if(strlen($maintenance_wp_by_arrow_logo) > 0) 
	   			$logo = $maintenance_wp_by_arrow_logo;	
			else 
				$logo = MMBA_ARROW_PLUGIN_URL.'themes/templates/'.$maintenance_wp_by_arrow_templates.'/images/logo.png';

	   	} else
			$logo = $maintenance_wp_by_arrow_logo;

		if ( strlen( $logo ) > 0 ) return "<img style='" . $logoCss . "' id='" . MMBA_ARROW_ID_PREFIX . "_logo' src='$logo'>";

		return '';
	}
}

function maintenance_wp_by_arrow_get_footer($templateDescription, $templteCss) 
{
	$response = maintenance_wp_by_arrow_get_settings();
	extract( $response );

	$description = "";
	$templateCss = "";

   	if(strlen($maintenance_wp_by_arrow_templates) > 0 && $maintenance_wp_by_arrow_templates > 0)
   	{
   		$templateCss = $templteCss[$maintenance_wp_by_arrow_templates];
   		if(strlen($maintenance_wp_by_arrow_footer) > 0) 
   			$description = $maintenance_wp_by_arrow_footer;	
		else 
		{
			$description = $templateDescription[$maintenance_wp_by_arrow_templates];
		}

   	} else
		$description = $maintenance_wp_by_arrow_footer;

	if ( !empty( $description ) ) return '<h1 style="' . $templateCss . '" id="'. MMBA_ARROW_ID_PREFIX .'_footer">'.$description.'</h1>';

	return '';
} 	

function maintenance_wp_by_arrow_get_footer_credits() 
{
	$response = maintenance_wp_by_arrow_get_settings();
	extract( $response );

	$output = '';

	if ( !empty( $maintenance_wp_by_arrow_footer_credits ) ) {
		$output = '<div id="' . MMBA_ARROW_ID_PREFIX . '_footer_credit">';
		$output .= '<a target="_blank" href="#"><img src="' . MMBA_ARROW_PLUGIN_URL . 'images/credit.jpeg"></a>';
		$output .= '</div>';

	}

	return $output;
} 	

function maintenance_wp_by_arrow_get_notify_me($notificationCss, $notifcationButtonCss)
{
	$response = maintenance_wp_by_arrow_get_settings();
	extract($response);
	$output = '';

	$emailPlaceHolder = "";
	$value = "";
	$nCss = "";
	$nBCss = "";

   	if(strlen($maintenance_wp_by_arrow_templates) > 0 && $maintenance_wp_by_arrow_templates > 0)
   	{
   		$nCss = $notificationCss[$maintenance_wp_by_arrow_templates];
   		$nBCss = $notifcationButtonCss[$maintenance_wp_by_arrow_templates];

   		if(strlen($maintenance_wp_by_arrow_email_placeholder) > 0) 
   			$emailPlaceHolder = $maintenance_wp_by_arrow_email_placeholder;
   		else 
   		{

   			if($maintenance_wp_by_arrow_templates == 1) $emailPlaceHolder = "Get Notified (Email Address)";
   			else if($maintenance_wp_by_arrow_templates == 2) $emailPlaceHolder = "Get notify by email";
   			else if($maintenance_wp_by_arrow_templates == 3) $emailPlaceHolder = "Email";
   			else if($maintenance_wp_by_arrow_templates == 4) $emailPlaceHolder = "Email Address";
   			else if($maintenance_wp_by_arrow_templates == 5) $emailPlaceHolder = "Get Notified (Email Address)";
   			else if($maintenance_wp_by_arrow_templates == 6) $emailPlaceHolder = "Enter your email";
   			else if($maintenance_wp_by_arrow_templates == 7) $emailPlaceHolder = "Enter your email address";
   			else if($maintenance_wp_by_arrow_templates == 8) $emailPlaceHolder = "";
   			else if($maintenance_wp_by_arrow_templates == 9) $emailPlaceHolder = "";
    			
   		}

   		if(strlen($maintenance_wp_by_arrow_notify_button_text) > 0 && $maintenance_wp_by_arrow_templates != 1)
   		{
   			$value = $maintenance_wp_by_arrow_notify_button_text;
   		}
   		else
   		{
   			if($maintenance_wp_by_arrow_templates == 1) $value = "";
   			else if($maintenance_wp_by_arrow_templates == 2) $value = "SEND";
   			else if($maintenance_wp_by_arrow_templates == 3) $value = "Subscribe";
   			else if($maintenance_wp_by_arrow_templates == 4) $value = "Get Notified";
   			else if($maintenance_wp_by_arrow_templates == 5) $value = "Go";
   			else if($maintenance_wp_by_arrow_templates == 6) $value = "Keep me updated";
   			else if($maintenance_wp_by_arrow_templates == 7) $value = "Get Notified!";
   			else if($maintenance_wp_by_arrow_templates == 8) $value = "";
   			else if($maintenance_wp_by_arrow_templates == 9) $value = "";
   		}

   	}
   	else 
   	{
   		$emailPlaceHolder = $maintenance_wp_by_arrow_email_placeholder;
		$value = $maintenance_wp_by_arrow_notify_button_text;
   	}

	if(!empty($maintenance_wp_by_arrow_email_status))
	{
		$output = '<div id="' . MMBA_ARROW_ID_PREFIX . '_notify_me">';
		$output .= '<p><input id="' . MMBA_ARROW_ID_PREFIX . '_notification_alert" style="' . $nCss . '" type="email" placeholder="' . $emailPlaceHolder . '" maxlength="' . $maintenance_wp_by_arrow_email_length . '" />';
		$output .= '&nbsp;';
		$output .= '<input onclick="' . MMBA_ARROW_ID_PREFIX . '_notification_alert();" style="' . $nBCss . '" type="button" value="' . $value . '" /></p>';
		$output .= '</div>';
	}

	return $output;
}

function maintenance_wp_by_arrow_get_social_link()
{
	$response = maintenance_wp_by_arrow_get_settings();
	extract($response);
	$output = '';

	$output = '<div id="' . MMBA_ARROW_ID_PREFIX . '_social_link">';

	if (!empty($maintenance_wp_by_arrow_social_link_status)) 
	{
		if(!empty($maintenance_wp_by_arrow_social_link_fb_active) && !empty($maintenance_wp_by_arrow_social_link_fb_page_name))
		{
			$output .= '<a target="_blank" href="https://www.facebook.com/' . $maintenance_wp_by_arrow_social_link_fb_page_name . '">FacebookShare</a>';
		}

		if (!empty($maintenance_wp_by_arrow_social_link_twitter_active) && !empty($maintenance_wp_by_arrow_social_link_twitter_page_name)) 
		{
			$output .= '&nbsp; <a target="_blank" href="https://www.twitter.com/' . $maintenance_wp_by_arrow_social_link_twitter_page_name . '">TwitterShare</a>';
		}	

		if (!empty($maintenance_wp_by_arrow_social_link_googleplus_active) && !empty($maintenance_wp_by_arrow_social_link_googleplus_page_name)) 
		{
			$output .= '&nbsp; <a target="_blank" href="https://www.plus.google.com/' . $maintenance_wp_by_arrow_social_link_googleplus_page_name . '">Google+Share</a>';
		}	

		if (!empty($maintenance_wp_by_arrow_social_link_linkedin_active) && !empty($maintenance_wp_by_arrow_social_link_linkedin_page_name)) 
		{
			$output .= '&nbsp; <a target="_blank" href="https://www.linkedin.com/in/' . $maintenance_wp_by_arrow_social_link_linkedin_page_name . '">LinkedinShare</a>';
		}
	}	

	$output .= '</div>';

	return $output;
}

function maintenance_wp_by_arrow_get_social_post()
{
	$response = maintenance_wp_by_arrow_get_settings();
	extract($response);

	$output = '';

	$output = '<div id="' . MMBA_ARROW_ID_PREFIX . '_social_post">';

	if(!empty($maintenance_wp_by_arrow_social_icon_status))
	{
		if(strlen($maintenance_wp_by_arrow_templates) > 0 && $maintenance_wp_by_arrow_templates > 0)
			$maintenance_wp_by_arrow_social_icon_path = "templates/" . $maintenance_wp_by_arrow_templates . "/images";

		if(strlen($maintenance_wp_by_arrow_social_icon_theme) > 0 && $maintenance_wp_by_arrow_social_icon_theme > 0)
			$maintenance_wp_by_arrow_social_icon_path = "socialicon/".$maintenance_wp_by_arrow_social_icon_theme;
		

		if(!empty($maintenance_wp_by_arrow_social_icon_facebook_active))
		{
			$output .= '<a target="_blank" href="http://www.facebook.com/sharer.php?u=' . get_permalink() . '"> <img src="' . MMBA_ARROW_PLUGIN_URL . 'themes/' . $maintenance_wp_by_arrow_social_icon_path . '/facebook.png" alt="Facebook" width="42" height="42"> </a>';
		}

		if(!empty($maintenance_wp_by_arrow_social_icon_twitter_active))
		{
			$output .= ' <script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>';
			$output .= ' <a target="_blank" href="http://twitter.com/share" data-url="' . get_permalink() . '" data-via="Admin" data-text="" data-related="Admin:Founder of WPBeginner" data-count="vertical"><img src="' . MMBA_ARROW_PLUGIN_URL . 'themes/' . $maintenance_wp_by_arrow_social_icon_path . '/twitter.png" alt="Twitter" width="42" height="42"></a>';
		}
	
		if(!empty($maintenance_wp_by_arrow_social_icon_googleplus_active))
		{
			$output .= ' <a target="_blank" href="https://plus.google.com/share?url=' . get_permalink() . '" onclick="javascript:window.open(this.href,\'\', \'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600\');return false;"><img src="' . MMBA_ARROW_PLUGIN_URL . 'themes/' . $maintenance_wp_by_arrow_social_icon_path . '/googleplus.png" alt="Google+" width="42" height="42"></a>';
		}

		if(!empty($maintenance_wp_by_arrow_social_icon_linkedin_active))
		{
			$output .= ' <a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=' . get_permalink() . '" title="Share on LinkedIn"><img src="' . MMBA_ARROW_PLUGIN_URL . 'themes/' . $maintenance_wp_by_arrow_social_icon_path . '/linkedin.png" alt="LinkedIn" width="42" height="42"></a>';

		}
	}

	$output .= '</div>';

	return $output;
}

function maintenance_wp_by_arrow_get_progress_bar()
{

	$response = maintenance_wp_by_arrow_get_settings();
	extract($response);

	$output = '';

	if(!empty($maintenance_wp_by_arrow_advance_progress_bar_status))
	{
		if(!empty($maintenance_wp_by_arrow_advance_progress_bar_timezone))
			date_default_timezone_set($maintenance_wp_by_arrow_advance_progress_bar_timezone);

		$current = date('m/d/Y H:i', time());

		if(!empty($maintenance_wp_by_arrow_advance_progress_bar_start_date))
		{
			$startDateTime = $maintenance_wp_by_arrow_advance_progress_bar_start_date;
		}

		if(!empty($maintenance_wp_by_arrow_advance_progress_bar_end_date))
		{
			$endDateTime = $maintenance_wp_by_arrow_advance_progress_bar_end_date;
		}

		if(!empty($maintenance_wp_by_arrow_advance_progress_bar_start_time))
		{
			$startDateTime .= ' ' . $maintenance_wp_by_arrow_advance_progress_bar_start_time;
		}

		if(!empty($maintenance_wp_by_arrow_advance_progress_bar_end_time))
		{
			$endDateTime .= ' ' . $maintenance_wp_by_arrow_advance_progress_bar_end_time;
		}


		if(isset($current)) $current = strtotime($current);
		if(isset($startDateTime)) $startDateTime = strtotime($startDateTime);
		if(isset($endDateTime)) $endDateTime = strtotime($endDateTime);

		if($startDateTime===$endDateTime){

			if($startDateTime<=$current) $percentage = 100;
			else $percentage = 0; 

		} 
		else $percentage = round(100 * ($current-$startDateTime)/($endDateTime-$startDateTime));
 		
 		if($percentage>=100) $percentage = 100;

 		if($current>=$startDateTime){

			$output .= '<div class="maintenance_wp_by_arrow_progress"> <div class="maintenance_wp_by_arrow_progress_bar maintenance_wp_by_arrow_progress_bar_success" style="width:' . $percentage . '%"> ' . $percentage . '% Complete (success) </div> </div>';
 		}
	}
	return $output;
}

function maintenance_wp_by_arrow_get_count_down($templateCss, $counterCss)
{
	$response = maintenance_wp_by_arrow_get_settings();
	extract($response);

	$css = "";

   	if(strlen($maintenance_wp_by_arrow_templates) > 0 && $maintenance_wp_by_arrow_templates > 0)
   	{
   		$css = $templateCss[$maintenance_wp_by_arrow_templates].$counterCss[$maintenance_wp_by_arrow_templates];
   	}

	$output = '';

	if(!empty($maintenance_wp_by_arrow_advance_count_down_status))
	{
		$output = '<p id="' . MMBA_ARROW_ID_PREFIX . '_count_down_timer"> <input type="hidden" value="' . $maintenance_wp_by_arrow_templates . '" id="' . MMBA_ARROW_ID_PREFIX . '_template_selected_id" /> <span style="' . $css;

		if($maintenance_wp_by_arrow_templates==3) $output .= ' margin-right: 5%; ';
		else if($maintenance_wp_by_arrow_templates==4) $output .= ' margin-left: 60px; ';

		$output .= '" class="' . MMBA_ARROW_ID_PREFIX . '_counter_div" id="' . MMBA_ARROW_ID_PREFIX . '_days"></span> <span style="' . $css;

		if($maintenance_wp_by_arrow_templates==3) $output .= ' margin-right: 5%; ';

		$output .= '" class="' . MMBA_ARROW_ID_PREFIX . '_counter_div" id="' . MMBA_ARROW_ID_PREFIX . '_hours"></span> <span style="' . $css;

		if($maintenance_wp_by_arrow_templates==3) $output .= ' margin-right: 5%; ';

		$output .= '" class="' . MMBA_ARROW_ID_PREFIX . '_counter_div" id="' . MMBA_ARROW_ID_PREFIX . '_minutes"></span> <span style="' . $css . '" class="' . MMBA_ARROW_ID_PREFIX . '_counter_div" id="' . MMBA_ARROW_ID_PREFIX . '_seconds"></span> <input type="hidden" id="' . MMBA_ARROW_ID_PREFIX . '_start_date_time" value="' . $maintenance_wp_by_arrow_advance_count_down_start_date . ' ' . $maintenance_wp_by_arrow_advance_count_down_start_time . '" /> <input type="hidden" id="' . MMBA_ARROW_ID_PREFIX . '_end_date_time" value="' . $maintenance_wp_by_arrow_advance_count_down_end_date . ' ' . $maintenance_wp_by_arrow_advance_count_down_end_time . '" /> </p>';
	}

	return $output;
}

function maintenance_wp_by_arrow_get_head()
{
	$response = maintenance_wp_by_arrow_get_settings();
	extract( $response );

	if(!empty($maintenance_wp_by_arrow_background_video)){
		$isInfinity = "";
		if(empty($maintenance_wp_by_arrow_background_video_repeat) || $maintenance_wp_by_arrow_background_video_repeat==0)
			$isInfinity = "loop";
?>

		<script type="text/javascript">

			window.onload = function() {

				document.body.innerHTML="<video style=\"width: 100%; height: 100%;\" id=\"maintenance_wp_by_arrow_background_video\" autoplay muted plays-inline <?php echo $isInfinity ?>>\n"+
				"  <source src=\"<?php echo $maintenance_wp_by_arrow_background_video; ?>\">\n"+
				"</video>\n"+document.body.innerHTML;

<?php
				if(!empty($maintenance_wp_by_arrow_background_video_repeat) && $maintenance_wp_by_arrow_background_video_repeat>0){
?>
					var iterations = 1;

					document.getElementById('maintenance_wp_by_arrow_background_video').addEventListener('ended', function(){
						if (iterations++ < <?php echo $maintenance_wp_by_arrow_background_video_repeat?>) this.play();   
					}, false);

<?php					
				}
?>
			}
		</script>

<?php
	}

	$result .= '<link rel="stylesheet" href="'.MMBA_ARROW_PLUGIN_URL.'css/mmba-wp-arrow-live.css">'."\n";
	if(!empty($maintenance_wp_by_arrow_headline_font))
	{
?>

		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo $maintenance_wp_by_arrow_headline_font; ?>">

<?php 
	}

	if(!empty($maintenance_wp_by_arrow_footer_font))
	{
?>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo $maintenance_wp_by_arrow_footer_font; ?>">
<?php		
	}

	if(!empty($maintenance_wp_by_arrow_notify_button_font))
	{
?>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo $maintenance_wp_by_arrow_notify_button_font; ?>">		
<?php		
	}

	if(!empty($maintenance_wp_by_arrow_description_font))
	{
?>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo $maintenance_wp_by_arrow_description_font; ?>">
<?php		
	}

	$result .= '<style type="text/css">'."\n";
	ob_start();

	if(!empty($maintenance_wp_by_arrow_headline_font))
	{
?>
		h1, h2, h3, h4, h5, h6{
			font-family: <?php echo $maintenance_wp_by_arrow_headline_font; ?>;
		}
<?php 
	}
?>

    html{
        <?php
        	if(strlen($maintenance_wp_by_arrow_templates) > 0 && $maintenance_wp_by_arrow_templates > 0)
        		$background_image = MMBA_ARROW_PLUGIN_URL.'themes/templates/'.$maintenance_wp_by_arrow_templates.'/images/background.jpg';
        	else 
        		$background_image = $maintenance_wp_by_arrow_background_image;

        	if(!empty($background_image) && empty($maintenance_wp_by_arrow_background_video)){
        		if(isset($maintenance_wp_by_arrow_bg_cover) && in_array('1', $maintenance_wp_by_arrow_bg_cover)){
 		?>
					background: url('<?php echo $background_image ?>') no-repeat center center;
 		<?php       			
 					if(isset($maintenance_wp_by_arrow_bg_size) && $maintenance_wp_by_arrow_bg_size == 'contain'){
		?>
						-webkit-background-size: contain;
						-moz-background-size: contain;
						-o-background-size: contain;
						background-size: contain;
		<?php
 					}else{
 		?>
						-webkit-background-size: cover;
						-moz-background-size: cover;
						-o-background-size: cover;
						background-size: cover;
 		<?php
 					}
        		} else {
        ?>
					background: <?php echo $maintenance_wp_by_arrow_bg_cover;?> url('<?php echo $background_image; ?>') no-repeat top center fixed;
        <?php
        		}

        	} else if(empty($maintenance_wp_by_arrow_background_video)){

	        	if(!empty($maintenance_wp_by_arrow_background_color)){
        ?>	
					background: <?php echo $maintenance_wp_by_arrow_background_color ?>;
        <?php
	    	    }

        	}
        ?>
	}
        <?php

        	if(!empty($maintenance_wp_by_arrow_text_color)){
        ?>
				.mmba-wp-arrow body{
					color: <?php echo $maintenance_wp_by_arrow_text_color?>;
				}
        <?php
        	}

        	if(!empty($maintenance_wp_by_arrow_link_color)){
        		if(empty($maintenance_wp_by_arrow_headline_color)) $maintenance_wp_by_arrow_headline_color = $maintenance_wp_by_arrow_link_color;
        	}

        	if(!empty($maintenance_wp_by_arrow_headline_color)){
        		if(empty($maintenance_wp_by_arrow_link_color)) $maintenance_wp_by_arrow_link_color = $maintenance_wp_by_arrow_headline_color;
        	}

        	if(!empty($maintenance_wp_by_arrow_headline_color)){
        ?>
				
				#<?php echo MMBA_ARROW_ID_PREFIX;?>_headline{
					color:<?php echo $maintenance_wp_by_arrow_headline_color?>;
				}
        <?php
        	}

        	if(!empty($maintenance_wp_by_arrow_headline_size)){
		?>

				#<?php echo MMBA_ARROW_ID_PREFIX;?>_headline{
					font-size:<?php echo $maintenance_wp_by_arrow_headline_size.'px'?>;
				}
		<?php
        	}
		?>

				#<?php echo MMBA_ARROW_ID_PREFIX;?>_msg_description{
		<?php
		        	if(!empty($maintenance_wp_by_arrow_description_color)){
		?>
						color:<?php echo $maintenance_wp_by_arrow_description_color?>;
		<?php
		        	}
		
		        	if(!empty($maintenance_wp_by_arrow_description_size)){
		?>
						font-size:<?php echo $maintenance_wp_by_arrow_description_size.'px'?>;
		<?php		        		
		        	}

		        	if(!empty($maintenance_wp_by_arrow_description_font)){
		?>
						font-family:<?php echo $maintenance_wp_by_arrow_description_font;?>;
		<?php		        		
		        	}
		?>
				}

				#<?php echo MMBA_ARROW_ID_PREFIX;?>_footer{
		<?php
	        		if(!empty($maintenance_wp_by_arrow_footer_color)){

		?>
						color:<?php echo $maintenance_wp_by_arrow_footer_color?>;
		<?php 
	    	    	}

   		        	if(!empty($maintenance_wp_by_arrow_footer_size)){
		?>
						font-size:<?php echo $maintenance_wp_by_arrow_footer_size.'px'?>;
		<?php
   		        	}
		        	if(!empty($maintenance_wp_by_arrow_footer_font)){
		?>
						font-family: <?php echo $maintenance_wp_by_arrow_footer_font;?>;
		<?php
		        	}
		?>
					
				}
		<?php

        	if(!empty($maintenance_wp_by_arrow_link_color)){
        ?>
				.mmba-wp-arrow a, .mmba-wp-arrow a:visited, .mmba-wp-arrow a:hover, .mmba-wp-arrow a:active, .mmba-wp-arrow a:focus{
					color:<?php echo $maintenance_wp_by_arrow_link_color?>;
				}
        <?php
        	}
        ?>


        	#<?php echo MMBA_ARROW_ID_PREFIX;?>_notify_me input[type=email]{
				padding: 6px 12px;
			    border: 1px solid #ccc;
			    border-radius: 5px;	
		<?php

				if(!empty($maintenance_wp_by_arrow_email_width)){
		?>

				    max-width: <?php echo $maintenance_wp_by_arrow_email_width; ?>px;
		<?php
				}
		?>
	        }

        	#<?php echo MMBA_ARROW_ID_PREFIX;?>_notify_me input[type=button]{

				padding: 5px 12px;
				cursor: pointer;
		<?php

				if(!empty($maintenance_wp_by_arrow_notify_button_border_radius)){
		?>

				    border-radius: <?php echo $maintenance_wp_by_arrow_notify_button_border_radius; ?>px;
		<?php
				}

				if(!empty($maintenance_wp_by_arrow_notify_button_color)){
		?>

				    color: <?php echo $maintenance_wp_by_arrow_notify_button_color; ?>;
		<?php
				}

				if(!empty($maintenance_wp_by_arrow_notify_button_size)){
		?>

				    font-size: <?php echo $maintenance_wp_by_arrow_notify_button_size; ?>px;
		<?php
				}

				if(!empty($maintenance_wp_by_arrow_notify_button_font))
				{
		?>
					font-family: <?php echo $maintenance_wp_by_arrow_notify_button_font;?>;
		<?php
				}
		?>
	        }

	        #<?php echo MMBA_ARROW_ID_PREFIX;?>_social_link{
				text-align: center;
		    }

	        #<?php echo MMBA_ARROW_ID_PREFIX;?>_social_post{
				text-align: center;
		    }
		<?php
	$result .= ob_get_clean();
	$result .= '</style>'."\n";

	return $result;
}

?>