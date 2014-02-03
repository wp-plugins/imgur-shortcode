<?php

/*
Plugin Name: Imgur Shortcode
Version: 1.0
Plugin URI: http://fitbobcat.com/imgurshortcode
Description: Makes it easy to embed an image in to your blog post or page. To embed an image use  [imgur id="obZgoco.jpg"/]. 
Author: Johnathan Martin
Author URI: http://fitbobcat.com
*/

function imgur_img_shortcode($atts) {
	extract(shortcode_atts(array(
	    "id" 		=> '',
	   
	), $atts));
	
	$content = "";
	
	$content .= "<p><img src=\"http://i.imgur.com/".$id.  "\">";
	
	return $content;
}

add_shortcode('imgur', 'imgur_img_shortcode');

?>
