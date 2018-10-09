<?php
session_start();

include ('config.php');

include ('Classes/Messages.php');
include ('Classes/Bootstrap.php');
include ('Classes/Controller.php');
include ('Classes/Model.php');

include ('Controllers/Home.php');
include ('Controllers/Users.php');
include ('Controllers/Posts.php');

include ('Models/Home.php');
include ('Models/Post.php');
include ('Models/User.php');


$bootstrap =  new Bootstrap($_GET);
$controller = $bootstrap->createController();
if($controller){
    $controller->executeAction();
}