<?php
namespace Project\Models;

class User
{
    private int $ID_UTILISATEUR;
    private string $NOM_UTILISATEUR;
    private string $MDP_UTILISATEUR;
    public function setID_UTILISATEUR($ID_UTILISATEUR): void
    {
        $this->ID_UTILISATEUR = $ID_UTILISATEUR;
    }
    public function getID_UTILISATEUR(): int
    {
        return $this->ID_UTILISATEUR;
    }
    public function setNOM_UTILISATEUR($NOM_UTILISATEUR): void
    {
        $this->NOM_UTILISATEUR = $NOM_UTILISATEUR;
    }
    public function getNOM_UTILISATEUR(): string
    {
        return $this->NOM_UTILISATEUR;
    }
    public function setMDP_UTILISATEUR($MDP_UTILISATEUR): void
    {
        $this->MDP_UTILISATEUR = $MDP_UTILISATEUR;
    }
    public function getMDP_UTILISATEUR(): string
    {
        return $this->MDP_UTILISATEUR;
    }
}
?>