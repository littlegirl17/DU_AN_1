<?php
    include_once 'model/m_pdo.php';

    function danhmuc_getAll(){
        return pdo_query("SELECT * FROM danhmuc ORDER BY MaDM DESC");
    }

    function danhmuc_getbyiddetail($MaDM){
        return pdo_query_one("SELECT * FROM danhmuc WHERE MaDM = ?",$MaDM);
    }
    //SELECT sp.* FROM danhmuc dm INNER JOIN sanpham sp ON dm.MaDM = sp.MaDM WHERE MaDM = 14;

?>