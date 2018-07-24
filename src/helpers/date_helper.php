<?php 

namespace Helpers\DateHelper;

function createDateRangeNext30Days($format = 'Y-m-d')
{
    $begin = date($format);
    $end = date($format, strtotime('+30 days'));

    $interval = new \DateInterval('P1D'); // 1 Day
    $dateRange = new \DatePeriod($begin, $interval, $end);

    $range = [];
    foreach ($dateRange as $date) {
        $range[] = $date->format($format);
    }

    return $range;
}

function createDateRange($startDate, $endDate, $format = 'Y-m-d')
{
    $interval = new \DateInterval('P1D'); // 1 Day
    $dateRange = new \DatePeriod($startDate, $interval, $endDate);

    $range = [];
    foreach ($dateRange as $date) {
        $range[] = $date->format($format);
    }

    return $range;
}

/** docblock what is j, $when, why divide by 7 */
function weekOfMonth($when) {
    return ceil(date('j', strtotime($when)) / 7);
}