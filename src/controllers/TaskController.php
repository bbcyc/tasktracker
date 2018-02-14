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
		$emailAddress = $request->getParam('emailaddress');
		$payload = [
			'messageType' => 'error',
			'message' => 'Could not create task'
			
		];
		
		return $response->withJson($payload);

	}


}