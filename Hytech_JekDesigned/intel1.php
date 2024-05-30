<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/style.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
</head>

<body>
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
                                <button1 class="btn bg-white" type="submit">
                                    <i class="fa fa-search"></i>
                                </button1>
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

  <section>
    <div class="container flex">
      <div class="left">
        <div class="main_image">
          <img src="image/Processor1.webp" class="slide">
        </div>
        <div class="option flex">
          <img src="image/Processor1.webp" onclick="img('image/p1.jpg')">
          <img src="image/Processor1.webp" onclick="img('image/p2.jpg')">
          <img src="image/Processor1.webp" onclick="img('image/p3.jpg')">
          <img src="image/Processor1.webp" onclick="img('image/p4.jpg')">
          <img src="image/Processor1.webp" onclick="img('image/p5.jpg')">
          <img src="image/Processor1.webp" onclick="img('image/p6.jpg')">
        </div>
      </div>
      <div class="right">
        <h3>Intel 12100f</h3>
        <h4> <small>$</small>999.99 </h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        <h5>Review and Feedbacks</h5>
        <div class="color flex1">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
        <h5>Quantity</h5>
        <div class="add flex1">
          <span>-</span>
          <label>1</label>
          <span>+</span> 
      <label class="cart"> Cart</label>
       
        </div>

        <button>Buy Now</button>
        
      </div>
    </div>
  </section>
  <script>
    function img(anything) {
      document.querySelector('.slide').src = anything;
    }

    function change(change) {
      const line = document.querySelector('.home');
      line.style.background = change;
    }
  </script>
</body>

</html>