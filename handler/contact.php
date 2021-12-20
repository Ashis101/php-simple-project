<?php
include_once('../partials/db/connect.php');

$email=$_POST["email"];
$msg=$_POST["msg"];

$statement=$pdo->prepare("insert into contact(email,msg) values(:email,:msg) ");
$statement->bindValue(':email',$email);
$statement->bindValue(':msg',$msg);
$statement->execute();

header("Location:/appstore/");

?>