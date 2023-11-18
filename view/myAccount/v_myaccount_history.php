
<div class="title_myacount">
    <h4>Lịch sử đặt hàng</h4>
</div>
<table class="table table-borderless ">
    <thead>
        <tr>
        <th scope="col">STT</th>
        <th scope="col">Mã đơn hàng</th>
        <th scope="col">Người đặt</th>
        <th scope="col">Ngày đặt</th>
        <th scope="col">Thông tin</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if(isset($_SESSION['iddh']) && ($_SESSION['iddh'])>0):
            $stt = 1;
            foreach($viewhistoryorder as $item):
        ?>
        <tr>
            <th ><?=$stt?></th>
            <td><?=$item['MaDHRandom']?></td>
            <td><?=$item['HoTen']?></td>
            <td><?=$item['NgayDat']?></td>
            <td><a href="index.php?mod=myaccount&act=detail_account&MaDH=<?=$item['MaDH']?>" >Xem chi tiết</a></td>
        </tr>
        <?php
                $stt++;
            endforeach;
        endif;
        ?>
    </tbody>
</table>