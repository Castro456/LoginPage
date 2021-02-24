<?php
include_once ('autoload.php');

$firstname = $_POST['firstname'];
$email = $_POST['email'];
$username = $_POST['usr'];
$password = $_POST['psr'];
$dateofbirth = $_POST['dob'];
$age = $_POST['age'];

$register = new Register();

try {    
    $register->signup($firstname, $email, $username, $password, $dateofbirth, $age);
} catch (TypeError $th) {
    "Error!: ".$th->getMessage();
}