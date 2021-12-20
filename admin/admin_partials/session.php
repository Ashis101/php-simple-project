<?php

session_start();

if(empty($_SESSION['email']) and empty($_SESSION['password'])){
    // header('Location: /appstore/admin/login.php',true,302);
    // die();
    echo 'GO to login';

}