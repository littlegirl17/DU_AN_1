<section>
    <div class="">
        <h4>Tài khoản của bạn</h4>
    </div>
    <div class="row myaccout mt-3">
        <div class="col-md-12">
            <div class="myaccount_image">
                <img src="view/img/avatar/<?=$_SESSION['user']['HinhAnh']?>" alt="">
            </div>
            <div class="information__myaccount">
                <h5>Họ tên: <?=$_SESSION['user']['HoTen']?></h5>
                <h5>Email: <?=$_SESSION['user']['Email']?></h5>
                <h5>Số điện thoại: <?=$_SESSION['user']['SoDienThoai']?></h5>
                <h5>Địa chỉ: <?=$_SESSION['user']['DiaChi']?></h5>
                <h5>Giới tính: 
                    <?php
                        switch ($_SESSION['user']['GioiTinh']) {
                            case '0':
                                echo 'Nam';
                                break;
                            case '1':
                                echo 'Nữ';
                                break;
                            
                            default:
                                # code...
                                break;
                        }
                    ?>
                </h5>
            </div>
        </div>
    </div>
</section>