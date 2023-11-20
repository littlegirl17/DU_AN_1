<?php
    include_once 'model/m_pdo.php';

    function danhmuc_getAll(){
        return pdo_query("SELECT * FROM danhmuc ORDER BY MaDM DESC");
    }

    function danhmuc_getbyiddetail($MaDM){
        return pdo_query("SELECT * FROM sanpham WHERE MaDM = ?",$MaDM);
    }
    function danhmucproduct_getAll(){
        return pdo_query("SELECT * FROM sanpham ORDER BY MaSP DESC");
    }
    //SELECT sp.* FROM danhmuc dm INNER JOIN sanpham sp ON dm.MaDM = sp.MaDM WHERE MaDM = 14;

?>