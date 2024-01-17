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
        $this->validator->validate([
            "title" => ["required", "min:1", "alphaNum"],
            "content" => ["required", "min:1", "alphaNum"]
        ]);
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
            header('Location: /insert-blog/');
        }
    }

    public function delete($idBlog)
    {
        $blog = $this->manager->infoBlog($idBlog);
        if ($blog["label_user"] == $_SESSION["user"]["id"]) {
            $file_to_delete = "../public/files/" . $blog["file_blog"];
            if (file_exists($file_to_delete)) {
                unlink($file_to_delete);
            }
            $this->manager->delete($idBlog);
        }
        header("Location: /");
    }

    public function editBlog($idBlog)
    {
        $blogEditing = $this->manager->infoBlog($idBlog);
        if ($blogEditing["label_user"] == $_SESSION["user"]["id"]) {
            require VIEWS . 'Blog/edit-blog.php';
        } else {
            header("Location: /");
        }
    }

    public function update()
    {
        $this->validator->validate([
            "title" => ["required", "min:1", "alphaNum"],
            "content" => ["required", "min:1", "alphaNum"]
        ]);
        if (!$this->validator->errors()) {
            $blogInfo = $this->manager->infoBlog($_POST["id"]);
            if ($blogInfo["label_user"] == $_SESSION["user"]["id"]) {
                $datetime = date("Y-m-d H:i:s");
                if ($_FILES["file"]["name"] != "") {
                    $newFile = rand(0, 10000000) . $_FILES["file"]["name"];
                    move_uploaded_file($_FILES["file"]["tmp_name"], "../public/files/" . $newFile);
                    $file_to_delete = "../public/files/" . $blogInfo["file_blog"];
                    if (file_exists($file_to_delete)) {
                        unlink($file_to_delete);
                    }
                } else {
                    $newFile = $blogInfo["file_blog"];
                }
                $this->manager->update($datetime, $newFile);
            }
            header("Location: /");
        } else {
            header("Location: /edit-blog/" . $_POST["id"]);
        }
    }
}
?>