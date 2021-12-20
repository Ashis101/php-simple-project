<!DOCTYPE html>
<html>
<?php include("admin_partials/head.php")?>
<?php include_once('admin_partials/session.php') ?>

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
        Categorie
      </h1>
      <ol style="overflow: hidden;" class="breadcrumb">
        <li><a style="overflow: hidden;" href="categories.php"> Home</a></li>
        <li><a style="overflow: hidden;" href="products.php">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <div style="display: flex;">
         <form style="padding: 30px;width:60%;margin:auto" method="POST" action="./handler/categorie.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Categorie</label>
                <input type="text" name="cate" class="form-control" placeholder="Categorie">
            </div>
  
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  </div>
  <!-- /.content-wrapper -->
  <?php include_once("admin_partials/footer.php") ?>
</body>
</html>
