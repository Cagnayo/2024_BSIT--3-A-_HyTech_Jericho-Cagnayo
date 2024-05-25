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
      padding-top: 10px;
      width: 90%;
      height: 40%;
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
    a:link{
        text-decoration:none;
        color: #007aff;
    }
  </style>
<body>

    <div class="main-navbar shadow-sm sticky-top">
        <div class="top-navbar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2 my-auto d-none d-sm-none d-md-block d-lg-block">
                        <h5 class="brand-name">CybertTech </h5>
                    </div>
                    <div class="col-md-5 my-auto">
                        <form role="search">
                            <div class="input-group">
                                <input type="search" placeholder="Search your product" class="form-control" />
                                <button class="btn bg-white" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-5 my-auto">
                        <ul class="nav justify-content-end">
                            
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="fa fa-shopping-cart"></i> Cart (0)
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="fa fa-heart"></i> Wishlist (0)
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-user"></i> Username 
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="login.php" class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a></li>
                                <li><a href="login.php" class="dropdown-item" href="#"><i class="fa fa-list"></i> My Orders</a></li>
                                <li><a href="login.php" class="dropdown-item" href="#"><i class="fa fa-heart"></i> My Wishlist</a></li>
                                <li><a href="login.php" class="dropdown-item" href="#"><i class="fa fa-shopping-cart"></i> My Cart</a></li>
                                <li><a href="logout.php" class="dropdown-item" href="#"><i class="fa fa-sign-out"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand d-block d-sm-block d-md-none d-lg-none" href="#">
                  HyperTech
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sample Text</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sample Text</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sample Text</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sample Text</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sample Texts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sample Text</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sample Texts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sample Text</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sample Text</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sample Texts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sample Text</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sample Text</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sample Text</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">Promotion 1</div>
      <div class="swiper-slide">Promotion 2</div>
      <div class="swiper-slide">Promotion 3</div>
      <div class="swiper-slide">Promotion 4</div>
      <div class="swiper-slide">Promotion 5</div>

    </div>
    <div class="swiper-pagination"></div>
  </div>
  
  <section id = "collection" class = "py-5">
        <div class = "container">
            <div class = "title text-center">
                <h2 class = "position-relative d-inline-block" style="padding-bottom:10px;">Available Products</h2>
            </div>
    <div class="container text-center">

    <div class="collectrows">
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card mb-5 shadow-sm">
    

            <div class="card-body">
              <div class="card-title">
                <a href="processor.php"><h3>Processor</h3></a>
              </div>
              <div class="card-text">
               
              </div>
             
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card mb-5 shadow-sm">
        

            <div class="card-body">
              <div class="card-title">
                <a href="#"><h3>Motherboard</h3></a>
              </div>
              <div class="card-text">
               
              </div>
             
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card mb-5 shadow-sm">
         

            <div class="card-body">
              <div class="card-title">
              <a href="#"><h3>Graphics Card</h3></a>
              </div>
              <div class="card-text">
               
              </div>
            
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card mb-5 shadow-sm">
        

            <div class="card-body">
              <div class="card-title">
              <a href="#"><h3>Memory</h3></a>
              </div>
              <div class="card-text">
               
              </div>
             
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card mb-5 shadow-sm">
          

            <div class="card-body">
              <div class="card-title">
              <a href="#"> <h3>Solid State Drives</h3></a>
              </div>

             
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card mb-5 shadow-sm">
            <div class="card-body">
              <div class="card-title">
              <a href="#"><h3>Power Supply</h3></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card mb-5 shadow-sm">
            <div class="card-body">
              <div class="card-title">
              <a href="#"> <h3>Pc Case</h3></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card mb-5 shadow-sm">
            <div class="card-body">
              <div class="card-title">
              <a href="#"> <h3>Laptops</h3></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card mb-5 shadow-sm">
            <div class="card-body">
              <div class="card-title">
              <a href="#">  <h3>Monitor</h3></a>
              </div>
            </div>
          </div>
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