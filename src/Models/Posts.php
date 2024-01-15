<?php
namespace Project\Models;

class Posts
{
    private int $id;
    private int $labelUser;
    private string $title;
    private $datetime;
    private string $file;
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
    public function setFile($file): void
    {
        $this->file = $file;
    }
    public function getFile(): string
    {
        return $this->file;
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