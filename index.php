<?php
    include_once 'config.php';
    
    $getdanhmuc = danhmuc_getAll();
    $countlove = product_Countyeuthich();
    if(isset($_GET['mod']) && ($_GET['mod']!="")){
        switch ($_GET['mod']) {
            case 'catagory':
                $controller_name = 'catagory';
                break;
            case 'page':
                $controller_name = 'page';
                break;
            case 'product':
                $controller_name = 'product';
                break;
            case 'user':
                $controller_name = 'user';
                break;
            case 'myaccount':
                $controller_name = 'myaccount';
                break;
            case 'admin':
                $controller_name = 'admin';
                break;
            default:
                header("location:index.php?mod=page&act=home");
                break;
        }
        include_once 'controller/c_'.$controller_name.'.php';
    }else{
        header("location:index.php?mod=page&act=home");
    }
   // sỬA TẠI máy của Kha
?>
