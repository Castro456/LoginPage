<?php
session_start();
include_once ('autoload.php');

$email = $_POST['em'];
$password = $_POST['psr'];

$result = new Login();

try {    
    $result->signin($email, $password);
} catch (TypeError $th) {
    "Error!: ".$th->getMessage();
}