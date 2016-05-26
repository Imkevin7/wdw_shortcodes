<?php
/*
Plugin Name: Shortcodes Date | WDW Address
Description: Shortcode for date - [date] with attributes [date color="red" bgcolor="black"]. Address [wdw] with attributes [wdw color="red" bgcolor="black" linkcolor="orange" linkbg="black"] 
Version: 2016.5.25.1
Author: Well Dressed Walrus
Author URI: http://www.welldressedwalrus.com
License: GPL
Copyright: Well Dressed Walrus
*/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


add_shortcode('date','date_code');

function date_code($atts)
{
	$a = shortcode_atts(array(
			'color' => '#000000',
			'bgcolor' => '#ffffff',
		),$atts);

	$color = $a['color'];
	$bgcolor = $a['bgcolor'];

	return '<span style="color: ' . $color . '; background: ' . $bgcolor . '">' . date('Y');
}

add_shortcode('wdw','wdw_add');

function wdw_add($atts)
{
	$a = shortcode_atts(array(
			'color' => '#000000',
			'bgcolor' => '#ffffff',
			'linkcolor' => '#000000',
			'linkbg' => '#ffffff',
		),$atts);

	$color = $a['color'];
	$bgcolor = $a['bgcolor'];
	$linkcolor = $a['linkcolor'];
	$linkbg = $a['linkbg'];

	return " <span style='color:" . $color . "; background: " . $bgcolor . ";'>| Created by <a style='color: " . $linkcolor . "; background: " . $linkbg . ";' href='http://welldressedwalrus.com' target='_blank'>Well Dressed Walrus</a>.</span>";
}