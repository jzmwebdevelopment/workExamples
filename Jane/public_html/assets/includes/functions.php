<?php


	// GLOBAL FUNCTIONS
	
	
	// DEFINE THE URL TO YOUR SITE.  THEN YOU ONLY NEED TO CHANGE ONCE IF YOU MOVE IT
	// RETURNES PATH.
	function base_url() {
		
		return '/';
		
	}
	
	function uri() {
		// this is not going to work.
		// that part has to match after the last forward slah on this server.  bot the full HTTP HOST path. :(
		return substr($_SERVER['REQUEST_URI'], strlen(base_url()));
	}
	
	function uri_segment($segment) {
		
		$parts = explode('/', uri());
		
		return $parts[$segment-1];
		
	}
	
	function callContent() {
		
		$uri  = uri();
		$path = 'assets/pages/';
		
		if(uri_segment(1)=='portfolio') {
			include($path .'portfolio.php');
		} elseif(empty($uri) && is_file($path .'index.php')) { 
			include($path .'index.php');
		} elseif(is_file($path . $uri .'.php')) { 
			include($path . $uri .'.php');
		} else {
			include($path .'404.php');
		}
	}
	
	function callTitle() {
		
		$title = '';
		$parts = explode('/', uri());
		array_reverse($parts);
		foreach($parts as $part) {
			$title .= str_replace(array('_', '-', '%20', '#'), array(' ', ' ', ' ', ''), ucwords($part)) .' | ';
		}
		return $title;
	}
	
?>
