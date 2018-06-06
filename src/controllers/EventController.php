<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App\Models\Event as Event;
use App\Models\Frequency as Frequency;
use \DateTime;

class EventController {
	private $db;
	private $container;

	public function __construct($container) {
		$this->db = $container->db;
		$this->container = $container;
    }
/**
 * Returns every date between two dates as an array
 * @param string $startDate the start of the date range
 * @param string $endDate the end of the date range
 * @param string $format DateTime format, default is Y-m-d
 * @return array returns every date between $startDate and $endDate, formatted as "Y-m-d"
 */
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

    public function createEvents30days() {
        $range = self::createDateRangeNext30Days();
        $tasks = Task::all();
        foreach ($tasks as $task) {
            switch ($task['period']) {
                case 1: 
                    foreach ($range as $day) {
                        $event = new Event();
                        $event->taskID = $task['id'];
                        $event->dateScheduled = $day;
                        $event->save();
                    }

            } 
        }
        return false;
    // get all frequencies
    // loop through frequencies
    // if period ==1
    // create one event per day and save
    // if period == 2
    // create one event per specified day and save
    }

    public function createDailyEventsForDate(Request $request, Response $response, array $args) {
        $frequencies = Frequency::where('period', 1)->get();
       // \App\Utilities::pr($frequencies);
       // exit;
        foreach ($frequencies as $frequency) {
            $event = new Event();
            $event->taskID = $frequency['taskID'];
            $event->dateScheduled = $args['date'];
            $event->isCompleted = 0;
          //  \App\Utilities::pr($event);
          //  exit;
            $event->save();
        } 
    }

    public function createWeeklyEventsForDate(Request $request, Response $response, array $args) {
        $frequencies = Frequency::where('period', 2)->get();
       // \App\Utilities::pr($frequencies);
       // exit;
        foreach ($frequencies as $frequency) {
            $scheduleDate = $args['date'];
            $scheduleDateDayofWeek = date('l', strtotime($scheduleDate));
            $convertedDayofWeek = Frequency::convertDayToNumber($scheduleDateDayofWeek);
            if ($convertedDayofWeek & $frequency['weekday']) {
                $event = new Event();
                $event->taskID = $frequency['taskID'];
                $event->dateScheduled = $args['date'];
                $event->isCompleted = 0;
          //  \App\Utilities::pr($event);
          //  exit;
                $event->save();
            } else {
                continue;
            }
        } 
    } 
}

// function to create events for one date
// period==1 get frequencies and use task id to create event for date
// period==2 compare day of week for date to bitmask and create event
// if they match
//period==3 monthday compare date to monthday, create event if equal
// period==3 weekday+position compare day of week to date and
// position to week of month, create event if equal