<?php
include_once("../../partials/db/connect.php");
var_dump($pdo);
$name=$_POST["name"];
$price=$_POST["price"];
$description=$_POST["desc"];
$categorie=$_POST['cate'];

// for database
$target="upload/";
$file_path=$target.basename($_FILES['file']['name']);
// for filesystem 
$name=$_FILES['file']['name'];
$tmp_name=$_FILES['file']['tmp_name'];
$to_dir="../../upload/".$name;

move_uploaded_file($tmp_name,$to_dir);
echo "<pre>";
var_dump($_POST);
echo "</pre>";
var_dump($file_path);

$statment=$pdo->prepare("insert into products(name,price,picture,description,category_id) values (:name,:price,:pic,:desc,:cate)");
$statment->bindValue(':name',$name);
$statment->bindValue(':price',$price);
$statment->bindValue(':pic',$file_path);
$statment->bindValue(':desc',$description);
$statment->bindValue(':cate',$categorie);

$statment->execute();
header('Location:/appstore/admin');
die()
?>
