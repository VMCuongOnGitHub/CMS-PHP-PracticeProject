<?php
  if (isset($_POST['submit1'])) {
    $category_title = $_POST['category_title'];
    $category_id = $_GET['update'];

    if ($category_title == '' || empty($category_title)) {
      echo"You should enter a value";
    } else {
      $update_query = "UPDATE category SET category_title = ";
      $update_query .= "'{$category_title}' WHERE category_id = {$category_id}";

      $update_category = mysqli_query($connection, $update_query);

      if (!$update_category) {
        die('Query is not right' . mysqli_error($connection));
      }
    }

  }
?>
  <form class="" action="" method="post">

    <div class="form-group">
      <label for="category_title">Update Category</label>
      <?php
        if (isset($_GET['update'])) {
          $category_id = $_GET['update'];

            $query = "SELECT * FROM category WHERE category_id = {$category_id}";

            $select_category = mysqli_query($connection, $query);
            if (!$select_category) {
              die('Query is not right' . mysqli_error($connection));
            }else {
              while ($row = mysqli_fetch_assoc($select_category)) {
                $category_title = $row['category_title'];
      ?>
        <input class="form-control" type="text" name="category_title" value="<?php echo $category_title ?>">
      <?php
            }
          }
        }
      ?>

    </div>

    <div class="form-group">
      <input class="btn btn-primary" type="submit" name="submit1" value="Update Category">
    </div>

  </form>
