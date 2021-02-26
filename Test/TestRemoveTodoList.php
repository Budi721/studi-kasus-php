<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

addTodoList("Joko");
addTodoList("Widodo");
addTodoList("Eko");

showTodoList();

// Menghapus todoList index ke-3
removeTodoList(3);

showTodoList();

// Tes tidak input valid 
$succes = removeTodoList(5);
var_dump($succes);

showTodoList();


