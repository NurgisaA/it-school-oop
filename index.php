<?php

use Itschool\Lesson4\Example8\TaskController;
use Itschool\Lesson4\Example8\TaskModel;
use Itschool\Lesson4\Example8\TaskView;

require_once "./vendor/autoload.php";

$model = new TaskModel();
$view = new TaskView();
$controller = new TaskController($model, $view);

//$controller->addTask("Task 1");
//$controller->addTask("Task 2");


$controller->updateView();



