<?php
/*
************************************************************************
************************************************************************

© NOVEMBER, 2014
AUTHER: DEVIN SEWELL
WEBSITE: devinsewell.com

************************************************************************
************************************************************************
****************************************************************DVINSWLL
*/
//timestamp of date/time
$time_og = strtotime("20 November 2014");
//units of time
$units= array("second", "minute", "hour", "day", "week", "month", "year", "decade");
//time intervals
$intervals= array("60","60","24","7","4.35","12","10");
//current timestamp
$now = time();
//calculate difference in seconds
$difference = $now - $time_og;
//calculate and format
for($j = 0; $difference >= $intervals[$j] && $j < count($intervals)-1; $j++) {
	$difference /= $intervals[$j];
}
$difference = round($difference);
//add 's' if greater than 1 'minute','year',etc
if($difference != 1) {
	$units[$j].= "s";
}   
//final formatting '1 day ago'
$ago = "$difference ".$units[$j]." ago";
//echo result
echo $ago;
?>