<?php
    include_once 'config.php';
    include_once 'model/m_admin.php';

    if(isset($_GET['act']) && ($_GET['act']!="")){
        switch ($_GET['act']) {
            case 'dashboard':
                if(isset($_SESSION['user']) == false){
                    header("location: index.php?mod=user&act=login");
                    $_SESSION['canhbao'] = "Vui lòng đăng nhập!";
                    exit();//thoát liền trang web
                }
                if(!($_SESSION['user']['Quyen'] >=1)){
                    header("location: index.php?mod=page&act=home");
                }
                $countProduct = dashboard_countProduct();
                $countCatagory = dashboard_countCatagory();
                $countUser = dashboard_countUser();
                $countBlog = dashboard_countBlog();
                $countOrder = dashboard_countOrder();
                $countCmt = dashboard_countComment();
                $thongkeggchart = dashboard_googlechart();
                $view_name = "admin_dashboard";
                break;
            // admin danh mục
            case 'admin_catagory':
                if(isset($_SESSION['user']) == false){
                    header("location: index.php?mod=user&act=login");
                    $_SESSION['canhbao'] = "Vui lòng đăng nhập!";
                    exit();//thoát liền trang web
                }
                if(!($_SESSION['user']['Quyen'] >=1)){
                    header("location: index.php?mod=page&act=home");
                }
                $danhmucall = get_catagoryadmin();
                $view_name = "admin_catagory";
                break;
            case 'admin_add_catagory':
                if(isset($_SESSION['user']) == false){
                    header("location: index.php?mod=user&act=login");
                    $_SESSION['canhbao'] = "Vui lòng đăng nhập!";
                    exit();//thoát liền trang web
                }
                if(!($_SESSION['user']['Quyen'] >=1)){
                    header("location: index.php?mod=page&act=home");
                }
                if(isset($_POST['submit']) && ($_POST['submit'])){
                    //Nếu $_POST['SoThuTu']không được đặt | hoặc không phải là số nguyên hợp lệ | nó sẽ mặc định là 0
                    $SoThuTu = isset($_POST['SoThuTu']) ? intval($_POST['SoThuTu']) : ""; //intval()để chuyển đổi giá trị $_POST['SoThuTu']thành số nguyên. 
                    $UuTien = isset($_POST['UuTien']) ? intval($_POST['UuTien']) : "";
                    add_catagory($_POST['TenDM'],$SoThuTu,$UuTien,$_FILES['HinhAnh']['name']);

                    if(isset($_FILES['HinhAnh']) && $_FILES['HinhAnh']['error']==0){
                        $tmpFilePath = $_FILES['HinhAnh']['tmp_name'];//Dòng này lấy đường dẫn tạm thời của tệp tải lên
                        $uploadPath = "view/img/categories/".$_FILES['HinhAnh']['name'];//Dòng này xác định đường dẫn và tên tệp mục tiêu
                        move_uploaded_file($tmpFilePath,$uploadPath);//Dòng này sử dụng hàm move_uploaded_file để di chuyển tệp từ vị trí tạm thời (được lưu trong $tmpfile) vào vị trí mục tiêu (được lưu trong $upload).
                    }
                    header("location: index.php?mod=admin&act=admin_catagory");
                }
                $view_name = "admin_add_catagory";
                break;
            case 'admin_edit_catagory':
                if(isset($_SESSION['user']) == false){
                    header("location: index.php?mod=user&act=login");
                    $_SESSION['canhbao'] = "Vui lòng đăng nhập!";
                    exit();//thoát liền trang web
                }
                if(!($_SESSION['user']['Quyen'] >=1)){
                    header("location: index.php?mod=page&act=home");
                }
                $MaDM = $_GET['MaDM'];
                $getcataId = get_catagoryId($MaDM);

                if(isset($_POST['submit']) && ($_POST['submit']>0)){
                    $SoThuTu = isset($_POST['SoThuTu']) ? intval($_POST['SoThuTu']) : ""; //intval()để chuyển đổi giá trị $_POST['SoThuTu']thành số nguyên. 
                    $UuTien = isset($_POST['UuTien']) ? intval($_POST['UuTien']) : "";
                    update_catagory($MaDM,$_POST['TenDM'],$SoThuTu,$UuTien,$_FILES['HinhAnh']['name']);
                    if(isset($_FILES['HinhAnh']) && $_FILES['HinhAnh']['error']==0){
                        $tmpFilePath = $_FILES['HinhAnh']['tmp_name'];//Dòng này lấy đường dẫn tạm thời của tệp tải lên
                        $uploadPath = "view/img/categories/".$_FILES['HinhAnh']['name'];//Dòng này xác định đường dẫn và tên tệp mục tiêu
                        move_uploaded_file($tmpFilePath,$uploadPath);//Dòng này sử dụng hàm move_uploaded_file để di chuyển tệp từ vị trí tạm thời (được lưu trong $tmpfile) vào vị trí mục tiêu (được lưu trong $upload).
                    }
                    header("location: index.php?mod=admin&act=admin_catagory");
                }
                
                $view_name = "admin_edit_catagory";
                break;
            case 'admin_delete_catagory':
                if(isset($_SESSION['user']) == false){
                    header("location: index.php?mod=user&act=login");
                    $_SESSION['canhbao'] = "Vui lòng đăng nhập!";
                    exit();//thoát liền trang web
                }
                if(!($_SESSION['user']['Quyen'] >=1)){
                    header("location: index.php?mod=page&act=home");
                }
                $MaDM = $_GET['MaDM'];
                if(isset($_GET['MaDM']) && ($_GET['MaDM']>0)){
                    delete_catagory($MaDM);
                }
                header("location: index.php?mod=admin&act=admin_catagory");
                break;
            // admin sản phẩm
            case 'admin_product':
                if(isset($_SESSION['user']) == false){
                    header("location: index.php?mod=user&act=login");
                    $_SESSION['canhbao'] = "Vui lòng đăng nhập!";
                    exit();//thoát liền trang web
                }
                if(!($_SESSION['user']['Quyen'] >=1)){
                    header("location: index.php?mod=page&act=home");
                }
                $sanphamall = get_productadmin();
                $view_name = "admin_product";

                $view_name = "admin_product";
                break;
            case 'admin_add_product':
                if(isset($_SESSION['user']) == false){
                    header("location: index.php?mod=user&act=login");
                    $_SESSION['canhbao'] = "Vui lòng đăng nhập!";
                    exit();//thoát liền trang web
                }
                if(!($_SESSION['user']['Quyen'] >=1)){
                    header("location: index.php?mod=page&act=home");
                }
                $danhmucall = get_catagoryadmin();
                if (isset($_POST['submit'])) {
                    $TenSP = isset($_POST['TenSP']) ? $_POST['TenSP'] : "";
                    $GiaSP = isset($_POST['GiaSP']) ? intval($_POST['GiaSP']) : "";
                    $TieuDe = isset($_POST['TieuDe']) ? $_POST['TieuDe'] : "";
                    $MoTa = isset($_POST['MoTa']) ? $_POST['MoTa'] : "";
                    $Discount = isset($_POST['Discount']) ? intval($_POST['Discount']) : "";
                    $HinhAnh = isset($_FILES['HinhAnh']['name']) ? $_FILES['HinhAnh']['name'] : "";
                    $MaDM = isset($_POST['MaDM']) ? intval($_POST['MaDM']) : "";
                    $LuotXem = isset($_POST['LuotXem']) ? intval($_POST['LuotXem']) : "";
                    add_product($TenSP, $GiaSP, $TieuDe, $MoTa, $Discount, $HinhAnh,$MaDM,$LuotXem);
                
                    if (isset($_FILES['HinhAnh']) && $_FILES['HinhAnh']['error'] == 0) {
                        $tmpFilePath = $_FILES['HinhAnh']['tmp_name'];
                        $uploadPath = "view/img/products/" . $_FILES['HinhAnh']['name'];
                        move_uploaded_file($tmpFilePath, $uploadPath);
                    }
                
                    header("location: index.php?mod=admin&act=admin_product");
                }
                $view_name = "admin_add_product";
                break;
            case 'admin_edit_product':
                if(isset($_SESSION['user']) == false){
                    header("location: index.php?mod=user&act=login");
                    $_SESSION['canhbao'] = "Vui lòng đăng nhập!";
                    exit();//thoát liền trang web
                }
                if(!($_SESSION['user']['Quyen'] >=1)){
                    header("location: index.php?mod=page&act=home");
                }
                $danhmucall = get_catagoryadmin();

                $MaSP = $_GET['MaSP'];
                $getproductId = get_productById($MaSP);
                if (isset($_POST['submit']) && ($_POST['submit'] > 0)) {
                    $GiaSP = isset($_POST['GiaSP']) ? intval($_POST['GiaSP']) : "";
                    $TieuDe = isset($_POST['TieuDe']) ? $_POST['TieuDe'] : "";
                    $MoTa = isset($_POST['MoTa']) ? $_POST['MoTa'] : "";
                    $Discount = isset($_POST['Discount']) ? intval($_POST['Discount']) : "";
                    $MaDM = isset($_POST['MaDM']) ? intval($_POST['MaDM']) : "";
                    update_product($MaSP, $_POST['TenSP'],$GiaSP, $TieuDe, $MoTa, $Discount, $_FILES['HinhAnh']['name'], $MaDM);
                    if (isset($_FILES['HinhAnh']) && $_FILES['HinhAnh']['error'] == 0) {
                        $tmpFilePath = $_FILES['HinhAnh']['tmp_name'];
                        $uploadPath = "view/img/traicay/" . $_FILES['HinhAnh']['name'];
                        move_uploaded_file($tmpFilePath, $uploadPath);
                    }

                    header("location: index.php?mod=admin&act=admin_product");
                }
                $view_name = "admin_edit_product";
                break;

            case 'admin_delete_product':
                if(isset($_SESSION['user']) == false){
                    header("location: index.php?mod=user&act=login");
                    $_SESSION['canhbao'] = "Vui lòng đăng nhập!";
                    exit();//thoát liền trang web
                }
                if(!($_SESSION['user']['Quyen'] >=1)){
                    header("location: index.php?mod=page&act=home");
                } 
                $MaSP = $_GET['MaSP'];
                if(isset($_GET['MaSP']) && ($_GET['MaSP']>0)){
                    delete_product($MaSP);
                }
                header("location: index.php?mod=admin&act=admin_product");
                break;

        // user
            case 'admin_user':
                if(isset($_SESSION['user']) == false){
                    header("location: index.php?mod=user&act=login");
                    $_SESSION['canhbao'] = "Vui lòng đăng nhập!";
                    exit();//thoát liền trang web
                }
                if(!($_SESSION['user']['Quyen'] >=1)){
                    header("location: index.php?mod=page&act=home");
                }
                $userall = get_useradmin();
                $view_name = "admin_user";
                break;
            
            // add user
            case 'admin_add_user':
                if(isset($_SESSION['user']) == false){
                    header("location: index.php?mod=user&act=login");
                    $_SESSION['canhbao'] = "Vui lòng đăng nhập!";
                    exit();//thoát liền trang web
                }
                if(!($_SESSION['user']['Quyen'] >=1)){
                    header("location: index.php?mod=page&act=home");
                }
                $userall = get_useradmin();
                if (isset($_POST['submit']) && ($_POST['submit'])) {
                    $HoTen = isset($_POST['HoTen']) ? $_POST['HoTen'] : "";
                    $UserName = isset($_POST['UserName']) ? $_POST['UserName'] : "";
                    $Email = isset($_POST['Email']) ? $_POST['Email'] : "";
                    $MatKhau = isset($_POST['MatKhau']) ? md5($_POST['MatKhau']) : ""; 
                    $DiaChi = isset($_POST['DiaChi']) ? $_POST['DiaChi'] : "";
                    $GioiTinh = isset($_POST['GioiTinh']) ? intval($_POST['GioiTinh']) : 0;                    
                    $SoDienThoai = isset($_POST['SoDienThoai']) ? $_POST['SoDienThoai'] : "";
                    $Quyen = isset($_POST['Quyen']) ? $_POST['Quyen'] : "";
                    $HinhAnh = 'ava_user.jpeg';
                    add_user($HoTen, $UserName, $Email, $MatKhau, $DiaChi, $GioiTinh, $SoDienThoai, $Quyen,$HinhAnh);    
                    header("location: index.php?mod=admin&act=admin_user");
                }
                $view_name = "admin_add_user";
                break;

            // edit user 
            case 'admin_edit_user':
                if(isset($_SESSION['user']) == false){
                    header("location: index.php?mod=user&act=login");
                    $_SESSION['canhbao'] = "Vui lòng đăng nhập!";
                    exit();//thoát liền trang web
                }
                if(!($_SESSION['user']['Quyen'] >=1)){
                    header("location: index.php?mod=page&act=home");
                }
                $MaTK = $_GET['MaTK'];
                $getuserById = get_userById($MaTK);
                if (isset($_POST['submit']) && ($_POST['submit'] > 0)) {
                    $HoTen = isset($_POST['HoTen']) ? $_POST['HoTen'] : "";
                    $UserName = isset($_POST['UserName']) ? $_POST['UserName'] : "";
                    $Email = isset($_POST['Email']) ? $_POST['Email'] : "";
                    $MatKhau = isset($_POST['MatKhau']) ? md5($_POST['MatKhau']) : "";
                    $DiaChi = isset($_POST['DiaChi']) ? $_POST['DiaChi'] : "";
                    $GioiTinh = isset($_POST['GioiTinh']) ? $_POST['GioiTinh'] : "";
                    $SoDienThoai = isset($_POST['SoDienThoai']) ? $_POST['SoDienThoai'] : "";
                    $Quyen = isset($_POST['Quyen']) ? $_POST['Quyen'] : "";
                    update_user($MaTK, $HoTen, $UserName, $Email, $MatKhau, $DiaChi, $GioiTinh, $SoDienThoai, $Quyen,$_FILES['HinhAnh']['name']);
                    if (isset($_FILES['HinhAnh']) && $_FILES['HinhAnh']['error'] == 0) {
                        $tmpFilePath = $_FILES['HinhAnh']['tmp_name'];
                        $uploadPath = "view/img/avatar/" . $_FILES['HinhAnh']['name'];
                        move_uploaded_file($tmpFilePath, $uploadPath);
                    }
                    header("location: index.php?mod=admin&act=admin_user");
                }
            
                $view_name = "admin_edit_user";
                break;
                
            //xoa user
            case 'admin_delete_user':
                $MaTK = $_GET['MaTK'];
                
                if(isset($MaTK) && ($MaTK > 0)){
                    delete_user($MaTK);
                }
                
                header("location: index.php?mod=admin&act=admin_user");
                break;
        // Bình luận
                // quản lý cmt user dành cho admin -- Show truy váan sql show lên : 
                case 'admin_cmt':
                    if(isset($_SESSION['user']) == false){
                        header("location: index.php?mod=user&act=login");
                        $_SESSION['canhbao'] = "Vui lòng đăng nhập!";
                        exit();//thoát liền trang web
                    }
                    
                    $cmtall = get_cmtadmin();
                    $view_name = "admin_cmt";
                    break;
                // xóa cmt 
                case 'admin_delete_cmt':
                    $MaBL = $_GET['MaBL'];
                    
                    if(isset($MaBL) && ($MaBL > 0)){
                        delete_cmt($MaBL);
                    }
                    
                    header("location: index.php?mod=admin&act=admin_cmt");
                    break;
        // Đơn hàng 
                case 'admin_donhang':
                    if(isset($_SESSION['user']) == false){
                        header("location: index.php?mod=user&act=login");
                        $_SESSION['canhbao'] = "Vui lòng đăng nhập!";
                        exit();//thoát liền trang web
                    }
                    if(!($_SESSION['user']['Quyen'] >=1)){
                        header("location: index.php?mod=page&act=home");
                    }
                    $donghangall = get_donhangadmin();
                    $view_name = "admin_donhang";
                    break;

            // edit update
                case 'admin_edit_donhang':
                    if(isset($_SESSION['user']) == false){
                        header("location: index.php?mod=user&act=login");
                        $_SESSION['canhbao'] = "Vui lòng đăng nhập!";
                        exit();//thoát liền trang web
                    }
                    
                    $MaDH = $_GET['MaDH'];
                    $getOrderDetails = get_donhangById($MaDH);
                    if (isset($_POST['submit']) && ($_POST['submit'] > 0)) {
                        $HoTen = isset($_POST['HoTen']) ? $_POST['HoTen'] : "";
                        $Email = isset($_POST['Email']) ? $_POST['Email'] : "";
                        $SoDienThoai = isset($_POST['SoDienThoai']) ? $_POST['SoDienThoai'] : "";
                        $DiaChi = isset($_POST['DiaChi']) ? $_POST['DiaChi'] : "";
                        $Quyen = isset($_POST['Quyen']) ? $_POST['Quyen'] : "";
                        $GhiChu = isset($_POST['GhiChu']) ? $_POST['GhiChu'] : "";
                        $TongTien = isset($_POST['TongTien']) ? $_POST['TongTien'] : "";
                        $NgayDat = isset($_POST['NgayDat']) ? $_POST['NgayDat'] : "";
                        $MaTK = isset($_POST['MaTK']) ? $_POST['MaTK'] : "";
                        $PhuongThucTT = isset($_POST['PhuongThucTT']) ? $_POST['PhuongThucTT'] : "";
                        $TrangThai = isset($_POST['TrangThai']) ? $_POST['TrangThai'] : "";
                
                        update_donhang($MaDH, $HoTen, $Email, $SoDienThoai, $DiaChi, $Quyen, $GhiChu, $TongTien, $NgayDat, $MaTK, $PhuongThucTT, $TrangThai);
                        header("location: index.php?mod=admin&act=admin_donhang");
                    }
            
                $view_name = "admin_edit_donhang";
                break;
            /*case 'delete_order':
                $MaDH = $_GET['MaDH'];
                if(isset($_GET['MaDH']) && ($_GET['MaDH']>0)){
                    delete_donhang($MaDH);
                }
                header("location: index.php?mod=admin&act=admin_donhang");
                break;*/
            default:
                header("location:index.php?mod=page&act=home");
                break;
        }
        include_once 'view/admin/v_admin_layout.php';
    }else{
        header("location:index.php?mod=page&act=home");
    }
?>