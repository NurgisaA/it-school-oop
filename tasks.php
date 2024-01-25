<?php
include_once "./vendor/autoload.php";

use Itschool\Lesson4\example8\TaskController;
use Itschool\Lesson4\Example8\TaskModel;
use Itschool\Lesson4\Example8\TaskView;


//$q = $_GET['q'];

$model = new TaskModel();
$view = new TaskView();
$controller = new TaskController($model, $view);

/**
 * task_name
 * @see templates/index.html:21
 */
$task_name = $_POST['task_name'];

$controller->addTask($task_name);

header('Location: /');
