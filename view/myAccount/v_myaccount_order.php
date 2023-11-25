<div class="title_myacount">
    <h4>Đơn hàng đang đặt</h4>
</div>

<table class="table table-borderless ">
    <thead>
        <tr>
        <th scope="col">STT</th>
        <th scope="col">Tên</th>
        <th scope="col">SL</th>
        <th scope="col">Giá</th>
        <th scope="col">Thành Tiền</th>
        <th scope="col">Action</th>
        <th>Trạng thái</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        if(isset($_SESSION['iddh']) && ($_SESSION['iddh'])>0):
            $stt = 1;
            $TongTien = 0;
            foreach($viewsanphammyacc as $item):
                $TongTien = $item['SoLuong']*$item['GiaSP'];
        ?>
        <tr>
            <th ><?=$stt?></th>
            <td><img src="view/img/traicay/<?=$item['HinhAnh']?>" alt="" style="width:100px;"><?=$item['TenSP']?></td>
            <td><?=number_format($item['GiaSP'],"0",",",".")?></td>
            <td><?=$item['SoLuong']?></td>
            <td><?=number_format($TongTien,"0",",",".")?></td>
            <?php if(isset($item['TrangThai']) && ($item['TrangThai']) == 0 OR ($item['TrangThai']) == 1): ?>
                <td><a href="index.php?mod=myaccount&act=calldahuy&MaDH=<?=$item['MaDH']?>">Xác nhận hủy</a></td>
            <?php else: ?>
                <td onclick=" LoiHuyOrder()">Đã xác nhận</td>
            <?php endif; ?>
            <td>
                <?php
                    switch ($item['TrangThai']) {
                        case '0':
                            echo '<p style="text-align: center; color:#fff; padding:5px 5px; background-color: #F08080;">Đơn hàng mới</p>';
                            break;
                        case '1':
                            echo '<p style="text-align: center; color:#fff; padding:5px 5px; background-color: #FFD700;">Đang xử lý</p>';
                            break;
                        case '2':
                            echo '<p  style="text-align: center; color:#fff; padding:5px 5px; background-color: #21d2e2;">Xác nhận đơn hàng</p>';
                            break;
                        case '3':
                            echo '<p  style="text-align: center; color:#fff; padding:5px 5px; background-color: #21d2e2;">Đang giao hàng</p>';
                            break;
                        case '4':
                            echo '<p style="text-align: center; color:#fff; padding:5px 5px; background-color: #00982d;">Đã giao</p>';
                            break;
                        case '5':
                            echo '<p style="text-align: center; color:#fff; padding:5px 5px; background-color: #e22121;">Đã hủy</p>';
                            break;
                        case '6':
                            echo '<p style="text-align: center; color:#fff; padding:5px 5px; background-color: #000000;">Giao hàng thất bại</p>';
                            break;
                        default:

                            break;
                    }
                ?>
            </td>
        </tr>
        <?php
                $stt++;
            endforeach;
        endif;
        ?>
    </tbody>
</table>

<script>
    function LoiHuyOrder(){
        alert("Đơn hàng đã xác nhận, không thể hủy! " );
    }
</script>
