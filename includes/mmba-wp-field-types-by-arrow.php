<?php

switch ($type) {
	case 'radio':

		foreach ( $option_values as $k => $values ) {

		    echo "<input class='$id' type='radio' name='{$setting_id}[$id]' value='$k' " . checked( ( ( $options[ $id ] == $defaults[$default_value] ) ? $defaults[$default_value] : $options[ $id ] ), $k, false ) . " /> $values<br/>";
		}
		break;

	case 'radio_img':

		foreach ( $option_values as $k => $values ) {

			if($value['breakline'] === '1') echo "<br/>";
			echo "<input style=\"vertical-align: top !important; margin-top: 3px;\" class='$id' type='radio' name='{$setting_id}[$id]' value='$k' " . checked( ( empty( $options[ $id ] ) ? $defaults[$default_value] : $options[ $id ] ), $k, false ) . " />";

			foreach ($values as $i => $value) {
			    echo "<img src='" . $linkPath . $value['path'] . '/' . $k . "/" . $value['link'] . "' alt='" . $value['alt'] . "' width='" . $value['width'] . "' height='" . $value['height'] . "'> ";
			}

		}
		break;

	case 'checkbox':

		$c = 0;

		foreach ( $option_values as $k => $values ) {

		    echo "<input id='$id' class='" . ( empty( $class ) ? 'regular-text' : $class ) . "' type='checkbox' name='{$setting_id}[$id][]' value='$k' " . ( in_array( $k, ( empty( $options[ $id ] ) ? array() : $options[$id] ) ) ? 'checked' : '' ) . "  /> $values<br/>";
		    $c++;
		}
		break;

	case 'textfield':

		if(empty($options[ $id ])){
			$options[ $id ] = '';
		}

		echo "<input id='$id' class='" . ( empty( $class ) ? 'regular-text' : $class ) . "' name='{$setting_id}[$id]' type='text' value='" .  ( empty( $options[ $id ] ) ? $default_value : esc_attr($options[$id])) . "' /><br>";
		break;

	case 'socialtextfield':

		if(empty($options[ $id ])){
			$options[ $id ] = '';
		}

		if(!empty($socialLinks[$id]))
		{
			echo $socialLinks[$id];
		}

		echo "<input readonly id='$id' class='" . ( empty( $class ) ? 'regular-text' : $class ) . "' name='{$setting_id}[$id]' type='text' value='" .  ( empty( $options[ $id ] ) ? $default_value : esc_attr($options[$id])) . "' /><br>";
		break;

	case 'numeric':

		if(empty($options[ $id ])){
			$options[ $id ] = '';
		}
		echo "<input id='$id' class='" . ( empty( $class ) ? 'regular-text' : $class ) . "' name='{$setting_id}[$id]' type='number' min='0' value='" . ( empty( $options[ $id ] ) ? $default_value : esc_attr($options[$id])) . "' />" . $append_text . "<br>";
		break;

	case 'textarea':

		if(empty($options[ $id ])){
			$options[ $id ] = '';
		}
		echo "<textarea id='$id' class='" . ( empty( $class ) ? '' : $class ) . "' name='{$setting_id}[$id]'>" . ( empty( $options[ $id ] ) ? $default_value : esc_attr($options[$id])) . "</textarea><br>";
		break;

	case 'select':

		echo "<select id='$id' class='" . ( empty( $class ) ? '' : $class ) . "' name='{$setting_id}[$id]'>";
		foreach ( $option_values as $k => $v ) {
			if(is_array($v)){
				echo '<optgroup label="'.ucwords($k).'">';
				foreach ( $v as $k1=>$v1 ) {
					echo "<option value='$k1' " . selected( $options[ $id ], $k1, false ) . ">$v1</option>";
				}
				echo '</optgroup>';
			}else{
					if(!isset($options[ $id ])){
						$options[ $id ] = '';
					}
		    		echo "<option value='$k' " . selected( $options[ $id ], $k, false ) . ">$v</option>";
			}
		}
		echo "</select> ";
		break;

	case 'upload':

		if(!isset($options[ $id ]))
			$options[ $id ] = null;


		echo "<input id='$id' class='" . ( empty( $class ) ? 'regular-text' : $class ) . "' name='{$setting_id}[$id]' type='text' value='" . esc_attr( $options[ $id ] ) . "' />";
		echo "<input id='{$id}_upload_image_button' class='" . MMBA_ARROW_ID_PREFIX . "_upload_button' type='button' value='" . __( 'Media Image Library', 'mmba-wp-arrow' ) . "' /><br>";

		wp_enqueue_script( MMBA_ARROW_ID_PREFIX.'_upload_js', MMBA_ARROW_PLUGIN_URL . 'js/upload.js', array() );
		wp_enqueue_media();
		break;

	case 'color':

		if(!isset($options[ $id ])){
			$options[ $id ] = '';
		}

		echo "<input id='$id' class='" . MMBA_ARROW_ID_PREFIX . "_pickcolor_field' type='text' name='{$setting_id}[$id]' value='" . esc_attr( $options[ $id ] ) . "' style='background-color:" . ( empty( $options[ $id ] ) ? $default_value : $options[ $id ] ) . ";' />";

		wp_enqueue_script( MMBA_ARROW_ID_PREFIX.'_color_js', MMBA_ARROW_PLUGIN_URL . 'js/color.js', array(
		     'wp-color-picker' 
		),false, true );

		break;
}



?>