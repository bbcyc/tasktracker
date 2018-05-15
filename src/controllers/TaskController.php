<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use \DateTime;

use App\Models\User;
use App\Models\Task;
use App\Models\Frequency;
use App\Models\Event;

class TaskController extends Controller {
	private $db;
	private $container;

	public function __construct($container) {
		$this->db = $container->db;
		$this->container = $container;
	}

	public function dashboard(Request $request, Response $response) {
		 // FIXME: this could be better, find out how to load renderer properly
		 if (!$this->isLoggedIn()) {
		 	echo "You are not logged in";
		 	exit;
		 }
		 return $this->container->renderer->render($response, 'dashboard.php');
	}

	public function create(Request $request, Response $response) {
		//\App\Utilities::pr($request);
		//var_dump($request);
		//exit;
		$name = $request->getParam('name');
		$repeatable = $request->getParam('repeatable') === 'true';
		$payload = [
			'name' => $name,
			'repeatable' => $repeatable,
		];
		$task = new Task();
		$task->userID = $_SESSION['userID'];
		$task->name = $name;
		$task->isRepeatable = $repeatable;
		$taskSuccess = $task->save();
		$taskID = $task->id;
		$payload['taskID'] = $taskID;
		
		if (!$repeatable) {
			$date = $request->getParam('date');
			$payload['date'] = $date;
			$formattedDate = new DateTime();
			$formattedDate = $formattedDate->createFromFormat('m\/d\/Y', $date);
			$formattedDate = $formattedDate->format('Y-m-d');
			$event = new Event();
			$event->taskID = $taskID;
			$event->dateScheduled = $formattedDate;
			$event->isCompleted = 0;
			$event->save();
			
		} else {
			$howOften = new Frequency();
			
			$howOften->taskID = $taskID;
			
			$frequency = $request->getParam('frequency');
			$payload ['frequency'] = $frequency;
			switch ($frequency) {
				case "Daily":
					$howOften->period = Frequency::PERIOD_DAILY;
					break;
				case "Weekly":
					$weekday = $request->getParam("weekday");
					$payload['weekday'] = $weekday;
					$weekdayBitMask = Frequency::convertWeekdaysToBitmask($weekday);
					
					$howOften->weekday = $weekdayBitMask;
					$howOften->period = Frequency::PERIOD_WEEKLY;
					
					break;
				case "Monthly":
					$daynumber = $request->getParam("daynumber");
					if (isset($daynumber)) {
						foreach ($daynumber as $day){
							$monthdayFreq = new Frequency();
							$monthdayFreq->monthday = $day;
							$monthdayFreq->period = Frequency::PERIOD_MONTHLY;
							$monthdayFreq->taskID = $taskID;
							$monthdayFreq->save();
						}
					}

					$week1days = $request->getParam("selectMultipleWeek1");
					$week2days = $request->getParam("selectMultipleWeek2");
					$week3days = $request->getParam("selectMultipleWeek3");
					$week4days = $request->getParam("selectMultipleWeek4");
					$weekndays = [$week1days, $week2days, $week3days, $week4days];
					for ($n=0; $n<count($weekndays); $n++) {
						$freq = new Frequency();
						$freq->position = $n + 1;
						$freq->weekday = Frequency::convertWeekdaysToBitmask($weekndays[$n]);
						$freq->period = Frequency::PERIOD_MONTHLY;
						$freq->taskID = $taskID;
						$freq->save();
					}
					
					$payload []= [
						'daynumber' => $daynumber,
						'week1days' => $week1days,
						'week2days' => $week2days,
						'week3days' => $week3days,
						'week4days' => $week4days,
					];
					break;
			}
			if ($frequency !== "Monthly") {
				$howOften->save();
			}
		}
		$payload []= [
						'messageType' => 'error',
						'message' => 'Could not create task',
					];
		
		return $response->withJson($payload);

	
        // call to frequency model
	}



}

/* Tasks table- Holds a list of tasks. Userid correlates to the users.id in users table. Tasks.id will be used by frequency table to correlate tasks to their frequencies. Tasks.id also maps to the taskid column on the events table. 

Frequencies table- Holds the intervals at which repeatable task dates should be computed for the events table. Uses the taskid to map to tasks.id

Events table- Holds the dates that events are to be completed and whether they are completed or not. Dates a generated from the frequencies table and correlate through the taskid. Task metrics are generated per task using the taskid, for an interval using the dateScheduled, and percentage completion based on the completed column.

Submit button on create new task modal should point to TaskController::create method
controller should have the logic to call the correct task model methods to create the task
if repeatable it should create an entry in tasks and an entry in events
if repeatable it should create an entry in taskss and another in frequencies, the cron job will create the entries in events


*/



