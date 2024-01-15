<?php

session_start();

require '../src/config/config.php';
require '../vendor/autoload.php';
require SRC . 'helper.php';

$router = new Project\Router($_SERVER["REQUEST_URI"]);
// homepage
$router->get('/', "PostsController@index");
// pages user
$router->get('/login', "UserController@formLogin");
$router->get('/signin', "UserController@formInsertUser");
// pages blog
$router->get('/insert-blog', "PostsController@formCreate");
$router->get('/update-blog', "PostsController@formUpdate");

$router->run();
