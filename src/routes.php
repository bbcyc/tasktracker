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
$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Render index view
    $db = $this->container['db'];
    $users = $db::table('users')->where('id', 1)->get();
    var_dump($users);
    die();
    return $this->renderer->render($response, 'login.php', $args);
});

$app->post('/', function (Request $request, Response $response, array $args) {
    // Render index view
    //get username and password
    //validate and sanitize input
    //send username and password to controller that connects to db to check username/pw
    //controller responds with whether those match existing records
    //if true redirect to main page
    //if false, reload login page with error message

    return $this->renderer->render($response, 'login.php', $args);
});

// site with good request authentication ideas
// http://discourse.slimframework.com/t/how-to-use-middleware-to-control-auth-flow/1197/2 

/* example routes point to namespaced object:method
$app->get('/', '\App\Controllers\DefaultController:index');
$app->get('/index', '\App\Controllers\DefaultController:index');
$app->get('/oop', '\App\Controllers\DefaultController:oop');
*/

// set up a controller and method for login, make sure it works when the form is submitted. work on db connection.