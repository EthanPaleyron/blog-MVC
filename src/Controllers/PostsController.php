<?php
namespace Project\Controllers;

use Project\Models\PostsManager;
use Project\Validator;

class PostsController
{
    private $manager;
    private $validator;

    public function __construct()
    {
        $this->manager = new PostsManager();
        $this->validator = new Validator();
    }

    public function index()
    {
        require VIEWS . 'blog/index.php';
    }
}
?>