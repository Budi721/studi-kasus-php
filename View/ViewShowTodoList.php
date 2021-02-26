<?php
require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../View/ViewAddTodoList.php";
require_once __DIR__ . "/../View/ViewRemoveTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";

function viewShowTodoList() {
    while(true) {
        // Menampilkan todoList
        showTodoList();

        // Pilihan Menu di terminal user 
        echo "MENU" . PHP_EOL;
        echo "Pilih 1 untuk menambah todo" . PHP_EOL;
        echo "Pilih 2 untuk menghapus todo" . PHP_EOL;
        echo "Pilih x untuk keluar" . PHP_EOL;

        // Menyimpan masukan user kedalam variabel pilihan
        $pilihan = input("Pilih");

        if ($pilihan == "1"){
            viewAddTodoList();
        } elseif ($pilihan == "2"){
            viewRemoveTodoList();
        } elseif ($pilihan == "x"){
            break;
        } else {
            echo "Pilihan tidak dimengerti" . PHP_EOL;
        }
    }
    
    echo "Sampai Jumpa Lagi" . PHP_EOL;
}