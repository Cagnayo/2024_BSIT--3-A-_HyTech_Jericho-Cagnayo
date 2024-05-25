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
                                <li><a href="login.php" class="dropdown-item" href="#"><i class="fa fa-sign-out"></i> Logout</a></li>
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
    <div class="container">
      <div class="text-center my-5">
        <h1>Processors</h1>
        <hr />
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card mb-5 shadow-sm">
            <a href="intel1.php"><img src="image/Processor1.webp" class="img-fluid" /></a>

            <div class="card-body">
              <div class="card-title">
                <h2>Sample Model Here</h2>
              </div>
              <div class="card-text">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Deleniti corporis quis ab. Exercitationem et quibusdam
                  impedit? Sint vitae labore nulla sit, dignissimos non tempore,
                  maxime facere, quod harum aliquid in...
                </p>
              </div>
              <a href="#" class="btn btn-outline-primary rounded-0 float-end"
                >Add To Cart</a>
                <a href="#" class="btn btn-outline-primary rounded-0 float-end"
                >Buy Now</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card mb-5 shadow-sm">
            <img src="image/processor2.webp" class="img-fluid" />

            <div class="card-body">
              <div class="card-title">
                <h2>Sample Model Here</h2>
              </div>
              <div class="card-text">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Deleniti corporis quis ab. Exercitationem et quibusdam
                  impedit? Sint vitae labore nulla sit, dignissimos non tempore,
                  maxime facere, quod harum aliquid in...
                </p>
              </div>
              <a href="#" class="btn btn-outline-primary rounded-0 float-end"
                >Add To Cart</a>
                <a href="#" class="btn btn-outline-primary rounded-0 float-end"
                >Buy Now</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card mb-5 shadow-sm">
            <img src="image/Processor1.webp" class="img-fluid" />

            <div class="card-body">
              <div class="card-title">
                <h2>Sample Model Here</h2>
              </div>
              <div class="card-text">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Deleniti corporis quis ab. Exercitationem et quibusdam
                  impedit? Sint vitae labore nulla sit, dignissimos non tempore,
                  maxime facere, quod harum aliquid in...
                </p>
              </div>
              <a href="#" class="btn btn-outline-primary rounded-0 float-end"
                >Add To Cart</a>
                <a href="#" class="btn btn-outline-primary rounded-0 float-end"
                >Buy Now</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card mb-5 shadow-sm">
            <img src="image/processor2.webp" class="img-fluid" />

            <div class="card-body">
              <div class="card-title">
                <h2>Sample Model Here</h2>
              </div>
              <div class="card-text">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Deleniti corporis quis ab. Exercitationem et quibusdam
                  impedit? Sint vitae labore nulla sit, dignissimos non tempore,
                  maxime facere, quod harum aliquid in...
                </p>
              </div>
              <a href="#" class="btn btn-outline-primary rounded-0 float-end"
                >Add To Cart</a>
                <a href="#" class="btn btn-outline-primary rounded-0 float-end"
                >Buy Now</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card mb-5 shadow-sm">
            <img src="image/Processor1.webp" class="img-fluid" />

            <div class="card-body">
              <div class="card-title">
                <h2>Sample Model Here</h2>
              </div>
              <div class="card-text">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Deleniti corporis quis ab. Exercitationem et quibusdam
                  impedit? Sint vitae labore nulla sit, dignissimos non tempore,
                  maxime facere, quod harum aliquid in...
                </p>
              </div>
              <a href="#" class="btn btn-outline-primary rounded-0 float-end"
                >Add To Cart</a>
                <a href="#" class="btn btn-outline-primary rounded-0 float-end"
                >Buy Now</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card mb-5 shadow-sm">
            <img src="image/Processor2.webp" class="img-fluid" />

            <div class="card-body">
              <div class="card-title">
                <h2>Sample Model Here</h2>
              </div>
              <div class="card-text">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Deleniti corporis quis ab. Exercitationem et quibusdam
                  impedit? Sint vitae labore nulla sit, dignissimos non tempore,
                  maxime facere, quod harum aliquid in...
                </p>
              </div>
              <a href="#" class="btn btn-outline-primary rounded-0 float-end"
                >Add To Cart</a>
                <a href="#" class="btn btn-outline-primary rounded-0 float-end"
                >Buy Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>