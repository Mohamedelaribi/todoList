<?php


if(isset($_POST["submit"])){
    require_once("insert.php");

    $todo = new Todolist();
    $todo-> set_task($_POST["task"]);
    $todo-> set_statu($_POST["statu"]);
    $todo->insertData(); 
}



?>