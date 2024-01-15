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
        $blogs = $this->manager->getAll();
        require VIEWS . 'Blog/index.php';
    }

    public function formCreate()
    {
        require VIEWS . 'Blog/insert-blog.php';
    }

    public function create()
    {
        if (!isset($_SESSION["user"]["username"])) {
            header("Location: /login");
            die();
        }
        $_SESSION['old'] = $_POST;

        if (!$this->validator->errors()) {
            $file = rand(0, 10000000) . $_FILES["file"]["name"];
            move_uploaded_file($_FILES["file"]["tmp_name"], "../public/files/" . $file);
            $datetime = date("Y-m-d H:i:s");
            $this->manager->store($datetime, $file);
            header("Location: /");
        } else {
            header("Location: /create/");
        }
    }
}
?>