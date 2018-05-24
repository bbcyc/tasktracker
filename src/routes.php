<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes
/* useful links for setting up db conn:
http://www.bradcypert.com/building-a-restful-api-in-php-using-slim-eloquent/
https://github.com/illuminate/database/blob/master/README.md
https://www.slimframework.com/docs/cookbook/database-eloquent.html
https://www.slimframework.com/docs/concepts/di.html
*/

// Route to home page
$app->get('/', function (Request $request, Response $response, array $args) {
    // Render index view
/*    $db = $this->db;
    $users = $db::table('users')->where('id', 1)->first();
    echo "<pre>";
    print_r($users);
    echo "</pre>";

    die("user email is {$users->emailAddress}");*/
    return $this->renderer->render($response, 'login.php', $args);
})->setName('home');

$app->post('/login', 'App\Controllers\AuthController:login'); 

$app->get('/signup', function (Request $request, Response $response, array $args) {
    return $this->renderer->render($response, 'signup.php', $args);
});
$app->post('/signup', 'App\Controllers\AuthController:signup');

$app->get('/logout', 'App\Controllers\AuthController:logout');

$app->get('/create', 'App\Controllers\EventController:createEvents30days');

$app->get('/password/{password}', function (Request $request, Response $response, array $args) {
	return password_hash($args['password'], PASSWORD_DEFAULT);
});

// Task routes
$app->get('/dashboard', 'App\Controllers\TaskController:dashboard'); 
$app->post('/task/create', 'App\Controllers\TaskController:create');
   
    // Render index view
    //get username and password
    //validate and sanitize input
    //send username and password to controller that connects to db to check username/pw
    //controller responds with whether those match existing records
    //if true redirect to main page
    //if false, reload login page with error message

   // return $this->renderer->render($response, 'login.php', $args);


// site with good request authentication ideas
// http://discourse.slimframework.com/t/how-to-use-middleware-to-control-auth-flow/1197/2 

/* example routes point to namespaced object:method
$app->get('/', '\App\Controllers\DefaultController:index');
$app->get('/index', '\App\Controllers\DefaultController:index');
$app->get('/oop', '\App\Controllers\DefaultController:oop');
*/

