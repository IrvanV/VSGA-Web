<?php
require '../app/controllers/homeController.php';
require '../app/models/user.php';



$controller = new homeController();
$controller->index();
?>