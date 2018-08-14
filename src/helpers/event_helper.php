<?php 

namespace Helpers\EventHelper;

use App\Models\Task as Task;
use App\Models\Event as Event;

function getEventsByDate($userID, $date) {
    $events = DB::table('events')
                ->join('tasks', 'events.taskID', '=', 'tasks.id')
                ->select('tasks.id', 'tasks.name', 'events.isCompleted')
                ->where([
                    ['tasks.userID', '=', $userID],
                    ['events.dateScheduled', '=', $dateScheduled],
                ])->get();
    return $events;   
}