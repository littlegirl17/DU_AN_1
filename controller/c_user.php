<?php
    include_once 'config.php';
    include_once 'model/m_user.php';

    if(isset($_GET['act']) && ($_GET['act']!="")){
        switch ($_GET['act']) {
            case 'login':
                if(isset($_POST['Submit_login'])){
                    $kq = user_getLogin($_POST['Email'],$_POST['MatKhau']);
                    if($kq){
                        $_SESSION['user'] = $kq;
                        header("location: index.php?mod=page&act=home");
                    }else{
                        $_SESSION['loi'] = "Vui long dawng nhap";
                    }
                }
                $view_name = "user_login";
                break;
            case 'register':
                $view_name = "user_register";
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