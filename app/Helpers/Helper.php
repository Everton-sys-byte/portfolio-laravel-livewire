<?php 

use Carbon\Carbon;

if(!function_exists('formatedDate')) {
    function formatedDate($date, $showOnlyMonthYear = false) {
        $carbonDate = Carbon::parse($date);
        if ($showOnlyMonthYear) 
            return $carbonDate->format('M/Y');
        return $carbonDate->format('d/m/y');
    }
}