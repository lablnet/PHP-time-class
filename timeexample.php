<?php 
require_once "time.class.php";

$time = "1505099050"; // time();
$timeago = new Time;

echo $timeago->Time_Ago($time);

?>