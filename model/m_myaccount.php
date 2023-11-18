<?php
    include_once 'model/m_pdo.php';

    // cập nhật
    function update_myaccountid($MaTK,$HoTen,$UserName,$Email,$MatKhau,$DiaChi,$GioiTinh,$SoDienThoai){
        pdo_execute("UPDATE taikhoan SET HoTen=?, UserName=?, Email=?, MatKhau=?, DiaChi=?, GioiTinh=?, SoDienThoai=? WHERE MaTK=?",$HoTen,$UserName,$Email,$MatKhau,$DiaChi,$GioiTinh,$SoDienThoai,$MaTK);
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
?>