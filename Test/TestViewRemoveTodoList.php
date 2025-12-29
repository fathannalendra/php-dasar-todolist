<?php

require_once __DIR__. "/../View/ViewRemoveTodoList.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";

addTodoList("Belajar PHP DASAR");
addTodoList("Belajar PHP OOP");
addTodoList("Belajar PHP DB");
addTodoList("Belajar PHP MYSQL");


showTodoList();
viewRemoveTodoList();
showTodoList();
viewRemoveTodoList();
showTodoList();
