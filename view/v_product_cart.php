
 
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
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shoping__cart__table">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="shoping__product">Sản phẩm</th>
                                        <th>Giá tiền</th>
                                        <th>Số lượng</th>
                                        <th>Thành tiền</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        if(isset($_SESSION['mygiohang']) && is_array($_SESSION['mygiohang'])): 
                                            $i = 0;// dung de dinh vi minh se xoa no tai vi tri nao trong array
                                            $ThanhTien = 0;
                                            foreach($_SESSION['mygiohang'] as $cart): 
                                                $ThanhTien = $cart['SoLuong']*$cart['GiaSP'];
                                                $linkdel = "index.php?mod=product&act=deleteid&del=".$i;
                                    ?>
                                        <tr>
                                            <input type="hidden" name="MaSP">
                                            <td class="shoping__cart__item">
                                                <img src="view/img/traicay/<?=$cart['HinhAnh']?>" alt="">
                                                <h5><?=$cart['TenSP']?></h5>
                                            </td>
                                            <td class="shoping__cart__price" id="GiaSP" >
                                            <?=number_format($cart['GiaSP'],"0",",",".")?>
                                            </td>
                                            <td class="shoping__cart__quantity">
                                                <div class="quantity">
                                                    <div class="pro-qty">
                                                        <span class="dec qtybtn" onclick="giam(this)">-</span>
                                                        <input type="text" value="<?=$cart['SoLuong']?>" id="SoLuong">
                                                        <span class="inc qtybtn" onclick="tangSL(this)">+</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="shoping__cart__total" id="ThanhTien">
                                                <?=number_format($ThanhTien,"0",",",".")?>
                                            </td>
                                            <td class="shoping__cart__item__close">
                                                <a href="<?=$linkdel?>">x</a>
                                            </td>
                                        </tr>
                                    <?php 
                                                $i++;
                                            endforeach;
                                        endif;
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shoping__cart__btns">
                            <a href="index.php?mod=page&act=home" class="primary-btn cart-btn">TIẾP TỤC MUA SẮM</a>
                            <a href="Index.php?mod=product&act=delateall" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                                XÓA RỖNG GIỎ HÀNG</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="shoping__continue">
                            <div class="shoping__discount">
                                <h5>Mã giảm giá</h5>
                                <form action="#">
                                    <input type="text" placeholder="Hãy nhập mã code">
                                    <button type="submit" class="site-btn">ÁP DỤNG</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="shoping__checkout">
                            <h5>Tổng tiền giỏ hàng</h5>
                            <input type="text" name="TongTien" id="TongTien">
                            <input type="text" name="SoLuong" id="SoLuonghidden">
                            <?php 
                                if(isset($_SESSION['mygiohang']) && is_array($_SESSION['mygiohang'])){
                                    $ThanhTien = 0;
                                    $TongTien =0;
                                    foreach($_SESSION['mygiohang'] as $cart){
                                        $ThanhTien = $cart['SoLuong']*$cart['GiaSP'];
                                        $TongTien += $ThanhTien;
                                        
                                    }
                                    echo '
                                    <ul>
                                        <li>Thành tiền <span>'.number_format($ThanhTien,"0",",",".").'</span></li>
                                        <li>Tổng tiền <span>'.number_format($TongTien,"0",",",".").'</span></li>
                                    </ul>
                                        ';
                                    
                                }
                            ?>
                            
                            <a href="index.php?mod=product&act=checkout" class="primary-btn">TIẾN HÀNH KIỂM TRA</a>
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->

    <script>
        
        function updatetotal() {
            var dssp = document.querySelectorAll('table tbody tr');
            var TongTien = 0;
            var SoLuong = 0;
            dssp.forEach(function (sanpham) {
                var GiaSP = parseFloat(sanpham.querySelector('#GiaSP').innerText); //innerTexttruy xuất nội dung văn bản bên trong phần tử đã chọn,  trong trường hợp này là nội dung văn bản bên trong phần tử có ID "GiaSP".
                SoLuong += parseInt(sanpham.querySelector('.pro-qty input').value);
                var ThanhTien = GiaSP * SoLuong;

                sanpham.querySelector('#ThanhTien').innerText = ThanhTien.toLocaleString('vi-VN', { style: 'currency', currency: 'VND' });
                TongTien += ThanhTien;
            });

        var thanhtienElement = document.querySelector('.shoping__checkout ul li:nth-child(1) span');
        thanhtienElement.innerText = TongTien.toLocaleString('vi-VN', { style: 'currency', currency: 'VND' });

        var tongTienElement = document.querySelector('.shoping__checkout ul li:nth-child(2) span');
        tongTienElement.innerText = TongTien.toLocaleString('vi-VN', { style: 'currency', currency: 'VND' });
        
        document.querySelector('#TongTien').value=TongTien;
        document.querySelector('#SoLuonghidden').value=SoLuong;

    }
        updatetotal(); // Đảm bảo rằng tổng tiền được cập nhật khi trang được tải
    </script>



