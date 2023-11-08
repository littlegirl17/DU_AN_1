<?php
    include_once 'model/m_pdo.php';

    function user_getLogin($Email,$MatKhau){
        return pdo_query_one("SELECT * FROM taikhoan WHERE Email = ? AND MatKhau = ?",$Email,$MatKhau);
    }
    
?>