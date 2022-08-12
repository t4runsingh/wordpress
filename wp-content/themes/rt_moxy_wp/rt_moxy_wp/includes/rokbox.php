<?php

function rokbox_short($atts, $content = null) {
	extract(shortcode_atts(array(
		"title" => '',
		"size" => '',
		"album" => '',
		"text" => 'Click me!',
		"thumb" => '',
	), $atts));
	
	$your_size = "";
	if ($size != "") {
		$your_size = '['.$size.']';  
	} else {
		$your_size = "";
	}
	
	$your_album = "";
	if ($album != "") {
		$your_album = '('.$album.')';  
	} else {
		$your_album = "";
	}
	
	$your_title = "";
	if ($title != "") {
		$your_title = 'title="'.$title.'"';  
	} else {
		$your_title = "";
	}
	
	$thumb_class = "";
	if ($album != "") {
		$thumb_class = $album;  
	} else {
		$thumb_class = "rokbox-thumb";
	}
	
	$display = "";
	if ($thumb != "") {
		$display = '<img class="'.$thumb_class.'" src="'.$thumb.'" alt="'.$title.'" />';  
	} else {
		$display = $text;
	}
	
	return '<a rel="rokbox'.$your_size.''.$your_album.'" '.$your_title.' href="'.$content.'">'.$display.'</a>';
}

add_shortcode("rokbox", "rokbox_short"); 

?>