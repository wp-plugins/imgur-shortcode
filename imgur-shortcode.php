<?php

/*
Plugin Name: Imgur Shortcode
Version: 2.2
Plugin URI: http://fitbobcat.com/imgurshortcode
Description: Imgur Shortcode Makes it easy to embed an image in to your blog post or page. 
Author: Johnathan Martin
Author URI: http://johnathanmartin.com
*/

function imgur_img_shortcode($atts) {
	extract(shortcode_atts(array(
	    "id" 		=> '',
	    "height" 		=> '',
            "width"             => '',
	   
	), $atts));
	
	$content = "";
	
	$content .= "<p><img src=\"http://i.imgur.com/".$id.  "\" height=$height width=$width>";
	
	
	return $content;
}

add_shortcode('imgur', 'imgur_img_shortcode');

?>
