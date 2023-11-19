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

    function binhuan_add($MaSP,$MaTK,$NoiDung){
        pdo_execute("INSERT INTO binhluan (`MaSP`,`MaTK`,`NoiDung`) VALUES(?,?,?)",$MaSP,$MaTK,$NoiDung);
    }

    function get_byproductcomment($MaSP){
        return pdo_query("SELECT * FROM binhluan bl INNER JOIN taikhoan tk ON bl.MaTK = tk.MaTK WHERE bl.MaSP=?",$MaSP);
    }

?>