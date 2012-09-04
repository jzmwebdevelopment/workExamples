<?php

	//die('Disabled');
	$images = 0;

	$source = './original/';
	$destination = './portfolio/commercial/';
	
	$name = time();
	
	$files = glob($source .'*.JPG');
	
	foreach($files as $image) {
		
		list($width, $height) = getimagesize($image);

		$thumb_width  = 128;
		$thumb_height = 80;
	
		$quality = 90;
		
		$filename = $destination . $name .'-t.jpg';
		
		$left     = ($width - $thumb_width) /2;
		$top      = ($height - $thumb_height) /2;
	
		$img_src  = imagecreatetruecolor($thumb_width, $thumb_height);
		$org_img  = imagecreatefromjpeg($image);

		imagecopy($img_src, $org_img, 0, 0, $left, $top, $width, $height);
		imagejpeg($img_src, $filename, $quality);
	
		imagedestroy($img_src);
		
		copy($image, $destination . $name .'.jpg');
		
		$name++;
		$images++;
		
	}
	
	echo($images .' of '. count($files) .' resized');
?>