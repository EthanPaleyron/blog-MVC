<?php
namespace Project\Models;

use Project\Models\Posts;

class PostsManager
{
    private $bdd;
    public function __construct()
    {
        $this->bdd = new \PDO('mysql:host=' . HOST . ';dbname=' . DATABASE . ';charset=utf8;', USER, PASSWORD);
        $this->bdd->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function getAll()
    {
        $stmt = $this->bdd->prepare("SELECT * FROM articles ORDER BY TITLE_BLOG");
        $stmt->execute(array());
        return $stmt->fetchAll(\PDO::FETCH_CLASS, "Project\Models\Posts");
    }

    public function store($datetime, $file)
    {
        $stmt = $this->bdd->prepare("INSERT INTO articles (LABEL_UTILISATEUR, TITLE_BLOG, DATETIME_BLOG, IMAGE_BLOG, DESCRIPTION_BLOG) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute(
            array(
                $_SESSION["user"]["id"],
                $_POST["title"],
                $datetime,
                $file,
                $_POST["content"],
            )
        );
    }
}
?>