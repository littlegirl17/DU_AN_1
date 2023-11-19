
<div class="main-content">
    <h3 class="title-page">
        Đơn hàng đã đặt
    </h3>
  
    <section class="row">
        <div class="col-sm-12 col-md-12 col xl-12">
            <div class="card chart">
                <table class="table">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Mã Đơn Hàng</th>
                            <th>Họ tên</th>
                            <th>Email</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Quyền</th>
                            <th>Ghi chú</th>
                            <th>Tổng tiền</th>
                            <th>Ngày đặt</th>
                            <th>Mã Tài Khoản</th>
                            <th>Phương thức thanh toán</th>
                            <th>Trạng thái</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $stt = 1; 
                            foreach($donghangall as $order):
                        ?>
                        <tr>
                            <td><?=$stt?></td>
                            <td><?=$order['MaDH']?></td>
                            <td><?=$order['HoTen']?></td>
                            <td><?=$order['Email']?></td>
                            <td><?=$order['SoDienThoai']?></td>
                            <td><?=$order['DiaChi']?></td>
                            <td><?=$order['Quyen']?></td>
                            <td><?=$order['GhiChu']?></td>
                            <td><?=$order['TongTien']?></td>
                            <td><?=$order['NgayDat']?></td>
                            <td><?=$order['MaTK']?></td>
                            <td><?=$order['PhuongThucTT']?></td>
                            <td><?=$order['TrangThai']?></td>
                            <td>
                                <a href="index.php?mod=admin&act=admin_edit_donhang&MaDH=<?=$order['MaDH']?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
                            </td>
                        </tr>
                        <?php 
                            $stt++; 
                            endforeach; 
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
