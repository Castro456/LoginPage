<?php
include_once ('autoload.php');

$done = $_POST['done'];
$doneresults = new Done();

try {    
    $doneresults->taskdone($done);
} catch (TypeError $th) {
    "Error!: ".$th->getMessage();
}