<?php

namespace Itschool\Lesson4\Example8;

class TaskController
{
    private TaskModel $model;
    private TaskView $view;

    public function __construct(TaskModel $model, TaskView $view)
    {
        $this->model = $model;
        $this->view = $view;
    }

    public function addTask(string $task)
    {
        $this->model->addTask($task);
//        $this->updateView();
    }

    public function getTasks():array
    {
        return $this->model->getTasks();
    }

    public function updateView(): void
    {
        $tasks = $this->getTasks();
        $this->view->displayTasks($tasks);
    }
}