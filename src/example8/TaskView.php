<?php

namespace Itschool\Lesson4\Example8;

class TaskView {
    public function displayTasks(array $tasks) {

        $loader = new \Twig\Loader\FilesystemLoader('./templates');

        $twig = new \Twig\Environment($loader, [
            'cache' => './cache',
            'debug' => true
        ]);

        $template = $twig->load('index.html');

        $context = [
            'title' => 'Index Page',
            'tasks' => $tasks
        ];

        echo $template->render($context);

    }
}




