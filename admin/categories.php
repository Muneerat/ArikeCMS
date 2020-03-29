  <?php include "include/admin_header.php" ?>

    <div id="wrapper">

        <!-- Navigation -->

<?php include "include/admin_navigation.php" ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
<h1 class="page-header"> 
    Welcome to admin
     <small>Author</small>
 </h1>
<div class="col-xs-6">

<?php insert_categories(); ?>


<form action="" method="post">
    <div class="form-group">
        <label for="cat_tittle">Add Category</label>
        <input type="text" class="form-control" name="cat_tittle">
    </div>

        <div class="form-group">
        <input  class="btn btn-primary" type="submit" name="submit" value="Add Category">
    </div>
</form>
<?php //UPDATE AND INCLUDE QUERY
if (isset($_GET['edit'])) {
    $cat_id = $_GET['edit'];
    include "include/update_categories.php";
}
 ?>
</div> <!-- Add category Form -->

<div class="col-xs-6">

<table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>Id</th>
            <th>Category title</th>
        </tr>
        </thead>
        <tbody>
<?php //find all categories query
findAllCategories();
?>

<?php //delete query
deleteCategories();
?>

        </tbody>
    </table>
</div>

<!--                         <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol> -->
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div> 
        <!-- /#page-wrapper -->

<?php include"include/admin_footer.php" ?>