<?php
    include_once 'model/m_pdo.php';

    function danhmuc_getAll(){
        return pdo_query("SELECT * FROM danhmuc ORDER BY MaDM DESC");
    }

    function danhmuc_getbyiddetail($MaDM){
        return pdo_query("SELECT * FROM sanpham WHERE MaDM = ? LIMIT 9",$MaDM);
    }
    function danhmucproduct_getAll(){
        return pdo_query("SELECT * FROM sanpham ORDER BY MaSP DESC LIMIT 9");
    }

     //dem so luong san pham theo danh muc
    function get_count_sp($MaDM){ //cái $madm nó không liên quan tới id ở ngoài kia 
        $returnsp = pdo_query("SELECT * FROM sanpham WHERE MaDM = ? ",$MaDM);
        return count($returnsp);
    }
    //SELECT sp.* FROM danhmuc dm INNER JOIN sanpham sp ON dm.MaDM = sp.MaDM WHERE MaDM = 14;

?>