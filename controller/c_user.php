<?php
    include_once 'config.php';

    if(isset($_GET['act']) && ($_GET['act']!="")){
        switch ($_GET['act']) {
            case 'login':
                if(isset($_POST['Submit_login'])){
                    $kq = user_getLogin($_POST['Email'],$_POST['MatKhau']);
                    if($kq){
                        if($kq['HoatDong'] == 0){
                            $_SESSION['user'] = $kq;
                            $_SESSION['email'] = $_POST['Email'];
                            if($_SESSION['user']['Quyen'] >=1 ){
                                header("location: index.php?mod=admin&act=dashboard");
                            }elseif ($_SESSION['user']['Quyen'] ==0){
                                header("location: index.php?mod=page&act=home");
                            }
                        }else{
                            header("location: index.php?mod=user&act=trangloi");
                            exit(); // Kết thúc script để ngăn chặn việc thực thi code tiếp theo
                        }

                        
                    }else{
                        $_SESSION['loi'] = "Email hoặc Password đã sai!";
                    }
                }
                $view_name = "user_login";
                break;
            case 'trangloi':
                $_SESSION['loi'] = "Tài khoản của bạn đã bị vô hiệu hóa";
                $view_name = "trangloi";
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
                        $HinhAnh = 'ava_user.jpeg';
                        $GioiTinh = isset($_POST['GioiTinh']) ? intval($_POST['GioiTinh']) : 0;

                        user_register($_POST['HoTen'],$_POST['UserName'],$_POST['Email'],$_POST['MatKhau'],$_POST['DiaChi'],$GioiTinh,$_POST['SoDienThoai'],$HinhAnh);
                        $_SESSION['thongbao'] = "Đăng ký tài khoản thành công!";
                        $_SESSION['email'] = $_POST['Email'];
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