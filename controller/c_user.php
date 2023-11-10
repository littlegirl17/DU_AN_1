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
                        if($_SESSION['user']['Quyen'] >=1 ){
                            header("location: index.php?mod=admin&act=dashboard");
                        }else{
                            header("location: index.php?mod=page&act=home");
                        }
                        
                    }else{
                        $_SESSION['loi'] = "Email hoặc Password đã sai!";
                    }
                }
                $view_name = "user_login";
                break;
            case 'logout':
                if(isset($_SESSION['user'])){
                    unset($_SESSION['user']);
                }
                header("location: index.php?mod=page&act=home");
                break;

            case 'register':
                if(isset($_POST['submit_register'])){
                    $checkEmail = user_checkRegister($_POST['Email']);
                    $checkSDT = user_checksdtRegister($_POST['SoDienThoai']);
                    if($checkEmail == TRUE || $checkSDT  == TRUE){
                        if($checkEmail){
                            $_SESSION['canhbaoEmail'] = "Email đã tồn tại, vui lòng nhập email khác";
                        }
                        if($checkSDT){
                            $_SESSION['canhbaoSDT'] = "Số điện thoại đã tồn tại, vui lòng nhập Số điện thoại khác";
                        }
                        
                    }else{
                        user_register($_POST['HoTen'],$_POST['UserName'],$_POST['Email'],md5($_POST['MatKhau']),$_POST['DiaChi'],$_POST['GioiTinh'],$_POST['SoDienThoai']);
                        $_SESSION['thongbao'] = "Đăng ký tài khoản thành công!";
                    }
                }
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