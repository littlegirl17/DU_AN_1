<?php
    include_once "model/m_pdo.php";

    function TaoDonHang($MaTK,$TongTien,$HoTen,$DiaChi,$SoDienThoai,$Email,$GhiChu,$PhuongThucTT,$MaDHRandom){
        return pdo_last_insert_id("INSERT INTO donhang (`MaTK`,`TongTien`,`HoTen`,`DiaChi`,`SoDienThoai`,`Email`,`GhiChu`,`PhuongThucTT`,`MaDHRandom`) VALUES (?,?,?,?,?,?,?,?,?)",$MaTK,$TongTien,$HoTen,$DiaChi,$SoDienThoai,$Email,$GhiChu,$PhuongThucTT,$MaDHRandom);
    }

    function addOrder($iddh,$MaSP,$GiaSP,$SoLuong){
        pdo_execute("INSERT INTO chitietdonhang (`MaDH`,`MaSP`,`GiaSP`,`SoLuong`) VALUES (?,?,?,?)",$iddh,$MaSP,$GiaSP,$SoLuong);
    }

    function get_luotmuaOrder(){
        return pdo_query("SELECT * FROM chitietdonhang ctdh INNER JOIN sanpham sp ON ctdh.MaSP = sp.MaSP WHERE SoLuong >= 5 ORDER BY SoLuong DESC LIMIT 4");
    }
    
    function order_soluong($MaDH,$MaSP){
        pdo_execute("UPDATE chitietdonhang SET SoLuong = SoLuong + 1 WHERE MaDH = ? AND MaSP = ?", $MaDH ,$MaSP);
    }
    
?>