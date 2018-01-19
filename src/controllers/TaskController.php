<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use App\Models\User;

class TaskController {
	private $db;
	private $container;

	public function __construct($container) {
		$this->db = $container->db;
		$this->container = $container;
	}

	public function dashboard(Request $request, Response $response) {
		 // FIXME: this could be better, find out how to load renderer properly
		 return $this->container->renderer->render($response, 'dashboard.php');
		

	}
}