<table class="table table-borderless ">
    <thead>
        <tr>
        <th scope="col">STT</th>
        <th scope="col">Tên</th>
        <th scope="col">SL</th>
        <th scope="col">Giá</th>
        <th scope="col">Thành Tiền</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if(isset($_SESSION['iddh']) && ($_SESSION['iddh'])>0):
            $stt = 1;
            $TongTien = 0;
            foreach($viewsanphamorder as $item):
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
        endif;
        ?>
    </tbody>
</table>