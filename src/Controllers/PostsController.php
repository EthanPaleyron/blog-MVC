<?php
namespace Project\Controllers;

use Project\Models\PostsManager;
use Project\Validator;

class PostsController
{
    private PostsManager $manager;
    private Validator $validator;

    public function __construct()
    {
        $this->manager = new PostsManager();
        $this->validator = new Validator();
    }

    public function index(): void
    {
        $blogs = $this->manager->getAll();
        require VIEWS . 'Blog/index.php';
    }

    public function formCreate(): void
    {
        require VIEWS . 'Blog/insert-blog.php';
    }

    public function create(): void
    {
        $this->validator->validate([
            "title" => ["required", "min:1", "alphaSpace"],
            "content" => ["required", "min:1", "alphaNum"]
        ]);
        if (!isset($_SESSION["user"]["username"])) {
            header("Location: /login");
            die();
        }
        $_SESSION['old'] = $_POST;

        if (!$this->validator->errors()) {
            // CREE L'IMAGE DANS LE DOSSIER FILES ET RAJOUTE DES CHIFFRE SUR LENOM DU FICHIER
            $file = rand(0, 10000000) . $_FILES["file"]["name"];
            move_uploaded_file($_FILES["file"]["tmp_name"], "../public/files/" . $file);
            $datetime = date("Y-m-d H:i:s");
            $this->manager->store($datetime, $file);
            header("Location: /");
        } else {
            header('Location: /insert-blog/');
        }
    }

    public function delete($idBlog): void
    {
        $infoBlog = $this->manager->infoBlog($idBlog);
        if ($infoBlog["label_user"] == $_SESSION["user"]["id"]) {
            // VERIFIE SI L'IMAGE EXISTE ET LA SUPPRIME
            $file_to_delete = "../public/files/" . $infoBlog["file_blog"];
            if (file_exists($file_to_delete)) {
                unlink($file_to_delete);
            }
            $this->manager->delete($idBlog);
        }
        header("Location: /");
    }

    public function editBlog($idBlog): void
    {
        $infoBlog = $this->manager->infoBlog($idBlog);
        // VERIFIE SI C'EST L'UTILISATEUR DU BLOG
        if ($infoBlog["label_user"] == $_SESSION["user"]["id"]) {
            require VIEWS . 'Blog/edit-blog.php';
        } else {
            header("Location: /");
        }
    }

    public function update(): void
    {
        $this->validator->validate([
            "title" => ["required", "min:1", "alphaSpace"],
            "content" => ["required", "min:1", "alphaNum"]
        ]);
        if (!$this->validator->errors()) {
            $infoBlog = $this->manager->infoBlog($_POST["id"]);
            // VERIFIE SI C'EST L'UTILISATEUR DU BLOG
            if ($infoBlog["label_user"] == $_SESSION["user"]["id"]) {
                $datetime = date("Y-m-d H:i:s");
                // SI L'UTILISATEUR REMPLACE L'IMAGE IL SUPPRIME L'ANCIENNE ET CREER LA NOUVELLE 
                if ($_FILES["file"]["name"] != "") {
                    $newFile = rand(0, 10000000) . $_FILES["file"]["name"];
                    move_uploaded_file($_FILES["file"]["tmp_name"], "../public/files/" . $newFile);
                    $file_to_delete = "../public/files/" . $infoBlog["file_blog"];
                    if (file_exists($file_to_delete)) {
                        unlink($file_to_delete);
                    }
                } else {
                    $newFile = $infoBlog["file_blog"];
                }
                $this->manager->update($datetime, $newFile);
            }
            header("Location: /");
        } else {
            header("Location: /edit-blog/" . $_POST["id"]);
        }
    }
}