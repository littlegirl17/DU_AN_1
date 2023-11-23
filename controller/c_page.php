<?php
    include_once 'config.php';
    include_once 'model/m_page.php';
    include_once 'model/m_order.php';

    if(isset($_GET['act']) && ($_GET['act']!="")){
        switch ($_GET['act']) {
            case 'keyword':
                # code...
                break;
            case 'home':
                if(isset($_POST['submit_home'])){
                    $keyword = $_POST['keyword'];
                }else{
                    $keyword = "";
                }
                $getdanhmuc = danhmuc_getAll(); 
                $getproNew = page_productNew($keyword);
                $getDiscount = page_productDiscount();
                $getLuotMua = get_luotmuaOrder();
                $getLuotXem = page_productLuotXem();
                $danhmuchomeUuTien = danhmuc_getUuTien();
                $getbaiviet = page_blog();
                $view_name = "page_home";
                break;
            case 'bloghome':
                $getbaiviet = page_blog();
                $view_name = "page_homeblog";
                break;
            case 'blog':
                $MaBV = $_GET['MaBV'];
                $getbaiviet = page_blog();
                $detailblogid = page_blogId($MaBV);
                $relateblog = page_blogRelate($detailblogid['MaDM']);
                $view_name = "page_blog";
                break;
            case 'contact':
                if(isset($_POST['submit_phanhoi'])){
                    phanhoi_add($_POST['HoTen'],$_POST['Email'],$_POST['NoiDung']);
                    $_SESSION['thongbao'] = "Đã gửi phản hồi thành công";
                }
                $view_name = "page_contact";
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