<div class="main-navbar shadow-sm sticky-top">
    <div class="top-navbar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 my-auto d-none d-sm-none d-md-block d-lg-block">
                    <h5 class="brand-name">Cyberware </h5>
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
                                <i class="fa fa-user"></i>
                                <?php
                                // Display "Guest" if no user is logged in
                                if (isset($_SESSION['user_name'])) {
                                    echo $_SESSION['user_name'];
                                } else {
                                    echo 'Guest';
                                }
                                ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php if (isset($_SESSION['user_name'])) : ?>
                                    <li><a href="profile.php" class="dropdown-item"><i class="fa fa-user"></i> Profile</a></li>
                                    <li><a href="orders.php" class="dropdown-item"><i class="fa fa-list"></i> My Orders</a></li>
                                    <li><a href="wishlist.php" class="dropdown-item"><i class="fa fa-heart"></i> My Wishlist</a></li>
                                    <li><a href="cart.php" class="dropdown-item"><i class="fa fa-shopping-cart"></i> My Cart</a></li>
                                    <li><a href="logout.php" class="dropdown-item"><i class="fa fa-sign-out"></i> Logout</a></li>
                                <?php else : ?>
                                    <li><a href="login.php" class="dropdown-item"><i class="fa fa-sign-in"></i> Login</a></li>
                                <?php endif; ?>
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