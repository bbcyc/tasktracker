<?php 

namespace App\Helpers;

use App\Models\Task as Task;
use App\Models\Event as Event;

class EventHelper {
    function getEventsByDate($userID, $date) {
        $events = new Event();
       // $events::enableQueryLog();
        $events = $events
                    ->join('tasks', 'events.taskID', '=', 'tasks.id')
                    ->select('tasks.id', 'tasks.name', 'events.isCompleted')
                    ->where([
                        ['tasks.userID', '=', $userID],
                        ['events.dateScheduled', '=', $date],
                    ])->get();
        return $events;   
    }
}