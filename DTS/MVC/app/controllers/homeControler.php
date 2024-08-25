<?php

class HomeController {
    private $userModel;

    public function _construct() {
        $this->userModel = new User();
    }

    public function index() {
        $users = $this->userModel->getAllUser();
        require '../app/views/home.php';
        // require '../views/home.php';
    }
}