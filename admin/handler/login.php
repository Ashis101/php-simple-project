<?php
include_once('../../partials/db/connect.php');
include_once('../../message/Flash.php');
$email=$_POST['email'];
$password=$_POST['password'];
// $data=["username"=>"ash007@bugcrowed.com","password"=>"hacker"];
$query="select * from admins where username='$email' ";
$statment=$pdo->query($query);
$data=$statment->fetchAll(PDO::FETCH_ASSOC)[0];
// var_dump($data['username']);
if($email === $data['username'] and $password === $data['password']){
    // $me=new Flash();
    // $me->take('valid');
    session_start();
    $_SESSION['email']=$data['username'];
    $_SESSION['password']=$data['password'];
    header('Location:/appstore/admin/',true,302);
    die();

}else{
// $me=new Flash;
// $me->take("not valid");
 header('Location:/appstore/admin/login.php',true,302);
 die();
}



