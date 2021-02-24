<?php
include_once ('autoload.php');

$id= $_POST['id'];
$tasks= $_POST['task'];

$updated = new Update();

try {    
    $updated->changes($tasks,$id);
} catch (TypeError $th) {
    "Error!: ".$th->getMessage();
}