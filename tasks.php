<?php
include_once "./vendor/autoload.php";

use Itschool\Lesson4\example8\TaskController;
use Itschool\Lesson4\Example8\TaskModel;
use Itschool\Lesson4\Example8\TaskView;


//$q = $_GET['q'];

$model = new TaskModel();
$view = new TaskView();
$controller = new TaskController($model, $view);

// Добавим задачи через контроллер
$controller->addTask("Task 1");
$controller->addTask("Task 2");
$controller->addTask("Task 3");
//$controller->addTask("Task 4");

// Выводим задачи через представление
$controller->updateView();

