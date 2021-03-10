<?php

if(isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $password = $_POST["password"];
    $passwordRepeat = $_POST["passwordrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($name, $email, $username, $password, $passwordRepeat) !== false) {
        header("location: ../signup.php?error=emptyInput"); 
        exit();
    }
    if (invalidUid($username) !== false) {
        header("location: ../signup.php?error=invaliduid"); 
        exit();
    }
    if (invalidEmail($username) !== false) {
        header("location: ../signup.php?error=invalidemail"); 
        exit();
    }
    if (passwordMatch($password, $passwordRepeat) !== false) {
        header("location: ../signup.php?error=passwordsdon'tmatch"); 
        exit();
    }
    if (uidExists($conn, $username) !== false) {
        header("location: ../signup.php?error=usernametaken"); 
        exit();
    }
    createUser($conn,$name,$username,$email,$password);
}
else {
    header("location: ../signup.php"); 
    exit();
}