<?php
    include_once 'model/m_pdo.php';

    // cập nhật
    function update_myaccountid($MaTK,$HinhAnh,$HoTen,$UserName,$Email,$MatKhau,$DiaChi,$GioiTinh,$SoDienThoai){
        pdo_execute("UPDATE taikhoan SET HinhAnh=?,HoTen=?, UserName=?, Email=?, MatKhau=?, DiaChi=?, GioiTinh=?, SoDienThoai=? WHERE MaTK=?",$HinhAnh,$HoTen,$UserName,$Email,$MatKhau,$DiaChi,$GioiTinh,$SoDienThoai,$MaTK);
    }

    function forget_myaccount($SoDienThoai){
        return pdo_query_one("SELECT * FROM taikhoan WHERE SoDienThoai = ?",$SoDienThoai);
    }
    
    function checkpass_myaccount($SoDienThoai,$MatKhau){
        return pdo_query_one("SELECT * FROM taikhoan WHERE SoDienThoai=? AND MatKhau=? ",$SoDienThoai,$MatKhau);
    }

    function update_passw_myac($MaTK, $SoDienThoai, $MatKhauNew) {
        pdo_execute("UPDATE taikhoan SET SoDienThoai=?, MatKhau=? WHERE MaTK=?", $SoDienThoai, $MatKhauNew, $MaTK);
    }

    function historyorder_myaccount($MaTK,$page=1){
        $BatDau = ($page - 1) * 6;//tính toán vị trí bắt đầu : ví dụ bạn ở trang 2 ($page=2) //thì sản phẩm sẽ bắt đầu từ sản phẩm số 6
        return pdo_query("SELECT * FROM donhang WHERE MaTK = ? AND TrangThai = 4 LIMIT $BatDau,6 ",$MaTK);
    }
    function history_myaccount($MaDH){
        
        return pdo_query("SELECT ctdh.*, dh.*, sp.* FROM chitietdonhang ctdh INNER JOIN donhang dh ON ctdh.MaDH = dh.MaDH INNER JOIN sanpham sp ON ctdh.MaSP = sp.MaSP  WHERE ctdh.MaDH = ? ",$MaDH);
    }
    //phân trang
    function ordermyacc_adminPage(){
        return pdo_query_value("SELECT COUNT(*) FROM chitietdonhang");
    }
    


    //
    function get_productOrdermyacc($MaDH){
        return pdo_query("SELECT * FROM chitietdonhang ctdh INNER JOIN sanpham sp ON ctdh.MaSP = sp.MaSP INNER JOIN donhang dh ON ctdh.MaDH=dh.MaDH WHERE ctdh.MaDH = ? AND dh.TrangThai != 5 AND dh.TrangThai !=4",$MaDH);
    } // dh.TrangThai != 5 : làm cho đơn hàng đã hủy không show ra trong đơn hàng của tôi
    
    function donhang_huy($MaDH){
        pdo_execute("UPDATE donhang SET TrangThai = 5 WHERE MaDH = ?",$MaDH);
    }

    function donhang_khoaerorr($MaDH){
        pdo_execute("UPDATE donhang SET TrangThai = 2 WHERE MaDH = ?",$MaDH);
    }

    function get_canceledOrders($MaTk){
        return pdo_query("SELECT * FROM chitietdonhang ctdh INNER JOIN sanpham sp ON ctdh.MaSP = sp.MaSP INNER JOIN donhang dh ON ctdh.MaDH=dh.MaDH WHERE dh.TrangThai = 5 AND dh.MaTK = ?",$MaTk);
    }

    function orderdahuydetail($MaDH){
        return pdo_query("SELECT * FROM chitietdonhang ctdh INNER JOIN sanpham sp ON ctdh.MaSP = sp.MaSP INNER JOIN donhang dh ON ctdh.MaDH=dh.MaDH WHERE dh.TrangThai = 5 AND ctdh.MaDH = ?",$MaDH);
    }
?>