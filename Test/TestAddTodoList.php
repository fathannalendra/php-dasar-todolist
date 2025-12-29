<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";


addTodoList("Belajar PHP MYSQL");
addTodoList("Belajar PHP FRAMEWORK");
addTodoList("Belajar PHPMYADMIN");

var_dump($todoList);