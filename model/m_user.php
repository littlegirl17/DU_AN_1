<?php
    include_once 'model/m_pdo.php';

    //Login
    function user_getLogin($Email,$MatKhau){
        return pdo_query_one("SELECT * FROM taikhoan WHERE Email = ? AND MatKhau = ?",$Email,$MatKhau);
    }

    //Register
    function user_register($HoTen,$UserName,$Email,$MatKhau,$DiaChi,$GioiTinh,$SoDienThoai,$HinhAnh){
        pdo_execute("INSERT INTO taikhoan (`HoTen`,`UserName`,`Email`,`MatKhau`,`DiaChi`,`GioiTinh`,`SoDienThoai`,`HinhAnh`) VALUES(?,?,?,?,?,?,?,?)",$HoTen,$UserName,$Email,$MatKhau,$DiaChi,$GioiTinh,$SoDienThoai,$HinhAnh);
    }

    //check trùng email
    function user_checkRegister($Email){
        return pdo_query_one("SELECT * FROM taikhoan WHERE Email = ?", $Email);
    }

    //check trùng sdt
    function user_checksdtRegister($SoDienThoai){
        return pdo_query_one("SELECT * FROM taikhoan WHERE SoDienThoai = ?", $SoDienThoai);
    }
    
?>