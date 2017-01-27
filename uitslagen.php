<?php

if($_SERVER['REMOTE_ADDR'] == "213.125.227.218" OR $_SERVER['REMOTE_ADDR'] == "83.80.193.242") { 
	error_reporting(E_ALL);
	ini_set('display_errors',1);
}

include 'array.php';
	function strip_bad_chars( $input ) {
		$output = preg_replace( "/[^a-zA-Z0-9_-]/", "",$input);
		return $output;
	}
	
	if(isset($_GET['item'])) {
		$menuItem = strip_bad_chars( $_GET['item'] );
		$key = $uitslagen[$menuItem];
	}
	
	
?>
	
	
	
	<div >
	
		<h1><?php echo $key["titel"]; ?></h1>
		<p><?php echo $key["uitslag"]; ?></p>
                <p><?php echo $key["vervolg"]; ?></p>
                <p><?php echo $key["advies1"]; ?></p>
                 <p><?php echo $key["advies2"]; ?></p>
                 <p><?php echo $key["link"]; ?></p>
		
		
		
	</div>

	
