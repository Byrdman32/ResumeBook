<?php

function resumeBook( $atts = array() ) {

	extract(shortcode_atts(array(
		'text' => 'text'
	), $atts));

	$Content = '<p>'.$text.'</p>';

	return $Content;
}