<?php

/**
 * Create instence of class.
 *
 * @return object
 */
function time_object()
{
    return new Time();
}
/**
 * Convert timespam to human readable form.
 *
 *
 * @return string
 */
function friendly_time($time)
{
    return time_object()->TimeAgo($time);
}
/**
 * calculate execution time of script.
 *
 * @param $start starting time of script
 * end => ending time
 * round => optional
 *
 * @return string
 */
function execution_time($start, $end, $round)
{
    return time_object()->ExecutionTime(['start'=>$start, 'end'=>$end, 'round'=>$round]);
}
/**
 * Calculate the age of users.
 *
 * @param (date) date of birth of user
 *
 * @return int
 */
function calculate_age($dob)
{
    return time_object()->CalculateAge($dob);
}
