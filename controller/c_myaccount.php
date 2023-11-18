<?php
    include_once 'config.php';
    include_once 'model/m_myaccount.php';
    include_once 'model/m_order.php';

    if(isset($_GET['act']) && ($_GET['act']!="")){
        switch ($_GET['act']) {
            case 'myaccount':
                $view_name = "myaccount_user";
                break;
            case 'update_myaccount':
                if(isset($_POST['submit'])){
                    update_myaccountid($_POST['MaTK'],$_POST['HoTen'],$_POST['UserName'],$_POST['Email'],$_POST['MatKhau'],$_POST['DiaChi'],$_POST['GioiTinh'],$_POST['SoDienThoai']);
                    $_SESSION['user']['HoTen'] = $_POST['HoTen'];
                    $_SESSION['user']['UserName'] = $_POST['UserName'];
                    $_SESSION['user']['Email'] = $_POST['Email'];
                    $_SESSION['user']['MatKhau'] = $_POST['MatKhau'];
                    $_SESSION['user']['DiaChi'] = $_POST['DiaChi'];
                    $_SESSION['user']['GioiTinh'] = $_POST['GioiTinh'];
                    $_SESSION['user']['SoDienThoai'] = $_POST['SoDienThoai'];
                }
                $view_name = "myaccount_update";
                break;
            case 'forget_pasword':
                $ThongBao = "";
                if(isset($_POST['submit'])){
                    $kq = forget_myaccount($_POST['SoDienThoai']);
                    
                    if(is_array($kq) ){
                        $ThongBao = "Mật khẩu của bạn là: <strong style='color:red;'>".$kq['MatKhau']."</strong>";
                    }else{
                        $ThongBao = "Số điện thoại bạn nhập chưa chính xác";
                    }
                }
                $view_name = "myaccount_forget";
                break;

            case 'doi_password':
                $ThongBao = "";$ThongBao2 = "";
                if(isset($_POST['submit'])){
                    $MaTK = $_POST['MaTK'];
                    $SoDienThoai = $_POST['SoDienThoai'];
                    $MatKhau = $_POST['MatKhau'];
                    $MatKhauNew = $_POST['MatKhauNew'];
                    $AgainMatKhau = $_POST['AgainMatKhau'];
                    $checkpass = checkpass_myaccount($SoDienThoai,$MatKhau);

                    if($checkpass){
                        if($MatKhauNew == $AgainMatKhau){
                            update_passw_myac($MaTK,$SoDienThoai,$MatKhauNew);
                            $_SESSION['thongbao'] = "Mật khẩu mới đã thay đổi thành công";
                        }else{
                            $_SESSION['loi'] = "Mật khẩu mới và xác nhận mật khẩu không khớp";
                        }
                    }else{
                        $_SESSION['loi'] = "Mật khẩu bạn nhập chưa đúng";
                    }
                }
                $view_name = "myaccount_doipass";
                break;
            
            case 'order_account':
                $viewsanphamorder = get_productOrder($_SESSION['iddh']);
                $view_name = "myaccount_order";
                break;

            case 'history_account':
                $viewhistoryorder = historyorder_myaccount($_SESSION['user']['MaTK']);
                $view_name = "myaccount_history";
                break;
            
            case 'detail_account':
                $MaDH = $_GET['MaDH'];
                $viewhistorymyacc = history_myaccount($MaDH);
                $view_name = "myaccount_historydetail";
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