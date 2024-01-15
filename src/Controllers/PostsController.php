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
        require VIEWS . 'Blog/index.php';
    }

    public function formCreate()
    {
        require VIEWS . 'Blog/insert-blog.php';
    }

    // public function formUpdate()
    // {
    //     require VIEWS . 'Blog/update-blog.php';
    // }
}
?>