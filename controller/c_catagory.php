<?php
    include_once 'config.php';
    include_once 'model/m_catagory.php';


    if(isset($_GET['act']) && ($_GET['act']!="")){
        switch ($_GET['act']) {
            case 'catagory_detail':
                
                if(isset($_GET['MaDM']) && ($_GET['MaDM']>0)){
                    $MaDM = $_GET['MaDM'];
                }else{
                    $MaDM = "";
                    $getdanhmucproduct = danhmucproduct_getAll(); 
                }
                $getdanhmuc = danhmuc_getAll(); 
                $getdanhmucproduct = danhmucproduct_getAll(); 
                $danhmuc_getbyid = danhmuc_getbyiddetail($MaDM);
                $view_name = "product_catagory";
                break;
            
            default:
                header("location:index.php?mod=page&act=home");
                break;
        }
        include_once 'view/v_user_layout.php';
    }else{
        header("location:index.php?mod=page&act=home");
    }
?>