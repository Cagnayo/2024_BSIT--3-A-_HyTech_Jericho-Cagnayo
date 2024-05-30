<?php
session_start(); // Start the session
@include 'connection.php';

$sql = "SELECT * FROM products";
$all_product = $conn->query($sql);

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ecommerce Navbar Design</title>

  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="main.css">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />

</head>
<style>
  html,
  body {
    position: relative;
    height: 100%;
  }

  body {
    background: #eee;
    font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
    font-size: 14px;
    color: #000;
    margin: 0;
    padding: 0;
  }

  a:link {
    text-decoration: none;
    color: #007aff;
  }
</style>

<body>

  <?php include('includes/navbar.php') ?>

  <div class="container">
    <div class="text-center my-5">
      <h1>Processors</h1>
      <hr />
    </div>

    <div class="row"> <!-- Add this row div to enclose all product columns -->
      <?php
      while ($row = mysqli_fetch_assoc($all_product)) {
      ?>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card mb-5 shadow-sm">
            <a href="intel1.php"><img src="<?php echo $row["product_img"] ?>" class="img-fluid" /></a>
            <div class="card-body">
              <div class="card-title">
                <h2><?php echo $row["product_name"] ?></h2>
                <medium class="text-muted"><?php echo $row["category_name"] ?></medium>
              </div>
              <div class="card-text">
                <p class="h5">
                  Php <?php echo $row["price"] ?>
                </p>
              </div>
              <?php if (isset($_SESSION['user_name'])) : ?>
                <a href="#" class="btn btn-outline-primary rounded-0 float-end">Add To Cart</a>
                <a href="#" class="btn btn-outline-primary rounded-0 float-end">Buy Now</a>
              <?php else : ?>
                <a href="login.php" class="btn btn-outline-primary rounded-0 float-end">Add To Cart</a>
                <a href="login.php" class="btn btn-outline-primary rounded-0 float-end">Buy Now</a>
              <?php endif; ?>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div> <!-- End row div -->
  </div>

  <!-- Bootstrap JavaScript and dependencies (Popper.js) -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"></script>
</body>

</html>