<?php

  class time{

    public function Time_Ago($time_ago) {
        $time_ago =  strtotime($time_ago) ? strtotime($time_ago) : $time_ago;
        $time  = time() - $time_ago;
       switch($time):
        // seconds
        case $time <= 60;
        return ($time == 1) ? "Just now" : $time." secs ago";
        // minutes
        case $time >= 60 && $time < 3600;
        return (round($time/60) == 1) ? '1 min ago' : round($time/60).' mins ago';
        // hours
        case $time >= 3600 && $time < 86400;
        return (round($time/3600) == 1) ? '1 hour ago' : round($time/3600).' hours ago';
        // days
    	  case $time >= 86400 && $time < 604800;
    	  return (round($time/86400) == 1) ? '1 day ago' : round($time/86400).' days ago';
        // weeks
        case $time >= 604800 && $time < 2600640;
        return (round($time/604800) == 1) ? '1 week ago' : round($time/604800).' weeks ago';
        // months
        case $time >= 2600640 && $time < 31207680;
        return (round($time/2600640) == 1) ? '1 month ago' : round($time/2600640).' months ago';
        // years
        case $time >= 31207680;
        return (round($time/31207680) == 1) ? '1 year ago' : round($time/31207680).' years ago' ;

        endswitch;
      }

    public function maliknormalTime($time){
      $str = strtotime($time);
      return date("d-F-Y h:i:s a", $str);
    }

  }
