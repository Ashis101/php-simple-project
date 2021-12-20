<!DOCTYPE html>
<html>
<?php include("admin_partials/head.php")?>
<?php //include_once('./admin_partials/session.php') ?>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php include_once('admin_partials/header.php')?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include_once('admin_partials/aside.php')?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="categories.php"> Home</a></li>
        <li class="products.php">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-sm-9">
                <?php
                    include_once('../partials/db/connect.php');
                    $statement=$pdo->query("select * from products");
                    $data=$statement->fetchAll(PDO::FETCH_ASSOC);
                    for($i=0;$i<count($data);$i++){ ?>
                        <a href="showproduct.php/?id=<?php $data[$i]["id"] ?>">
                            <h3><?php $data[$i]["id"]?> : <?php $data[$i]["name"]?></h3>
                            
                    
                        </a>
                    

                <?php 
                    }
                ?>
            </div>
        </div>
    </section>
   
  </div>
  <!-- /.content-wrapper -->
  <?php include_once("admin_partials/footer.php") ?>
</body>
</html>
