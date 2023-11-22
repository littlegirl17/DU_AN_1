<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thiên nhiên Organic</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- font awesome cdn -->
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Css Styles -->
    <link rel="stylesheet" href="view/bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="view/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="view/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="view/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="view/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="view/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="view/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="view/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="view/css/style.css" type="text/css">
</head>

<body>
    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="index.php?mod=page&act=home"><img src="view/img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="index.php?mod=product&act=viewcart"><i class="fa fa-shopping-bag"></i> <span><?=COUNT($_SESSION['mygiohang'])?></span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="index.php?mod=page&act=home">Home</a></li>
                <li><a href="./shop-grid.html">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">Bài viết</a></li>
                <li><a href="./contact.html">Liên hệ</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header" style="background-color: #7FAD39;">
        
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="index.php?mod=page&act=home"><img src="view/img/logo.png" alt=""></a>
                    </div>
                </div>
                
                <div class="col-lg-9">
                        <div class="header_cart_ri">
                            
                            <div class="header__cart__login_myacc">
                                <?php if(isset($_SESSION['user'])): ?>
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" style="color: #fff;">
                                        Xin chào, <?= isset($_SESSION['user']['UserName']) ? $_SESSION['user']['UserName'] : 'User' ?>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="index.php?mod=user&act=logout">Đăng xuất</a></li>
                                        </ul>
                                    </div>
                                
                                <?php endif; ?>
                            </div>
                        </div>
                </div>
                
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->


    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <nav class="sidebar__myaccount">
                    <ul>
                        <li>
                            <a href="index.php?mod=myaccount&act=myaccount"><i class="fa-solid fa-house ico-side"></i>Tài khoản</a>
                        </li>
                        <li>
                            <a href="index.php?mod=myaccount&act=update_myaccount"><i class="fa-solid fa-pen-to-square ico-side" style="color: #ffffff;"></i>Cập nhật tài khoản</a>
                        </li>
                        <li>
                            <a href="index.php?mod=myaccount&act=forget_pasword"><i class="fa-solid fa-unlock ico-side" style="color: #ffffff;"></i>Quên mật khẩu</a>
                        </li>
                        <li>
                            <a href="index.php?mod=myaccount&act=doi_password"><i class="fa-solid fa-key ico-side" style="color: #ffffff;"></i> Đổi mật khẩu</a>
                        </li>
                        <li>
                            <a href="index.php?mod=myaccount&act=order_account"><i class="fa-solid fa-cart-shopping ico-side" style="color: #f5f5f5;"></i>Đơn hàng của tôi</a>
                        </li>
                        <li>
                            <a href="index.php?mod=myaccount&act=history_account"><i class="fa-solid fa-clock-rotate-left ico-side" style="color: #fafafa;"></i>   Lịch sự đặt hàng</a>
                        </li>
                        <li>
                            <a href="index.php"><i class="fa-solid fa-right-from-bracket ico-side"></i>  Thoát</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-9">
                <?php
                    include_once 'view/myAccount/v_'.$view_name.'.php';
                ?>
            </div>
    </div>
    </div>
    
    


    <!-- Js Plugins -->
    <script src="view/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="view/js/jquery-3.3.1.min.js"></script>
    <script src="view/js/bootstrap.min.js"></script>
    <script src="view/js/jquery.nice-select.min.js"></script>
    <script src="view/js/jquery-ui.min.js"></script>
    <script src="view/js/jquery.slicknav.js"></script>
    <script src="view/js/mixitup.min.js"></script>
    <script src="view/js/owl.carousel.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="view/js/main.js"></script>



</body>

</html>