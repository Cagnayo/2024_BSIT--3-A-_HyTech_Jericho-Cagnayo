<?php
session_start(); // Start the session
@include 'connection.php';
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>hytech</title>

  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="main.css">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

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

  .swiper {
    
    width: 62%;
    height: 42%;
  }

  .swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  a:link {
    text-decoration: none;
    color: #000;
  }

h3{
  font-size:25px;
}
 .img-responsive {

  width: 70%;
height: 50%;
}

h2{
  margin-top: -20px;
}


</style>

<body>

  <?php include('includes/navbar.php') ?>

  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
      <img src="Image/promotion 3.svg" class="img-responsive" alt="processor"style="width:100%;">
      </div>
      <div class="swiper-slide">
      <img src="Image/promotion 2.svg" class="img-responsive" alt="processor"style="width:100%;">
      </div>
      <div class="swiper-slide">
      <img src="Image/promotion 5.svg" class="img-responsive" alt="processor"style="width:100%;">
      </div>
      <div class="swiper-slide">
      <img src="Image/promotion 4.svg" class="img-responsive" alt="processor"style="width:100%;">
      </div>
      <div class="swiper-slide">
      <img src="Image/promotion 1.svg" class="img-responsive" alt="processor"style="width:100%;">
      </div>

    </div>
    <div class="swiper-pagination"></div>
  </div>

  <section id="collection" class="py-5">
    <div class="container">
      <div class="title text-center">
        <h2 class="position-relative d-inline-block" style="padding-bottom:10px;">Available Products</h2>
      </div>
      <div class="container text-center">

        <div class="collectrows">
          <div class="row">
            <div class="col-lg-2 col-md-6 col-sm-12">
              <div class="card mb-5 shadow-sm">
                <div class="card-body">
                  <div class="card-title">
                    <a href="processor.php">
                    <img src="Image/processsor.svg" class="img-responsive" alt="processor">
                      <h3>Processor</h3>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-12">
              <div class="card mb-5 shadow-sm">
                <div class="card-body">
                  <div class="card-title">
                    <a href="processor.php">
                    <img src="Image/motherboard.svg" class="img-responsive" alt="processor">
                      <h3>Motherboard</h3>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12">
              <div class="card mb-5 shadow-sm">
                <div class="card-body">
                  <div class="card-title">
                    <a href="processor.php">
                    <img src="Image/graphics card.svg" class="img-responsive" alt="processor">
                      <h3>Grapics Card</h3>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-12">
              <div class="card mb-5 shadow-sm">
                <div class="card-body">
                  <div class="card-title">
                    <a href="processor.php">
                    <img src="Image/memory.svg" class="img-responsive" alt="processor">
                      <h3>Memory</h3>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-12">
              <div class="card mb-5 shadow-sm">
                <div class="card-body">
                  <div class="card-title">
                    <a href="processor.php">
                    <img src="Image/hard drive.svg" class="img-responsive" alt="processor">
                  <h3> Hard Drive</h3>

                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-12">
              <div class="card mb-5 shadow-sm">
                <div class="card-body">
                  <div class="card-title">
                    <a href="processor.php">
                    <img src="Image/power supply.svg" class="img-responsive" alt="processor">
                      <h3>Power Supply</h3>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12">
              <div class="card mb-5 shadow-sm">
                <div class="card-body">
                  <div class="card-title">
                    <a href="processor.php">
                    <img src="Image/pc case.svg" class="img-responsive" alt="processor">
                      <h3>Pc Case</h3>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12">
              <div class="card mb-5 shadow-sm">
                <div class="card-body">
                  <div class="card-title">
                    <a href="processor.php">
                    <img src="Image/laptop.svg" class="img-responsive" alt="processor">
                      <h3>Laptops</h3>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12">
              <div class="card mb-5 shadow-sm">
                <div class="card-body">
                  <div class="card-title">
                    <a href="processor.php">
                    <img src="Image/monitor.svg" class="img-responsive" alt="processor">
                      <h3>Monitor</h3>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12">
              <div class="card mb-5 shadow-sm">
                <div class="card-body">
                  <div class="card-title">
                    <a href="processor.php">
                    <img src="Image/keyboard.svg" class="img-responsive" alt="processor">
                      <h3>Keyboard</h3>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12">
              <div class="card mb-5 shadow-sm">
                <div class="card-body">
                  <div class="card-title">
                    <a href="processor.php">
                    <img src="Image/mouse.svg" class="img-responsive" alt="processor">
                      <h3>Mouse</h3>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12">
              <div class="card mb-5 shadow-sm">
                <div class="card-body">
                  <div class="card-title">
                    <a href="processor.php">
                    <img src="Image/headset.svg" class="img-responsive" alt="processor">
                      <h3>Headset</h3>
                    </a>
                  </div>
                </div>
              </div>
            </div>


      <!-- Swiper JS -->
      <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

      <!-- Initialize Swiper -->
      <script>
        var swiper = new Swiper(".mySwiper", {
          pagination: {
            el: ".swiper-pagination",
            dynamicBullets: true,
          },
        });
      </script>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>