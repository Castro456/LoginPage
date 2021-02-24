<?php
session_start();
include_once ('autoload.php');

$add = $_POST['add1'];
$userid = $_SESSION["id"];
$progress = 1;

$task = new Add();

try {    
    $task->added($add, $userid, $progress);
} catch (TypeError $th) {
    "Error!: ".$th->getMessage();
}