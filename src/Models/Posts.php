<?php
namespace Project\Models;

class Posts
{
    private int $ID_BLOG;
    private int $LABEL_UTILISATEUR;
    private string $TITLE_BLOG;
    private $DATETIME_BLOG;
    private string $IMAGE_BLOG;
    private string $DESCRIPTION_BLOG;
    public function setID_BLOG($ID_BLOG): void
    {
        $this->ID_BLOG = $ID_BLOG;
    }
    public function getID_BLOG(): int
    {
        return $this->ID_BLOG;
    }
    public function setLABEL_UTILISATEUR($LABEL_UTILISATEUR): void
    {
        $this->LABEL_UTILISATEUR = $LABEL_UTILISATEUR;
    }
    public function getLABEL_UTILISATEUR(): int
    {
        return $this->LABEL_UTILISATEUR;
    }
    public function setTITLE_BLOG($TITLE_BLOG): void
    {
        $this->TITLE_BLOG = $TITLE_BLOG;
    }
    public function getTITLE_BLOG(): string
    {
        return $this->TITLE_BLOG;
    }
    public function setDATETIME_BLOG($DATETIME_BLOG): void
    {
        $this->DATETIME_BLOG = $DATETIME_BLOG;
    }
    public function getDATETIME_BLOG()
    {
        return $this->DATETIME_BLOG;
    }
    public function setIMAGE_BLOG($IMAGE_BLOG): void
    {
        $this->IMAGE_BLOG = $IMAGE_BLOG;
    }
    public function getIMAGE_BLOG(): string
    {
        return $this->IMAGE_BLOG;
    }
    public function setDESCRIPTION_BLOG($DESCRIPTION_BLOG): void
    {
        $this->DESCRIPTION_BLOG = $DESCRIPTION_BLOG;
    }
    public function getDESCRIPTION_BLOG(): string
    {
        return $this->DESCRIPTION_BLOG;
    }
}
?>