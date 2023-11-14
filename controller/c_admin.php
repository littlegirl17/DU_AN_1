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
                $thongkeggchart = dashboard_googlechart();
                $view_name = "admin_dashboard";
                break;
            // admin danh mục
            case 'admin_catagory':
                $danhmucall = get_catagoryadmin();
                $view_name = "admin_catagory";
                break;
            case 'admin_add_catagory':
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
                $view_name = "admin_edit_catagory";
                break;
            case 'admin_delete_catagory':

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