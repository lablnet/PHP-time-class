<?php 
$start = microtime(true);
require_once "time.class.php";

$time = "1505099050"; // time();
$timeago = new Time;

echo $timeago->MalikTimeAgo($time);
echo "<br>";
echo $time->MalikNormalTime();
echo "<br>";
$end = microtime(true);

echo $time->MalikExecutionTime(['start'=>$start,'end'=>$end,'round'=>$round]);

?>
