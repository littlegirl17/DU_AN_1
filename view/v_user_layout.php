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
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
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
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="index.php?mod=page&act=home">Home</a></li>
                <li><a href="./shop-grid.html">Shop</a></li>
                <li><a href="#">Danh mục</a>
                    <ul class="header__menu__dropdown">
                        <?php foreach($getdanhmuc as $dm):?>
                            <li><a href="index.php?mod=catagory&act=catagory_detail&MaDM=<?=$dm['MaDM']?>"><?=$dm['TenDM']?>(<?=get_count_sp($dm['MaDM'])?>)</a></li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <li><a href="index.php?mod=page&act=bloghome">Bài viết</a></li>
                <li><a href="index.php?mod=page&act=contact">Liên hệ</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> Organic@gamil.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                                <li>Free Shipping for all Order of $99</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__auth">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="index.php?mod=page&act=home"><img src="view/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="index.php?mod=page&act=home">Home</a></li>
                            <li><a href="./shop-grid.html">Shop</a></li>
                            <li><a href="#">Danh mục</a>
                                <ul class="header__menu__dropdown">
                                    <?php foreach($getdanhmuc as $dm):?>
                                        <li><a href="index.php?mod=catagory&act=catagory_detail&MaDM=<?=$dm['MaDM']?>"><?=$dm['TenDM']?>(<?=get_count_sp($dm['MaDM'])?>)</a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li><a href="index.php?mod=page&act=bloghome">Blog</a></li>
                            <li><a href="index.php?mod=page&act=contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                        <div class="header_cart_ri">

                        
                            <div class="header__cart">
                                <ul>
                                    <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                                    <li><a href="index.php?mod=product&act=viewcart"><i class="fa fa-shopping-bag"></i> <span><?=COUNT($_SESSION['mygiohang'])?></span></a></li>
                                </ul>
                            </div>
                            <div class="header__cart__login">
                                <?php if(isset($_SESSION['user'])): ?>
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" >
                                        <?= isset($_SESSION['user']['UserName']) ? $_SESSION['user']['UserName'] : 'User' ?>
                                        </button>
                                        <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="index.php?mod=myaccount&act=myaccount">Tài khoản của tôi</a></li>
                                            <li><a class="dropdown-item" href="index.php?mod=user&act=logout">Đăng xuất</a></li>
                                        </ul>
                                    </div>
                                <?php else: ?>
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-user"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="index.php?mod=user&act=login">Đăng nhập</a></li>
                                            <li><a class="dropdown-item" href="index.php?mod=user&act=register">Đăng ký</a></li>
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

    <!-- Hero Section Begin -->
    <?php if($view_name=='page_home'): ?>
        <section class="hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="hero__categories">
                            <div class="hero__categories__all">
                                <i class="fa fa-bars"></i>
                                <span>Danh mục Organic</span>
                            </div>
                            <ul>
                                <?php foreach($getdanhmuc as $dm):?>
                                    <li><a href="index.php?mod=catagory&act=catagory_detail&MaDM=<?=$dm['MaDM']?>"><?=$dm['TenDM']?>(<?=get_count_sp($dm['MaDM'])?>)</a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="hero__search">
                            <div class="hero__search__form">
                                <form action="" method="post" >
                                    <input type="text" name="keyword" id="live_search" placeholder="What do yo u need?">
                                    <button type="submit" name="submit_home" id="searchBtn" class="site-btn">SEARCH</button>
                                </form>
                            </div>
                            <div class="hero__search__phone">
                                <div class="hero__search__phone__icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="hero__search__phone__text">
                                    <h5>+65 11.188.888</h5>
                                    <span>support 24/7 time</span>
                                </div>
                            </div>
                        </div>
                        <div class="hero__item set-bg" data-setbg="view/img/hero/banner.png">
                            <!--<div class="hero__text">
                                <span>FRUIT FRESH</span>
                                <h2>Vegetable <br />100% Organic</h2>
                                <p>Free Pickup and Delivery Available</p>
                                <a href="#" class="primary-btn">SHOP NOW</a> 
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    <?php endif; ?>
    <!-- Hero Section End -->
    <?php
        include_once 'view/v_'.$view_name.'.php';
    ?>
    

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="view/img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Địa chỉ: Công viên phần mềm Quang QTSC Building 1, Trung, P Q.12, Thành phố Hồ Chí Minh</li>
                            <li>SĐT: 0353123771</li>
                            <li>Email: Organic@gamil.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Liên kết hữu ích</h6>
                        <ul>
                            <li><a href="#">Giới thiệu về chúng tôi</a></li>
                            <li><a href="#">Giới thiệu về Organic</a></li>
                            <li><a href="#">Mua sắm an toàn</a></li>
                            <li><a href="#">Thông tin giao hàng</a></li>
                            <li><a href="#">Chính sách bảo mật</a></li>
                            <li><a href="#">Sơ đồ website</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Chúng tôi là ai</a></li>
                            <li><a href="#">Dịch vụ của chúng tôi</a></li>
                            <li><a href="#">Dự án</a></li>
                            <li><a href="#">Liên hệ</a></li>
                            <li><a href="#">Đổi mới sáng tạo</a></li>
                            <li><a href="#">Khách hàng chứng thực</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Đăng ký nhận tin</h6>
                        <p>Nhận thông tin sản phẩm mới nhất, tin khuyến mãi và nhiều hơn nữa.</p>
                        <form action="#">
                            <input type="text" placeholder="Email của bạn">
                            <button type="submit" class="site-btn">Đăng ký</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        <div class="footer__copyright__payment"><img src="view/img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="view/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
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

