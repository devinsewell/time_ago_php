<?php
/*
************************************************************************
************************************************************************

© NOVEMBER, 2014 -> UPDATED FEBRUARY 2020
AUTHER: DEVIN SEWELL
WEBSITE: devinsewell.com

************************************************************************
************************************************************************
****************************************************************DVINSWLL
*/
	function timeAgo($time_then_string){
		//date/time string to timestamp
		$then = strtotime($time_then_string);
		//units of time
		$units= array("second", "minute", "hour", "day", "week", "month", "year", "decade");
		//time intervals
		$intervals= array("60","60","24","7","4.35","12","10");
		//current timestamp
		$now = time();
		//calculate difference in seconds
		$difference = $now - $then;
		for($j = 0; $difference >= $intervals[$j] && $j < count($intervals)-1; $j++) {
			$difference /= $intervals[$j];
		}
		$difference = round($difference);
		//add 's' if greater than 1 'minute','year',etc
		if($difference != 1) {
			$units[$j].= "s";
		}   
		//formatted output, ex. '1 day ago'
		$ago = "$difference ".$units[$j]." ago";
		return $ago;
	}

?>

<!-- USAGE Use-case 1.) Month Day Year Time -->
<p><?php echo timeAgo("FEBRUARY 26 2020 12:30:00 AM"); ?></p>
<p><?php echo timeAgo("November 13 2014 12:30:00 PM"); ?></p>
<!-- USAGE Use-case 2.) Month Year  -->
<p><?php echo timeAgo("November 2015"); ?></p>

