<?php

session_start();
var_dump($_SESSION);

require '../src/config/config.php';
require '../vendor/autoload.php';
require SRC . 'helper.php';

$router = new Project\Router($_SERVER["REQUEST_URI"]);
// homepage
$router->get('/', "PostsController@index");

// pages user
$router->get('/register/', "UserController@showRegister");
$router->get('/login/', "UserController@showLogin");
$router->post('/register/', "UserController@register");
$router->post('/login/', "UserController@login");
$router->get('/logout/', "UserController@logout");

// pages blog
$router->get('/insert-blog/', "PostsController@formCreate");
$router->post('/create/', "PostsController@create");
$router->get('/delete/:id/', "PostsController@delete");
$router->get('/edit-blog/:id/', "PostsController@editPage");

$router->run();
