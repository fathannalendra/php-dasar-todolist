<?php

/*
 Menghapus to do list
*/


function removeTodoList(int $number)
{
    global $todoList;

    //unset($todoList[$number]);

    if ($number > sizeof($todoList) || $number <= 0) {
       return false;
    }


    for ($i = $number; $i < sizeof($todoList); $i++) {
        $todoList[$i] = $todoList[$i + 1];     
    }

    unset($todoList[sizeof($todoList)]);

    return true;
}
