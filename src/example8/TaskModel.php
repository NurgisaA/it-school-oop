<?php

namespace Itschool\Lesson4\Example8;

class TaskModel {
    private array $tasks = [];

    public function addTask(string $task): void {
        $this->tasks[] = $task;
    }

    public function getTasks(): array {
        return $this->tasks;
    }
}