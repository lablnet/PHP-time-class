<?php
/**
 * Malik Corporation private limited
 *
 * @package   (my-mos.com)
 * @author    Malik Umer Farooq<admin@my-mos.com>
 * @copyright 2016-2017 Malik Corporation private limited
 * @license  Malik Corporation private limited https://my-mos.com/public/terms
 * @link     https://my-mos.com/public/
 */
class Time
{
		/**
		 * Convert timespam to human readable form
		 * @time_ago time(); or come form db for return human readable form 
		 * @return string
		*/	 
	public function MalikTimeAgo($time_ago) {
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
		/**
		 * For normal time
		 * normal time print/look like 01-October-2017 07:56:43 AM
		*/	  
    public function MalikNormalTime($params = []){
        if(is_array($params)){
            if(!empty($params['timezone'])){
                 date_default_timezone_set($params['timezone']);
            }
        }
      return date("d-F-Y h:i:s A");
    }
        /**
         * Calculate execution time of script
         * @param $params (array)
         * 'start' => microtime(true); required for startimg time
         * 'end' => microtime(true); required for ending time
         * 'round' optional if you want round 'round'=>2 e.g or whatever 
         * you want not set this return full float value
         * @return float
        */      
    public function MalikExecutionTime($params){
        if(is_array($params)){
            if(!empty($params['start'])){
                $startTime = $params['start'];
            }if(!empty($params['end'])){
                $endTime = $params['end'];
            }
             $ExecutionTime = $endTime - $startTime;
                  if(!empty($params['round'])){
                        $ExecutionTime = round($ExecutionTime,$params['round']);
                 }
             return (float) $ExecutionTime;
        }else{
            return false;
        }
    }
}

