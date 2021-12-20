<?php

session_start();
session_destroy();
header('Location: /appstore/admin/login.php',true,302);
die();