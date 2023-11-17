<?php
    include_once 'config.php';
    include_once 'model/m_catagory.php';


    if(isset($_GET['act']) && ($_GET['act']!="")){
        switch ($_GET['act']) {
            case 'catagory_detail':
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    $id = $_GET['id'];
                }else{
                    $id = "";
                }
                
                $getdanhmuc = danhmuc_getAll(); 
                $danhmuc_getbyid = danhmuc_getbyiddetail($id);
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