<?php
include_once ('autoload.php');

$delete = $_POST['delete'];
$deleted = new Delete();

try {    
    $deleted->del($delete);
} catch (TypeError $th) {
    "Error!: ".$th->getMessage();
}