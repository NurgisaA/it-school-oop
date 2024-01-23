<?php

namespace Itschool\Lesson4\Example8;

class TaskView {
    public function displayTasks(array $tasks) {
        echo "<ul>";
        foreach ($tasks as $task) {
            echo "<li>$task</li>";
        }
        echo "</ul>";
    }
}