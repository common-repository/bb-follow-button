<?php
/*
	Plugin Name: BB Follow Button
	Plugin URI: http://opreh.com.br
	Description: Permite que você coloque o novo botão follow do twitter em seus posts.
	Version: 0.1
	Author: Bruno Braga
	Author URI: http://opreh.com.br
	License: GNU
*/
	
function bb_follow_button_modify_editor($initArray) {

	$ext = 'a[data-show-count|charset|coords|href|hreflang|name|rel|rev|shape|target|accesskey|class|dir|id|lang|style|tabindex|title]';

	if(isset( $initArray['extended_valid_elements'])){
		$initArray['extended_valid_elements'] .= ',' . $ext;
	}else{
		$initArray['extended_valid_elements'] = $ext;
	}

	return $initArray;
}
add_filter('tiny_mce_before_init', 'bb_follow_button_modify_editor');
	
	
	
?>