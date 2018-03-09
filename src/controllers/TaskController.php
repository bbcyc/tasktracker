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
		if (repeatable === "false") {
			$date = $request->getParam('date');
		} else {
			$frequency = $request->getParam('frequency');
			switch ($frequency) {
				case "frequencyDaily":
					break;
				case "frequencyWeekly":
					$weekday = $request->getParam("weekday");  // only for frequencyWeekly
					break;
				case "frequencyMonthly":
					$daynumber = $request->getParam("daynumber");
					
					break;
			}
		}
		$payload = [
						'name' => $name,
						'repeatable' => $repeatable,
						'date' => $date,
						'messageType' => 'error',
						'message' => 'Could not create task'
						
					];
		return $response->withJson($payload);

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



