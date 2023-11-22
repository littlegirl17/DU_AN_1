<?php
    include_once 'config.php';
    include_once 'model/m_myaccount.php';
    include_once 'model/m_order.php';

    if(isset($_GET['act']) && ($_GET['act']!="")){
        switch ($_GET['act']) {
            case 'myaccount':
                if(isset($_SESSION['user']) == false){
                    header("location: index.php?mod=user&act=login");
                    $_SESSION['canhbao'] = "Vui lòng đăng nhập!";
                    exit();//thoát liền trang web
                }
                
                $view_name = "myaccount_user";
                break;
            case 'update_myaccount':
                if(isset($_SESSION['user']) == false){
                    header("location: index.php?mod=user&act=login");
                    $_SESSION['canhbao'] = "Vui lòng đăng nhập!";
                    exit();//thoát liền trang web
                }
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
                if(isset($_SESSION['user']) == false){
                    header("location: index.php?mod=user&act=login");
                    $_SESSION['canhbao'] = "Vui lòng đăng nhập!";
                    exit();//thoát liền trang web
                }
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
                if(isset($_SESSION['user']) == false){
                    header("location: index.php?mod=user&act=login");
                    $_SESSION['canhbao'] = "Vui lòng đăng nhập!";
                    exit();//thoát liền trang web
                }
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
                if(isset($_SESSION['user']) == false){
                    header("location: index.php?mod=user&act=login");
                    $_SESSION['canhbao'] = "Vui lòng đăng nhập!";
                    exit();//thoát liền trang web
                }
                if(isset($_SESSION['iddh']) && ($_SESSION['iddh']>0)){
                    $viewsanphamorder = get_productOrder($_SESSION['iddh']);
                }else{
                    $viewsanphamorder = "";
                }
                
                $view_name = "myaccount_order";
                break;

            case 'history_account':
                if(isset($_SESSION['user']) == false){
                    header("location: index.php?mod=user&act=login");
                    $_SESSION['canhbao'] = "Vui lòng đăng nhập!";
                    exit();//thoát liền trang web
                }

                if(isset($_GET['page']) && ($_GET['page']>=1)){ //Nếu truyền rồi
                    $page = $_GET['page'];
                }else{
                    $page = 1;//nếu chưa truyền thì mặc định cho ns bằng 1
                }

                if(isset($_SESSION['user']['MaTK']) && ($_SESSION['user']['MaTK']>0)){
                    $viewhistoryorder = historyorder_myaccount($_SESSION['user']['MaTK'],$page);
                    $SoTrang = ceil(ordermyacc_adminPage()/6);
                }else{
                    $viewhistoryorder = historyorder_myaccount($_SESSION['user']['MaTK'],$page);
                    $SoTrang = ceil(ordermyacc_adminPage()/6);
                }
                $view_name = "myaccount_history";
                break;
            
            case 'detail_account':
                if(isset($_SESSION['user']) == false){
                    header("location: index.php?mod=user&act=login");
                    $_SESSION['canhbao'] = "Vui lòng đăng nhập!";
                    exit();//thoát liền trang web
                }

                

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