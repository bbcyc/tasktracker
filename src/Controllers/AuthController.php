<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App\Models\User as User;

class AuthController {
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
	public function login(Request $request, Response $response) {
		
		$emailAddress = $request->getParam('email');
		$password = $request->getParam('password');
		   
		if (empty($emailAddress)) { 
			return $response->withRedirect('/');
		}
		   // TODO: display message that email cant be empty on login page
		   
		if (empty($password)) { 
			return $response->withRedirect('/');
		}
	   	// TODO: display error message that password cant be empty on login page
		

		 // Render index view
    //get username and password
    //validate and sanitize input
    //send username and password to controller that connects to db to check username/pw
		$userModel = new User();
		$user = $userModel->getUserByEmail($emailAddress);
  
    	if (!$user) {
   			return $response->withRedirect('/');
   			//TODO: error message that username is not correct
   		}
   		if (password_verify($password, $user->password)) {
   			// set session variable
   			$_SESSION['userID'] = $user->id;
   			// redirect to dashboard
   			return $response->withRedirect('/dashboard');
   		} else {
   			return "password incorrect";
   		}
   		// TODO: set session variable after user is authenticated to be checked on priviledged pages
   		
    //controller responds with whether those match existing records
    //if true redirect to main page
    //if false, reload login page with error message
	}


	public function signup(Request $request, Response $response) {
		$email = $request->getParam('email');
		$password = $request->getParam('password');
		$password_hash = password_hash($password, PASSWORD_DEFAULT);

		$userModel = new User();
		$user = $userModel->getUserByEmail($email);
	//	\App\Utilities::pr($user);
	//	exit;
		if ($user) {
			// send message that email is already in use
			return "user already exists";
			// return $response->withRedirect('/signup');
		} else {
			$userID = $userModel->createUser($email, $password_hash);
			// redirect user to home page
			if ($userID) {
				$_SESSION['userID'] = $userID;
				return $response->withRedirect('/dashboard');
			} else {
				return "something went wrong creating the user.";
			}
		}
	}

	public function logout(Request $request, Response $response) {
		if (isset($_SESSION['userID'])) {
			unset($_SESSION['userID']);
		}
		return $response->withRedirect('/login');
	}
}
