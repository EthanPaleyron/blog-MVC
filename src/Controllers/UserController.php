<?php
namespace Project\Controllers;

use Project\Models\UserManager;
use Project\Validator;

class UserController
{
    private $manager;
    private $validator;

    public function __construct()
    {
        $this->manager = new UserManager();
        $this->validator = new Validator();
    }

    // public function formInsertUser()
    // {
    //     require VIEWS . 'user/signin.php';
    // }

    public function formLogin()
    {
        require VIEWS . 'user/login.php';
    }

    // public function formLogout()
    // {
    // }
}
?>