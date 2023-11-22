    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            <li><a href="#">Fresh Meat</a></li>
                            <li><a href="#">Vegetables</a></li>
                            <li><a href="#">Fruit & Nut Gifts</a></li>
                            <li><a href="#">Fresh Berries</a></li>
                            <li><a href="#">Ocean Foods</a></li>
                            <li><a href="#">Butter & Eggs</a></li>
                            <li><a href="#">Fastfood</a></li>
                            <li><a href="#">Fresh Onion</a></li>
                            <li><a href="#">Papayaya & Crisps</a></li>
                            <li><a href="#">Oatmeal</a></li>
                            <li><a href="#">Fresh Bananas</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
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
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
   
    <form action="index.php?mod=user&act=login" method="post">
        <div class="boxcenter">
                <?php if(isset($_SESSION['canhbao'])): ?>
                    <div class="alert alert-danger" role="alert">
                        <?=$_SESSION['canhbao']?>
                    </div>
                <?php endif; unset($_SESSION['canhbao']); ?>
                <h1><a href="index.html">Đăng Nhập</a></h1>
                <!-- <div class="form-dn-1">
                    <i class="fa-brands fa-facebook" style="color: #0561ff;"></i><a href="">Đăng nhập bằng facebook</a>
                </div>
                <div class="form-dn-2">
                    <img class="google" src="view/img/logo/google.png" alt=""><a href="">Đăng nhập bằng google</a>
                </div> -->
                <form action="">
                    <div class="form-input">
                        <div class="form__login">
                            <input type="text" name="Email" id="" placeholder="Nhập email của bạn!"><i class="fa-regular fa-envelope" style="color: #7FAD39;"></i>
                        </div>
                        <div class="form__login">
                            <input type="password" name="MatKhau" id="" placeholder="Nhập mật khẩu"><i class="fa-solid fa-lock" style="color: #7FAD39;"></i>
                        </div>
                    <input type="submit" name="Submit_login" value="Đăng nhập" class="submit">
                    </div>
                </form>
                
                <div class="form-bot-1">
                    <a href="">Quên mật khẩu</a>
                </div>
                <div class="form-bot-2">
                    <a href="index.php?mod=user&act=register" class="chtk">Chưa có tài khoản?</a><a href="index.php?mod=user&act=register">Đăng kí tại khoản</a>
                </div>
                <?php if(isset($_SESSION['loi'])): ?>
                    <div class="alert alert-danger" role="alert">
                        <?=$_SESSION['loi']?>
                    </div>
                <?php endif; unset($_SESSION['loi']); ?>
        </div>
    </form>
    