    
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
                    foreach($getLuotMua as $item):
                        if($item['GiaSP'] >=1){
                            $price = '<h5>'.number_format($item['GiaSP'],"0",",",".").' VNĐ</h5>';
                        }else{
                            $price = "<h5>Đang cập nhật</h5>";
                        }
            
                        if($item['Discount'] >= 1){
                            $GiamGia = '<div class="product__discount__percent_home">'.$item['Discount'].'%</div>';
                        }else{
                            $GiamGia = "";
                        }
            
                        if($item['SoLuong']){
                            $MuaHang = '<h6>Số lượt mua<strong>('.$item['SoLuong'].')</strong></h6>';
                        }else{
                            $MuaHang = '';
                        }
                ?>
                <div class="col-lg-3 col-md-4  fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="view/img/traicay/<?=$item['HinhAnh']?>">
                            <?=$GiamGia?>
                            
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="index.php?mod=product&act=detail&MaSP=<?=$item['MaSP']?>"><?=$item['TenSP']?></a></h6>
                            <?=$price?>
                            <div class="featured__item__text_MX"><?=$MuaHang?></div>
                        </div>
                        <form action="index.php?mod=product&act=addtocart" method="post">
                            <input type="hidden" name="MaSP" value="<?=$item['MaSP']?>">
                            <input type="hidden" name="HinhAnh" value="<?=$item['HinhAnh']?>">
                            <input type="hidden" name="GiaSP" value="<?=$item['GiaSP']?>">
                            <input type="hidden" name="TenSP" value="<?=$item['TenSP']?>">
                            <input type="hidden" name="SoLuong" value="1">
                            <div class="intro">
                                <input type="submit" value="Thêm vào giỏ " name="submitaddtocart">
                            </div>
                        </form> 
                    </div>
                </div>
                <?php 
                    endforeach; 
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

    

    <!--Sản phẩm danh mục Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row featured__filter">
                <?php 
                    $TenDanhMuc = null;
                    foreach($danhmuchomeUuTien as $item):
                        if ($TenDanhMuc !== $item['TenDM']) {
                            if ($TenDanhMuc !== null) {
                                echo '</div>'; 
                            }
                            //Cập nhật lại danh mục để chứa tên của danh mục hiện tại.
                            $TenDanhMuc = $item['TenDM'];

                            echo '
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="section-title">
                                        <h2>'.$TenDanhMuc.'</h2>
                                    </div>
                                </div>
                            </div>'
                            ;
                            // Mở 1 hộp box để chứa danh sách sản phẩm của danh mục hiện tại
                            echo '<div class="row featured__filter">';
                        }
                        if($item['GiaSP'] >=1){
                            $price = '<h5>'.number_format($item['GiaSP'],"0",",",".").' VNĐ</h5>';
                        }else{
                            $price = "<h5>Đang cập nhật</h5>";
                        }
            
                        if($item['Discount'] >= 1){
                            $GiamGia = '<div class="product__discount__percent_home">'.$item['Discount'].'%</div>';
                        }else{
                            $GiamGia = "";
                        }
                ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="view/img/traicay/<?=$item['HinhAnh']?>">
                            <?=$GiamGia?>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="index.php?mod=product&act=detail&MaSP=<?=$item['MaSP']?>"><?=$item['TenSP']?></a></h6>
                            <?=$price?>
                        </div>
                        <form action="index.php?mod=product&act=addtocart" method="post">
                            <input type="hidden" name="MaSP" value="<?=$item['MaSP']?>">
                            <input type="hidden" name="HinhAnh" value="<?=$item['HinhAnh']?>">
                            <input type="hidden" name="GiaSP" value="<?=$item['GiaSP']?>">
                            <input type="hidden" name="TenSP" value="<?=$item['TenSP']?>">
                            <input type="hidden" name="SoLuong" value="1">
                            <div class="intro">
                                <input type="submit" value="Thêm vào giỏ " name="submitaddtocart">
                            </div>
                        </form> 
                    </div>
                </div>
                <?php 
                    endforeach; 
                ?>
            </div>
        </div>
    </section>
    <!-- Sản phẩm danh mục Section End -->
    
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
                <?php $html_blog = show_home_blog($getbaiviet) ?>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->