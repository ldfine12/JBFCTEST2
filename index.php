<?php
/*
Plugin Name: LoganPlugin
Plugin URI:
Description: Logan's JBFC test plugin
Author: Logan
Author URI: loganfine.com
Version: 0.1
 */
	function get_showTimes(){
	
	$returnString = "";
		
	$json = file_get_contents('http://18.188.165.165/');
	$contents = json_decode($json, true);
	 
	//echo $contents;
	//echo count($contents);
	//$contents [0];
	//$test2 = $contents[0]->{'Title'};
	//echo $test2;
	
	
	//$test = array_slice($contents[0], 0, 2);
	//echo var_dump($contents[0]);
	//echo $contents[0]["Title"]; 
	//echo implode(", ",$contents[0]["Showtimes"][0]);
	//for ($y = 0; $y < count($contents[0]["Showtimes"]); $y++){
	//	echo implode(", ",$contents[0]["Showtimes"][$y]);
	//}
	//$test2 = $test[0];
	//$test3 = $test2[0];
	//echo $test2;
	//echo $test3;
		
	//$test2 = array_slice($contents[0], 1, 1);
	//echo $contents[0]{showtimes};
	
	
		
	for ($x = 0; $x < count($contents); $x++){
		$returnString .= "<h3>".implode(",",array_slice($contents[$x], 0, 1))."</h3>"."<h4>"."Showtimes: "."</h4>";
		for ($y = 0; $y < count($contents[$x]["Showtimes"]); $y++){
		$returnString .= implode(", ",$contents[$x]["Showtimes"][$y])."</br>";
		}
	}
		
		
	return "<p>$returnString</p>";
	}

add_shortcode('get_show', 'get_showTimes');
	
?>