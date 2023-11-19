
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

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="view/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Vegetable’s Package</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <a href="./index.html">Vegetables</a>
                            <span>Vegetable’s Package</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="view/img/traicay/<?=$detail_product['HinhAnh']?>" alt="">
                        </div>
                        <div class="product__details__pic__slider owl-carousel">
                            <img data-imgbigurl="view/img/traicay/<?=$detail_product['HinhAnh']?>"
                                src="view/img/traicay/<?=$detail_product['HinhAnh']?>" alt="">
                            <img data-imgbigurl="view/img/traicay/<?=$detail_product['HinhAnh']?>"
                                src="view/img/traicay/<?=$detail_product['HinhAnh']?>" alt="">
                            <img data-imgbigurl="view/img/traicay/<?=$detail_product['HinhAnh']?>"
                                src="view/img/traicay/<?=$detail_product['HinhAnh']?>" alt="">
                            <img data-imgbigurl="view/img/traicay/<?=$detail_product['HinhAnh']?>"
                                src="view/img/traicay/<?=$detail_product['HinhAnh']?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3><?=$detail_product['TenSP']?></h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(18 reviews)</span>
                        </div>
                        <div class="product__details__price"><?=number_format($detail_product['GiaSP'],"0",",",".")?></div>
                        <p><?=$detail_product['TieuDe']?></p>
                        <div class="product_detail_three">

                            <form action="index.php?mod=product&act=addtocart" method="post">
                            <div class="product__details__quantity">
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <span class="dec qtybtn" onclick="decrementQuantity()">-</span>
                                        <input type="text" name="SoLuong" id="quantityInput" value="1" readonly>
                                        <span class="inc qtybtn" onclick="incrementQuantity()">+</span>
                                    </div>
                                </div>
                            </div>
                                <input type="hidden" name="MaSP" value="<?=$detail_product['MaSP']?>">
                                <input type="hidden" name="HinhAnh" value="<?=$detail_product['HinhAnh']?>">
                                <input type="hidden" name="GiaSP" value="<?=$detail_product['GiaSP']?>">
                                <input type="hidden" name="TenSP" value="<?=$detail_product['TenSP']?>">
                                <input type="submit" value="Thêm vào giỏ hàng" name="submitaddtocart" class="primary-btn">
                            </form>

                            <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                        </div>
                        <ul>
                            <li><b>Số lượt xem</b> <span><?=$detail_product['LuotXem']?></span></li>
                            <li><b>Shipping</b> <span>01 day shipping. <samp>Free pickup today</samp></span></li>
                            <li><b>Weight</b> <span>0.5 kg</span></li>
                            <li><b>Share on</b>
                                <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                    aria-selected="true">Mô tả</a>
                            </li>
                            
                            
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Products Infomation</h6>
                                    <p><?= $detail_product['MoTa']?></p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->
 <section class="related-product"> 
        <div class="container">
        <div class="section-title related__product__title">
            <h2>Cảm nghĩ bạn về sản phẩm:</h2>
        </div>
            <?php foreach($loadcomment as $dsbl): ?>
            <div class="row"><!--  mỗi bình luận sẽ là một row -->
                <div class="col-md-6">
                    <table >
                        <tr>
                            <th >Người bình luận</th>
                            <th style="padding-left: 100px;">Thời gian</th>
                        </tr>
                        <tbody >
                            <tr>
                                <td><?=$dsbl['HoTen']?></td>
                                <td style="padding-left: 100px;"><?=$dsbl['NgayBL']?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">
                    <table class="tablebinhluan">
                        <tr>
                            <th>Nội dung bình luận</th>
                        </tr>
                        <tbody class="binhluandetail">
                            <tr>
                                <td>
                                    <p><?= $dsbl['NoiDung']?></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
            </div>
            <?php endforeach; ?>
            <!-- Nếu nó tồn tại session['user'] thì mình mới cho nó quyền ĐƯỢC BÌNH LUẬN -->
            <?php if(isset($_SESSION['user'])):?>
                <form action="index.php?mod=product&act=binhluan" method="POST"> <!-- vi minh lam doc loc -->
                    <input type="hidden" name="MaSP" value="<?=$detail_product['MaSP']?>">
                    <div class="form-detail">
                        <label for="">Nhận xét của bạn</label><br>
                        <input type="text" name="NoiDung" class="Noidungcmt">
                    </div>
                    <div class="form-detail">
                        <button type="submit" class="btn btn-success" name="submitbinhluan">Gửi bình luận</button>
                    </div>
                </form>
            <?php endif;?>
            <!-- END -->
 </div>
    </section>
    <!-- Related Product Section Begin -->
    <section class="related-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related__product__title">
                        <h2>Sản phẩm liên quan</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach($lienquan_product as $SPLQ): ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="view/img/traicay/<?=$SPLQ['HinhAnh']?>">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#"><?=$SPLQ['TenSP']?></a></h6>
                                <h5><?=$SPLQ['GiaSP']?></h5>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <script>
        function incrementQuantity() {
            var quantityInput = document.getElementById('quantityInput');
            quantityInput.value = parseInt(quantityInput.value) + 1;
        }

        function decrementQuantity() {
            var quantityInput = document.getElementById('quantityInput');
            //Nếu giá trị hiện tại của trường nhập liệu lớn hơn 1
            if (parseInt(quantityInput.value) > 1) {
                //thì giá trị đó sẽ được giảm đi 1 -> làm cho sản phẩm không bao giờ nhỏ hơn 1 đucợ
                quantityInput.value = parseInt(quantityInput.value) - 1;
            }
        }
    </script>