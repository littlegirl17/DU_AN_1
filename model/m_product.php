<?php
    include_once 'model/m_pdo.php';

    function product_detailbyid($MaSP){
        return pdo_query_one("SELECT * FROM sanpham WHERE MaSP = ?",$MaSP);
    }

    function product_lienquanRanDom($MaDM){
        return pdo_query("SELECT * FROM sanpham WHERE MaDM = ? ORDER BY rand() LIMIT 4",$MaDM);
    }

    function product_updateLuotXem($MaSP){
        pdo_execute("UPDATE sanpham SET LuotXem = LuotXem + 1 WHERE MaSP = ?",$MaSP);
    }

    // function update_cart($SoLuong,$TongTien){
    //     pdo_execute("UPDATE SET WHERE MaSP =?")
    // }

?>