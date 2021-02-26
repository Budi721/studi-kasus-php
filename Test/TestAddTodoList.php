<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Test");
addTodoList("Menambah");
addTodoList("TodoList");

var_dump($todoList);
