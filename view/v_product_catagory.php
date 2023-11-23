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
                            <?php foreach($getdanhmuc as $dm): ?>
                                <li> <a href="index.php?mod=catagory&act=catagory_detail&MaDM=<?=$dm['MaDM']?>"><?=$dm['TenDM']?>(<?=get_count_sp($dm['MaDM'])?>)</a></li>
                            <?php endforeach; ?>
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
                        <h2>Organi Shop</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Danh mục Organic</h4>
                            <ul>
                            <?php foreach($getdanhmuc as $dm): ?>
                                <li> <a href="index.php?mod=catagory&act=catagory_detail&MaDM=<?=$dm['MaDM']?>"><?=$dm['TenDM']?> (<?=get_count_sp($dm['MaDM'])?>)</a></li>
                            <?php endforeach; ?>
                            </ul>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    <div class="row">
                        <?php if(isset($_GET['MaDM']) && ($_GET['MaDM']>0)): ?>
                            <?php foreach($danhmuc_getbyid as $item): 
                                if($item['GiaSP'] >=1){
                                    $price = '<h5>'.number_format($item['GiaSP'],"0",",",".").' đ</h5>';
                                }else{
                                    $price = "<h5>Đang cập nhật</h5>";
                                }

                            ?>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="featured__item">
                                        <div class="featured__item__pic set-bg" data-setbg="view/img/traicay/<?=$item['HinhAnh']?>">
                                            
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
                            <?php endforeach; ?>
                        <?php else: ?>
                            <?php foreach($getdanhmucproduct as $item): 
                                if($item['GiaSP'] >=1){
                                    $price = '<h5>'.number_format($item['GiaSP'],"0",",",".").' đ</h5>';
                                }else{
                                    $price = "<h5>Đang cập nhật</h5>";
                                }

                                
                            ?>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="featured__item">
                                        <div class="featured__item__pic set-bg" data-setbg="view/img/traicay/<?=$item['HinhAnh']?>">
                                            
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
                            <?php endforeach; ?>
                        <?php endif;?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
        if(isset($_GET['MaDM']) && ($_GET['MaDM']>0)):
    ?>
    <div class="admin__pagein">
        <ul class="pagination">
            <li class="page-item <?= ($page <= 1) ? "disabled" : ""?>">
            <a class="page-link" href="index.php?mod=catagory&act=catagory_detail&MaDM=<?=$MaDM?>&page=<?=$page-1?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <?php for($i=1; $i < $SoTrang ; $i++): ?>
                <li class="page-item <?= ($page==$i) ? 'active' : '' ?>">
                <a class="page-link" href="index.php?mod=catagory&act=catagory_detail&MaDM=<?=$MaDM?>&page=<?=$i?>"><?=$i?></a>
                </li>
            <?php endfor; ?>
                <li class="page-item <?= ($page >= $SoTrang) ? "disabled" : ""?>">
                <a class="page-link" href="index.php?mod=catagory&act=catagory_detail&MaDM=<?=$MaDM?>&page=<?=$page+1?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </div>
    <?php
       
    ?>


    <?php
        endif;
    ?>

    










   