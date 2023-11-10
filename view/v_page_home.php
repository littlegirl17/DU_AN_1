    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <?php foreach($getdanhmuc as $dm): ?>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="view/img/categories/<?=$dm['HinhAnh']?>">
                            <h5><a href="#"><?=$dm['TenDM']?></a></h5>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!--Sản phẩm mới Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Sản phẩm mới</h2>
                    </div>
                    
                </div>
            </div>
            <div class="row featured__filter">
                <?php 
                    $html_product_new = showsp_home($getproNew);
                ?>
            </div>
            
        </div>
    </section>
    <!-- Sản phẩm mới Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="view/img/banner/banner-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="view/img/banner/banner-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!--Sản phẩm khuyến mãi Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Sản phẩm khuyến mãi</h2>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <?php 
                    $html_product_giamgia = showsp_home($getDiscount);
                ?>
            </div>
        </div>
    </section>
    <!-- Sản phẩm khuyến mãi Section End -->

    <!--Sản phẩm mua nhiều Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Sản phẩm mua nhiều</h2>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <?php 
                    $html_product_buy = showsp_home_luotmua($getLuotMua);
                ?>
            </div>
        </div>
    </section>
    <!-- Sản phẩm mua nhiều Section End -->

    <!--Sản phẩm nhiều lượt xem Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Sản phẩm nhiều lượt xem</h2>
                    </div>
                    
                </div>
            </div>
            <div class="row featured__filter">
                <?php 
                    $html_product_view = showsp_home_luotxem($getLuotXem);
                ?>
            </div>
        </div>
    </section>
    <!-- Sản phẩm nhiều lượt xem Section End -->

    <!-- Blog Section Begin -->
    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>Bài viết về sản phẩm</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach($getbaiviet as $item): ?>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img src="view/img/baiviet/<?=$item['HinhAnh']?>" alt="">
                            </div>
                            <div class="blog__item__text">
                                <ul>
                                    <li><i class="fa fa-calendar-o"></i> <?=$item['NgayViet']?></li>
                                    <li><i class="fa fa-comment-o"></i> 5</li>
                                </ul>
                                <h5><a href="index.php?mod=page&act=blog&MaBV=<?=$item['MaBV']?>"><?=$item['TieuDe']?></a></h5>
                                <p><?=$item['MoTaNgan']?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
