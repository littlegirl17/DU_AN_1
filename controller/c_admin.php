<?php
    include_once 'config.php';
    include_once 'model/m_admin.php';

    if(isset($_GET['act']) && ($_GET['act']!="")){
        switch ($_GET['act']) {
            case 'dashboard':
                $countProduct = dashboard_countProduct();
                $countCatagory = dashboard_countCatagory();
                $countUser = dashboard_countUser();
                $countBlog = dashboard_countBlog();
                $countOrder = dashboard_countOrder();
                $countCmt = dashboard_countComment();
                $view_name = "admin_dashboard";
                break;
            // admin danh mục
            case 'admin_catagory':
                $view_name = "";
                break;
            case 'admin_add_catagory':
                $view_name = "";
                break;
            case 'admin_edit_catagory':
                $view_name = "";
                break;
            // admin sản phẩm
            case 'admin_product':
                $view_name = "admin_product";
                break;
            case 'admin_add_product':
                $view_name = "admin_add_product";
                break;
            case 'admin_edit_product':
                $view_name = "admin_edit_product";
                break;
            default:
                header("location:index.php?mod=page&act=home");
                break;
        }
        include_once 'view/admin/v_admin_layout.php';
    }else{
        header("location:index.php?mod=page&act=home");
    }
?>