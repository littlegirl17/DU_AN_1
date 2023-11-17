<?php
    include_once 'config.php';
    include_once 'model/m_page.php';
    include_once 'model/m_order.php';

    if(isset($_GET['act']) && ($_GET['act']!="")){
        switch ($_GET['act']) {
            case 'myaccount':
                $view_name = "myaccount_user";
                break;
            default:
                header("location:index.php?mod=page&act=home");
                break;
        }
        include_once 'view/myAccount/v_myaccount_layout.php';
    }else{
        header("location:index.php?mod=page&act=home");
    }
?>