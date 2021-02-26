<?php

require_once "../View/ViewAddTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

addTodoList("Eko");
addTodoList("Kurniawan");

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();