<?php
namespace Project\Models;

class Posts
{
    private int $id;
    private int $labelUser;
    private string $title;
    private $datetime;
    private string $img;
    private string $content;
    public function setId($id): void
    {
        $this->id = $id;
    }
    public function getId(): int
    {
        return $this->id;
    }
    public function setLabelUser($labelUser): void
    {
        $this->labelUser = $labelUser;
    }
    public function getLabelUser(): int
    {
        return $this->labelUser;
    }
    public function setTitle($title): void
    {
        $this->title = $title;
    }
    public function getTitle(): string
    {
        return $this->title;
    }
    public function setDateTime($datetime): void
    {
        $this->datetime = $datetime;
    }
    public function getDateTime()
    {
        return $this->datetime;
    }
    public function setImg($img): void
    {
        $this->img = $img;
    }
    public function getImg(): string
    {
        return $this->img;
    }
    public function setContent($content): void
    {
        $this->content = $content;
    }
    public function getContent(): string
    {
        return $this->content;
    }
}
?>