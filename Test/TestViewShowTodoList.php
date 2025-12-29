<?php

require_once __DIR__. "/../View/ViewShowTodoList.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";

addTodoList("Belajar PHP DASAR");
addTodoList("Belajar PHP OOP");
addTodoList("Belajar PHP DB");
addTodoList("Belajar PHP MYSQL");
addTodoList("Belajar PHP FRAMEWORK");
viewShowtodoList();