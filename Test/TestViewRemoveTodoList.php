<?php
require_once "../Model/TodoList.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

addTodoList("Eko");
addTodoList("Kurniawan");
addTodoList("Khannedi");
addTodoList("Progammer");
addTodoList("Zaman Now");

showTodoList();

viewRemoveTodoList();

showTodoList();