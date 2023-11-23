<?php
    include_once 'model/m_pdo.php';

    function danhmuc_getAll(){
        return pdo_query("SELECT * FROM danhmuc ORDER BY MaDM DESC");
    }

    function danhmuc_getbyiddetail($MaDM,$page=1){
        $BatDau = ($page - 1) * 9;//tính toán vị trí bắt đầu : ví dụ bạn ở trang 2 ($page=2) //thì sản phẩm sẽ bắt đầu từ sản phẩm số 6
        return pdo_query("SELECT * FROM sanpham WHERE MaDM = ? LIMIT $BatDau,9",$MaDM);
    }
    function danhmucproduct_getAll($page=1){
        $BatDau = ($page - 1) * 9;
        return pdo_query("SELECT * FROM sanpham ORDER BY MaSP DESC LIMIT $BatDau,9");
    }

     //dem so luong san pham theo danh muc
    function get_count_sp($MaDM){ //cái $madm nó không liên quan tới id ở ngoài kia 
        $returnsp = pdo_query("SELECT * FROM sanpham WHERE MaDM = ? ",$MaDM);
        return count($returnsp);
    }
    function catagory_phantrang($MaDM){
        return pdo_query_value("SELECT COUNT(*) FROM sanpham WHERE MaDM = ?", $MaDM);
    }

    function catagoryall_phantrang(){
        return pdo_query_value("SELECT COUNT(*) FROM sanpham ");
    }

?>