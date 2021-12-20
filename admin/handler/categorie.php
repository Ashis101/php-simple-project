<?php

include("../../partials/db/connect.php");
$name=htmlspecialchars(strtolower($_POST['cate']));

$statment=$pdo->prepare("insert into categories(name) values(:name)");
$statment->bindValue(":name",$name);

$statment->execute();
header("Location:/appstore/");
?>