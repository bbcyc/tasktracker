<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class Controller {
	private $db;
	private $container;

	public function __construct($container) {
		$this->db = $container->db;
		$this->container = $container;
	}
	/**
	 * @param Request $request
	 * @param Response $response
	 *
	 * @return 
	 */
	public function isLoggedIn() {
		return isset($_SESSION['userID']);
	}
}
