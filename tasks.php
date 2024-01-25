<?php
include_once "./vendor/autoload.php";

use Itschool\Lesson4\example8\TaskController;
use Itschool\Lesson4\Example8\TaskModel;
use Itschool\Lesson4\Example8\TaskView;


//$q = $_GET['q'];

$model = new TaskModel();
$view = new TaskView();
$controller = new TaskController($model, $view);


$controller->addTask("Task 1");


$controller->updateView();

