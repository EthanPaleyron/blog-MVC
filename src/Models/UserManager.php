<?php
namespace Project\Models;

use Project\Models\User;

class UserManager
{
    private $bdd;
    public function __construct()
    {
        $this->bdd = new \PDO('mysql:host=' . HOST . ';dbname=' . DATABASE . ';charset=utf8;', USER, PASSWORD);
        $this->bdd->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }
    public function getBdd()
    {
        return $this->bdd;
    }
    public function find($username)
    {
        $stmt = $this->bdd->prepare("SELECT * FROM utilisateurs WHERE NOM_UTILISATEUR = ?");
        $stmt->execute(
            array(
                $username
            )
        );
        $stmt->setFetchMode(\PDO::FETCH_CLASS, "Project\Models\User");

        return $stmt->fetch();
    }
    public function all()
    {
        $stmt = $this->bdd->query('SELECT * FROM utilisateurs');

        return $stmt->fetchAll(\PDO::FETCH_CLASS, "Project\Models\User");
    }
    public function store($password)
    {
        $stmt = $this->bdd->prepare("INSERT INTO utilisateurs (NOM_UTILISATEUR, MDP_UTILISATEUR) VALUES (?, ?)");
        $stmt->execute(
            array(
                $_POST["username"],
                $password
            )
        );
    }
}
?>