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
        $stmt = $this->bdd->prepare("SELECT * FROM blogs ORDER BY datetime_blog");
        $stmt->execute(array());
        return $stmt->fetchAll(\PDO::FETCH_CLASS, "Project\Models\Posts");
    }

    public function store($datetime, $file)
    {
        $stmt = $this->bdd->prepare("INSERT INTO blogs (label_user, title_blog, datetime_blog, file_blog, content_blog) VALUES (?, ?, ?, ?, ?)");
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

    public function delete($idBlog)
    {
        $stmt = $this->bdd->prepare("DELETE FROM blogs WHERE `id_blog` = ?");
        $stmt->execute(
            array(
                $idBlog,
            )
        );
    }

    public function infoBlog($idBlog)
    {
        $stmt = $this->bdd->prepare("SELECT * FROM blogs WHERE id_blog = ?");
        $stmt->execute(
            array(
                $idBlog,
            )
        );
        return $stmt->fetch();
    }
}
?>