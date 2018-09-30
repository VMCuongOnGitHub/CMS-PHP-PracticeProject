<!-- Blog Sidebar Widgets Column -->
<div class="col-md-4">
    <!-- Blog Search Well -->
    <div class="well">
        <h4>Blog Search</h4>
        <form action="search.php" method="post">
          <div class="input-group">
              <input name="search" type="text" class="form-control">
              <span class="input-group-btn">
                  <button name="submit" class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
              </span>
          </div>
        </form>
        <!-- /.input-group -->
    </div>

    <!-- Blog Categories Well -->
    <div class="well">
        <h4>Blog Categories</h4>
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-unstyled">
                  <?php
                    // SELECT the elements that you want to display from database
                    $query = "SELECT * FROM category";
                    // Make a connection to database and execute the querry
                    $select_all_category_query = mysqli_query($connection, $query);
                    // Use while loop to show the value
                    while ($row = mysqli_fetch_assoc($select_all_category_query)) {
                      $category_title = $row['category_title'];
                      echo "<li><a href='#'>{$category_title}</a></li>";
                    }
                  ?>
                </ul>
            </div>
        </div>
        <!-- /.row -->
    </div>

    <!-- Side Widget Well -->
    <div class="well">
        <h4>Side Widget Well</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
    </div>

</div>
