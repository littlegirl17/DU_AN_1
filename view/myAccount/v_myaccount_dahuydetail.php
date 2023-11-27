
<div class="back_myaccount" style="text-align: right;">
    <a href="index.php?mod=myaccount&act=orderdahuy">Quay lại</a>
</div>
<div class="title_myacount">
    <h4>Chi tiết đơn hàng đã hủy</h4>
</div>
<table class="table table-borderless ">
    <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên</th>
            <th scope="col">SL</th>
            <th scope="col">Giá</th>
            <th scope="col">Tổng tiền</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $stt = 1;
            $TongTien = 0;
            foreach($orderdahuydetail as $item):
                $TongTien = $item['SoLuong']*$item['GiaSP'];
        ?>
        <tr>
            <th ><?=$stt?></th>
            <td><img src="view/img/traicay/<?=$item['HinhAnh']?>" alt="" style="width:100px;"><?=$item['TenSP']?></td>
            <td><?=number_format($item['GiaSP'],"0",",",".")?></td>
            <td><?=$item['SoLuong']?></td>
            <td><?=number_format($TongTien,"0",",",".")?></td>
        </tr>
        <?php
                $stt++;
            endforeach;
        ?>
    </tbody>
</table>