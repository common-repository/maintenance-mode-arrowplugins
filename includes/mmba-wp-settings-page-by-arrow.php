<?php

	/**
	* 
	*/
	class MMBA_WP_ARROW
	{

	    protected static $instance = null;
		function __construct()
		{
		if(is_admin())
			{
	            add_action( 'admin_menu', array( &$this, MMBA_ARROW_ID_PREFIX.'_create_menus'  ) );
	            add_action( 'admin_init', array( &$this, MMBA_ARROW_ID_PREFIX.'_create_settings' ) );
			}

		}

	    public static function get_instance() 
	    {
	        if ( null == self::$instance ) {
	            self::$instance = new self;
	        }
	        return self::$instance;
	    }

		function maintenance_wp_by_arrow_create_menus()
		{
		    add_menu_page('Maintenance Mode plugin settings', 'Maintenance Mode', 'manage_options', 'maintenance-mode-page', function(){
?>
				<div>
					<h2><?php echo MMBA_ARROW_PLUGIN_NAME ?> <span style="font-size: 10px;"><?php echo MMBA_ARROW_VERSION ?></span></h2>
				</div>
<?php
				
				$this->maintenance_wp_by_arrow_plugin_options_tabs();

?>
				<form id="<?php echo MMBA_ARROW_ID_PREFIX?>_form_container" action="options.php" method="post">
<?php
					$submit_flag = false;
					$page = $_REQUEST['page'];
					foreach (mmba_arrow_get_options() as $section) {
						if(isset($section['menu_slug'])) $menu_slug = $section['menu_slug'];
						if($menu_slug == $page)
						{
							switch ($section['type']) {
                                case 'menu';
                                    break;
								case 'tab':
	                                $tab = $section;
	                                if ( empty( $default_tab ) )
	                                    $default_tab = $section[ 'id' ];
	                                break;
	                            case 'settings':
                                    $current_tab = isset( $_GET[ 'tab' ] ) ? $_GET[ 'tab' ] : $default_tab;
                                    if ( $current_tab == $tab[ 'id' ] ) {
                                        settings_fields( $section[ 'id' ] );
                                        $submit_flag = true;
                                    }
	                            	break;
                                case 'section':
                                    $current_tab = isset( $_GET[ 'tab' ] ) ? $_GET[ 'tab' ] : $default_tab;
                                    if ( $current_tab == $tab[ 'id' ] or $current_tab === false ) {
                                        echo '<div id="'.$section[ 'id' ].'" class="' . MMBA_ARROW_ID_PREFIX . '_container">';
                                        $this->maintenance_wp_by_arrow_do_settings_sections( $section[ 'id' ], $submit_flag);
                                        echo '</div>';
                                    }
                                    break;
							}
						}
					}					
?>
				</form>
<?php
		    }, null, 26);
		}

	    function maintenance_wp_by_arrow_create_settings( )
	    {
	        foreach ( mmba_arrow_get_options() as $k => $settings ) {

	            switch ( $settings[ 'type' ] ) {
	                case 'menu':
	                    $menu_slug = $settings[ 'menu_slug' ];
	                    break;
	                case 'settings':
	                    // if ( empty( $settings[ 'validate_function' ] ) ) {
	                    //     $settings[ 'validate_function' ] = array(
	                    //          &$this,
	                    //         'validate_machine'
	                    //     );
	                    // }
	                    register_setting( $settings[ 'id' ], $settings[ 'id' ]);
	                    $setting_id = $settings[ 'id' ];

	                    break;
	                case 'section':

	                    if ( empty( $settings[ 'callback_empty_string' ] ) ) {
	                        $settings[ 'callback_empty_string' ] = array(
	                             &$this,
	                             'get_empty_string'
	                        );
	                    } else {
	                        $settings[ 'callback_empty_string' ] = $settings[ 'callback_empty_string' ];
	                    }

	                    add_settings_section( $settings[ 'id' ], $settings[ 'label' ], $settings[ 'callback_empty_string' ], $settings[ 'id' ] );
	                    $section_id = $settings[ 'id' ];
	                    break;
	                case 'tab':
	                    break;
	                default:

	                    if ( empty( $settings[ 'build_field_callback' ] ) ) {

	                        $settings[ 'build_field_callback' ] = array(
	                             &$this,
	                             'get_fields'
	                        );
	                    }

	                    add_settings_field	( $settings[ 'id' ], $settings[ 'label' ], $settings[ 'build_field_callback' ], $section_id, $section_id, array(
	                        'id' => $settings[ 'id' ],
	                        'desc' => ( isset( $settings[ 'desc' ] ) ? $settings[ 'desc' ] : '' ),
	                        'setting_id' => $setting_id,
	                        'class' => ( isset( $settings[ 'class' ] ) ? $settings[ 'class' ] : '' ),
	                        'type' => $settings[ 'type' ],
   	                        'append_text' => $settings[ 'append_text' ],
	                        'default_value' => ( isset( $settings[ 'default_value' ] ) ? $settings[ 'default_value' ] : '' ),
	                        'option_values' => ( isset( $settings[ 'option_values' ] ) ? $settings[ 'option_values' ] : '' )
                    	) );
	            }
	        }
	    }

	    function get_empty_string(){
	    	echo '';
	    }

		 function get_fields($args){

		    extract( $args ); 

		    // Load defaults
		    $defaults = array( );
		    $socialLinks = array();

		    foreach ( mmba_arrow_get_options() as $fields ) {
		        switch ( $fields[ 'type' ] ) {
	                case 'settings':
	                case 'section':
	                case 'tab':
	                    break;
		            default:
		                if ( isset( $fields[ 'default_value' ] ) ) 
		                {
		                    $defaults[ $fields[ 'default_value' ] ] = $fields[ 'default_value' ];
		                }

		                if(isset($fields['social_link']))
		                {
		                	$socialLinks[$fields['id']] = $fields['social_link'];
		                }
		        }
		    }

		    $options = get_option( $setting_id );

		    $options = wp_parse_args( $options, $defaults, $socialLinks);
		    $linkPath = MMBA_ARROW_PLUGIN_URL . 'themes/';
		    $path = MMBA_ARROW_PLUGIN_PATH . 'includes/mmba-wp-field-types-by-arrow.php';
		    include($path);
            if ( !empty( $desc ) ) {
                echo "<small class='description'>{$desc}</small>";
            }
		 }

		function maintenance_wp_by_arrow_plugin_options_tabs()
		{

			$menu_slug = null;
		    $page = $_REQUEST['page'];	
	        $uses_tabs   = false;
	        $current_tab = isset( $_GET[ 'tab' ] ) ? $_GET[ 'tab' ] : false;

	        //Check if this config uses tabs
	        foreach ( mmba_arrow_get_options() as $tabs ) {
	            if ( $tabs[ 'type' ] == 'tab' ) {
	                $uses_tabs = true;
	                break;
	            }
	        }

	        if ( $uses_tabs ) {
	            echo '<div id="main_' . MMBA_ARROW_ID_PREFIX . '"> <ul>';
	            $c = 1;
	            foreach ( mmba_arrow_get_options() as $options ) {

                    if ( isset( $options[ 'menu_slug' ] ) ) {
                        $menu_slug = $options[ 'menu_slug' ];
                    }
                    if ( $menu_slug == $page && $options[ 'type' ] == 'tab' ) {
                        $active = '';
                        if ( $current_tab ) {
                            $active = $current_tab == $options[ 'id' ] ? 'active' : '';
                        } elseif ( $c == 1 ) {
                            $active = 'active';
                        }

                        $pth = "'?page=" . $menu_slug . "&tab=". $options['id' ]."'";
                        echo '<li><a onclick="mmba_wp_form_submit(' . $pth . ')" class="' . $active . '" href="#">' . $options[ 'label' ] . '</a></li>';
                        $c++;
                    }
	            }

	            echo '<li style="float: right;"> <a target="_blank" href="'.home_url().'?mmba_arrow_preview=true&TB_iframe=true&width=640&height=632" > '.__('Live Preview','mmba-wp-arrow').'</a> </li>';
	            echo '</ul> </div>';

	        }
		}

	    function maintenance_wp_by_arrow_do_settings_sections( $page, $show_submit )
	    {

	        global $wp_settings_sections, $wp_settings_fields;

	        if ( !isset( $wp_settings_sections ) || !isset( $wp_settings_sections[ $page ] ) )
	            return;

	        foreach ( (array) $wp_settings_sections[ $page ] as $section ) {

	            echo "<h3 class='" . MMBA_ARROW_ID_PREFIX . "_title'>{$section['title']}</h3>\n";
	            echo '<div class="' . MMBA_ARROW_ID_PREFIX . '_field">';
	            call_user_func( $section[ 'callback' ], $section );
	            if ( !isset( $wp_settings_fields ) || 
	            		!isset( $wp_settings_fields[ $page ] ) || 
	            			!isset( $wp_settings_fields[ $page ][ $section[ 'id' ] ] ) ) continue;

	            echo '<table class="' . MMBA_ARROW_ID_PREFIX . '_form_table">';
	            $this->maintenance_wp_by_arrow_do_settings_fields( $page, $section[ 'id' ] );
	            echo '</table>';
	            if($show_submit): ?>
	                <p>
		                <input name="save_changes" type="submit" value="<?php _e( 'Save All Changes', 'mmba-wp-arrow' ); ?>"/>
	                </p>
	            <?php endif;
	            echo '</div>';
	        }
	    }

	    function maintenance_wp_by_arrow_do_settings_fields($page, $section) 
	    {
	          global $wp_settings_fields;

	          if ( !isset($wp_settings_fields) || 
	          			!isset($wp_settings_fields[$page]) || 
	          				!isset($wp_settings_fields[$page][$section]) ) return;

	          foreach ( (array) $wp_settings_fields[$page][$section] as $field ) {

	              echo '<tr valign="top">';
	              if ( !empty($field['args']['label_for']) )
	                  echo '<th scope="row"><label for="' . $field['args']['label_for'] . '">' . $field['title'] . '</label></th>';
	              else
	                  echo '<th scope="row"><strong>' . $field['title'] . '</strong><!--<br>'.$field['args']['desc'].'--></th>';
	              echo '<td>';
	              call_user_func($field['callback'], $field['args']);
	              echo '</td>';
	              echo '</tr>';
	          }
	      }
	}
?>