<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use App\Models\User;

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
	//	\App\Utilities::pr($request);
	//	exit;
		$name = $request->getParam('name');
		$repeatable = $request->getParam('repeatable');
		$payload = [
			'name' => $name,
			'repeatable' => $repeatable,
		];
		if ($repeatable === "false") {
			$date = $request->getParam('date');
			$payload['date'] = $date;
		} else {
			$frequency = $request->getParam('frequency');
			$payload ['frequency'] = $frequency;
			switch ($frequency) {
				case "Daily":
					break;
				case "Weekly":
					$weekday = $request->getParam("weekday");
					$payload['weekday'] = $weekday;
					break;
				case "Monthly":
					$daynumber = $request->getParam("daynumber");
					$week1days = $request->getParam("selectMultipleWeek1");
					$week2days = $request->getParam("selectMultipleWeek2");
					$week3days = $request->getParam("selectMultipleWeek3");
					$week4days = $request->getParam("selectMultipleWeek4");
					$payload []= [
						'daynumber' => $daynumber,
						'week1days' => $week1days,
						'week2days' => $week2days,
						'week3days' => $week3days,
						'week4days' => $week4days,
					];
					break;
			}
		}
		$payload []= [
						'messageType' => 'error',
						'message' => 'Could not create task',
					];
		return $response->withJson($payload);

	// call to task_model
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



