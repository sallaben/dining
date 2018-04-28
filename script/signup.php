<?php

require_once("./connect.php");

session_start();

if(sizeof($_POST) != 5) {
    die("Not a valid form submission!");
}

$name = strtoupper($_POST['name']);
$email = strtolower($_POST['email']);
$pwd = $_POST['password'];
$repeat = $_POST['repeat'];

if($pwd != $repeat) {
    die("Password verification failed!");
}

$encrypted = md5($pwd);
$time = time();

$sql = <<<SQL
    INSERT INTO Users (Email, SignupDate, Password, Name) 
    VALUES ('{$email}', NOW(), '{$encrypted}', '{$name}')
SQL;

if(!$result = $db->query($sql)) {
    die("There was an error running the query [" . $db->error . "]");
}

$sql = <<<SQL
    SELECT *
    FROM Users
    WHERE Email='{$email}';
SQL;

if(!$result = $db->query($sql)) {
    die("There was an error running the query [" . $db->error . "]");
}

$row = $result->fetch_assoc();
$_SESSION['UserID'] = $row['UserID'];
$_SESSION['SignupDate'] = $row['SignupDate'];
$_SESSION['Email'] = $email;
$_SESSION['Name'] = $name;

$_SESSION['valid'] = true;

header("Location: ../index.php?msg=" . urlencode("Account successfully created for {$name}!"));

?>