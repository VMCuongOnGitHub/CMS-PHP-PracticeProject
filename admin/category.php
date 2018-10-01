<!DOCTYPE html>
<html lang="en">

<?php include 'includes/header.php' ?>

<body>

    <div id="wrapper">

        <?php include 'includes/navigation.php' ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to my litle project!!!
                            <small>Author</small>
                        </h1>

                        <div class="col-xs-6">
                          <?php
                            if (isset($_POST['submit'])) {
                              $category_title = $_POST['category_title'];

                              if ($category_title == '' || empty($category_title)) {
                                echo"You should enter a value";
                              } else {
                                $query = "INSERT INTO category (category_title) ";
                                $query .= "VALUE ('{$category_title}')";

                                $create_category = mysqli_query($connection, $query);

                                if (!$create_category) {
                                  die('Query is not right' . mysqli_error($connection));
                                }
                              }
                            }
                          ?>

                          <form class="" action="" method="post">

                            <div class="form-group">
                              <label for="category_title">Add Category</label>
                              <input class="form-control" type="text" name="category_title" value="">
                            </div>

                            <div class="form-group">
                              <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                            </div>

                          </form>


                        </div>

                        <div class="col-xs-6">
                          <table class="table table-bordered table-hover">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Category Title</th>
                              </tr>
                            </thead>

                            <tbody>
                              <?php
                                // SELECT the elements that you want to display from database
                                $query = "SELECT * FROM category";
                                // Make a connection to database and execute the querry
                                $select_all_category_query = mysqli_query($connection, $query);
                                // Use while loop to show the value
                                while ($row = mysqli_fetch_assoc($select_all_category_query)) {
                                  $category_id = $row['category_id'];
                                  $category_title = $row['category_title'];
                                  echo "
                                    <tr>
                                      <td>{$category_id}</td>
                                      <td>{$category_title}</td>
                                    </tr>
                                  ";
                                }
                              ?>
                            </tbody>
                          </table>
                        </div>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
