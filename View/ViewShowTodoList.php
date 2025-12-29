<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once "ViewAddTodoList.php";
require_once "ViewRemoveTodoList.php";

function viewShowtodoList()
{
    while (true) {
        showTodoList();

        echo "MENU" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;

        $pilihan = input("Pilih Menu");

        if ($pilihan == "1") {
            viewAddTodoList();
        } else if ($pilihan == "2") {
            viewRemoveTodoList();
        } else if (strtolower($pilihan) == "x") {
            break;
        } else {
            echo "Tidak ada pilihan" . PHP_EOL;
        }
    }

    echo "Sampai jumpa lagi".PHP_EOL;
};
