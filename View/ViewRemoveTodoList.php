<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";

function viewRemoveTodoList()
{
    echo "MENGHAPUS TODO" . PHP_EOL;

    $hapusTodo = input("Pilih nomor list (x untuk batal)");


    if (strtolower($hapusTodo) == "x") {
        echo "Batal menghapus todo" . PHP_EOL;
    } else {
        $success = removeTodoList($hapusTodo);
        if ($success) {
            echo "Sukses menghapus list nomor $hapusTodo" . PHP_EOL;
        } else {
            echo "Gagal Menghapus todo nomor $hapusTodo" . PHP_EOL;
        }
    }
}
