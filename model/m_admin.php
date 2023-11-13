<?php
    include_once 'model/m_pdo.php';

    //DASHBOARD
    function dashboard_countProduct(){
        return pdo_query_value("SELECT COUNT(*) FROM sanpham ");
    } //trả về một giá trị duy nhất

    function dashboard_countCatagory(){
        return pdo_query_value("SELECT COUNT(*) FROM danhmuc ");
    } //trả về một giá trị duy nhất

    function dashboard_countUser(){
        return pdo_query_value("SELECT COUNT(*) FROM taikhoan ");
    } //trả về một giá trị duy nhất

    function dashboard_countBlog(){
        return pdo_query_value("SELECT COUNT(*) FROM baiviet ");
    } //trả về một giá trị duy nhất

    function dashboard_countOrder(){
        return pdo_query_value("SELECT COUNT(*) FROM donhang ");
    } //trả về một giá trị duy nhất

    function dashboard_countComment(){
        return pdo_query_value("SELECT COUNT(*) FROM binhluan ");
    } //trả về một giá trị duy nhất


    //Thống kê
    function dashboard_googlechart(){
        return pdo_query("SELECT * FROM ")
    }

?>