<?php

require_once __DIR__. "/../View/ViewAddTodoList.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";

addTodoList("Belajar PHP DASAR");
addTodoList("Belajar PHP OOP");
addTodoList("Belajar PHP DB");
addTodoList("Belajar PHP MYSQL");

viewAddTodoList();
showTodoList();
viewAddTodoList();
showTodoList();