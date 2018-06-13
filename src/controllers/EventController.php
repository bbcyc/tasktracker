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
            $convertedDayOfWeek = Frequency::convertDayToNumber($scheduleDateDayofWeek);
            if ($convertedDayOfWeek & $frequency['weekday']) {
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
    /** docblock what is j, $when, why divide by 7 */
    public function weekOfMonth($when) {
        return ceil(date('j', strtotime($when)) / 7);
    }
    
    
    public function createMonthlyEventsForDate(Request $request, Response $response, array $args) {
        $frequencies = Frequency::where('period', 3)->get();
       // \App\Utilities::pr($frequencies);
       // exit;
        foreach ($frequencies as $frequency) {
            $scheduleDate = $args['date'];
            $scheduleDateDayOfMonth = date('j', strtotime($scheduleDate));
            $monthday = $frequency['monthday'] ?? false;
            $scheduleDateDayofWeek = date('l', strtotime($scheduleDate));
            $convertedDayOfWeek = Frequency::convertDayToNumber($scheduleDateDayofWeek);
            if ($monthday && ($monthday == $scheduleDateDayOfMonth)) {
                $event = new Event();
                $event->taskID = $frequency['taskID'];
                $event->dateScheduled = $scheduleDate;
                $event->isCompleted = 0;
                $event->save();
            } else if ((self::weekOfMonth($scheduleDate) == 
                $frequency['position']) && 
                ($convertedDayOfWeek & $frequency['weekday'])) {
                    $event = new Event();
                    $event->taskID = $frequency['taskID'];
                    $event->dateScheduled = $scheduleDate;
                    $event->isCompleted = 0;
                    $event->save();
            } else {
                continue;
            }
        }
    } 

    public function getDatesForTask($taskID) {
        $events = Event::where('taskID', $taskID)->get();
        $dates = [];
        foreach ($events as $event) {
            $dates[] = $event['dateScheduled'];
        }
        return $dates;
    }

    public function calculateDatesForTask($taskID, $dateRange) {
        // loop through days from today to today plus dateRange
        // for each day determine if task should have an event
        // if yes, add day to date array
        // return date array
        
    }

}

// function to create events for one date
// period==1 get frequencies and use task id to create event for date
// period==2 compare day of week for date to bitmask and create event
// if they match
//period==3 monthday compare date to monthday, create event if equal
// period==3 weekday+position compare day of week to date and
// position to week of month, create event if equal

/* determine date 30 days from today
select all examples of task in the next thirty days
compare number of task already scheduled againest number that should be scheduled
and create any that are missing */

/* get dates that a task has events scheduled from db, get list of dates for which
the task should be scheduled, compare the two and create events that are missing */