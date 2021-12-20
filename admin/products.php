<?php 
include_once('../partials/db/connect.php');

$query="select * from categories";
$statement=$pdo->query($query);
$data=$statement->fetchAll(PDO::FETCH_ASSOC);

?> 

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
        Products
      </h1>
      <!-- <ol class="breadcrumb">
        <li><a href="categories.php"> Home</a></li>
        <li><a href="products.php">Dashboard</li>
      </ol> -->
    </section>

    <!-- Main content -->
    <div style="display: flex;">
         <form style="padding: 30px;width:60%;margin:auto" action="./handler/product.php"  method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Image</label>
                <input type="file" name="file"  >
            </div>
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="text" name="price" class="form-control" placeholder="Price">
            </div>
            
            <div class="form-group">
                <label>Description</label>
                <textarea name="desc"  class="form-control" ></textarea>
            </div>
            <div class="form-group">
                <label>Categorie</label>
                <select name='cate' class="custom-select">
                  <option selected>Choose...</option>
                  <?php foreach($data as $e){
                      echo "<option value=".$e['id'].">".$e['name']."</option>";

                  }
                  ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  </div>
  <!-- /.content-wrapper -->
  <?php include_once("admin_partials/footer.php") ?>
</body>
</html>
