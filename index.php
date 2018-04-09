<?php 

// for starting time
$start = microtime(true);
require_once "init.php";

$time = "1505099050"; // time();

echo friendly_time($time);
echo "<br>";
echo time_object()->NormalTime();
echo "<br>";

// for ending time
$end = microtime(true);

//now calculate execution time of script
echo execution_time($start,$end,5);

?>
