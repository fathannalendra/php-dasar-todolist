<?php


require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";


addTodoList("fathan");
addTodoList("nalendra");
addTodoList("budi");
addTodoList("joko");
addTodoList("susilo");

showTodoList();
removeTodoList(3);
showTodoList();
// var_dump($todoList);
// removeTodoList(1);
// var_dump($todoList);

$success = removeTodoList(0);
var_dump($success);
showTodoList();