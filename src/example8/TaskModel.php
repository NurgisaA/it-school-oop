<?php

namespace Itschool\Lesson4\Example8;

class TaskModel {
    private array $tasks = [];

    public function __construct()
    {
        $this->reloadDB();
    }


    public function addTask(string $task): void {
        $this->reloadDB();

        $this->tasks[] = $task;
        $json = json_encode($this->tasks);

        file_put_contents("db.json", $json);

    }

    public function getTasks(): array {
        $this->reloadDB();
        return $this->tasks;
    }

    private function reloadDB(): void
    {
        $db = file_get_contents("db.json");
        $json = json_decode($db);
        $this->tasks = array_replace($this->tasks, $json);
    }
}