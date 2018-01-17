<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use App\Models\User;

class AuthController {
	private $db;

	public function __construct($container) {
		$this->db = $container->db;
	}

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

		$db = $this->db;
   		$user = $db::table('users')->where('emailAddress', $email)->first();

   		if ($user) {
   			// return message that user with that email already exists
   		}
   		else {
   			$user = $db::table('users')->insert('emailAddress', $email);
   		}

	}


}