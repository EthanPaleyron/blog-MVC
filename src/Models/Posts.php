<?php
namespace Project\Models;

class Posts
{
    private int $id_blog;
    private int $label_user;
    private string $title_blog;
    private string $datetime_blog;
    private string $file_blog;
    private string $content_blog;
    public function setid_blog($id_blog): void
    {
        $this->id_blog = $id_blog;
    }
    public function getid_blog(): int
    {
        return $this->id_blog;
    }
    public function setlabel_user($label_user): void
    {
        $this->label_user = $label_user;
    }
    public function getlabel_user(): int
    {
        return $this->label_user;
    }
    public function settitle_blog($title_blog): void
    {
        $this->title_blog = $title_blog;
    }
    public function gettitle_blog(): string
    {
        return $this->title_blog;
    }
    public function setdatetime_blog($datetime_blog): void
    {
        $this->datetime_blog = $datetime_blog;
    }
    public function getdatetime_blog(): string
    {
        return $this->datetime_blog;
    }
    public function setfile_blog($file_blog): void
    {
        $this->file_blog = $file_blog;
    }
    public function getfile_blog(): string
    {
        return $this->file_blog;
    }
    public function setcontent_blog($content_blog): void
    {
        $this->content_blog = $content_blog;
    }
    public function getcontent_blog(): string
    {
        return $this->content_blog;
    }
}