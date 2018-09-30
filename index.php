<?php include "includes/db.php";?>
<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php"; ?>

<body>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <?php
                  // SELECT the elements that you want to display from database
                  $query = "SELECT * FROM post";
                  // Make a connection to database and execute the querry
                  $select_all_post_query = mysqli_query($connection, $query);
                  // Use while loop to show the value
                  while ($row = mysqli_fetch_assoc($select_all_post_query)) {
                    $post_title = $row['post_title'];
                    $post_author = $row['post_author'];
                    $post_date = $row['post_date'];
                    $post_image = $row['post_image'];
                    $post_content = $row['post_content'];

                    echo "
                    
                    <h2>
                        <a href='#'>{$post_title}</a>
                    </h2>
                    <p class='lead'>
                        by <a href='index.php'>{$post_author}</a>
                    </p>
                    <p><span class='glyphicon glyphicon-time'></span> Posted on {$post_date} at 10:00 PM</p>
                    <hr>
                    <img class='img-responsive' src='{$post_image}' alt=''>
                    <hr>
                    <p>{$post_content}</p>
                    <a class='btn btn-primary' href='#'>Read More <span class='glyphicon glyphicon-chevron-right'></span></a>
                    <hr>

                    ";
                  }
                ?>

                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>



            </div>

            <?php include "includes/sidebar.php";?>

        </div>
        <!-- /.row -->

        <hr>

<?php include "includes/footer.php";?>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
