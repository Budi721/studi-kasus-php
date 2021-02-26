<?php

require_once "../View/ViewShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Progammer");
addTodoList("Zaman Now");

viewShowTodoList();