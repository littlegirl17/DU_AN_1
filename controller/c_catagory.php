<?php
    include_once 'config.php';
    include_once 'model/m_catagory.php';


    if(isset($_GET['act']) && ($_GET['act']!="")){
        switch ($_GET['act']) {
            case 'catagory_detail':
                
                if(isset($_GET['MaDM']) && ($_GET['MaDM']>0)){
                    $MaDM = $_GET['MaDM'];
                    if(isset($_GET['page']) && ($_GET['page']>=1)){ //Nếu truyền rồi
                        $page = $_GET['page'];
                    }else{
                        $page = 1;//nếu chưa truyền thì mặc định cho ns bằng 1
                    }
                    $getdanhmuc = danhmuc_getAll(); 
                    $SoTrang = ceil(catagory_phantrang($MaDM) / 9);                
                    $danhmuc_getbyid = danhmuc_getbyiddetail($MaDM,$page);
                }else{
                    $MaDM = "";
                    if(isset($_GET['page']) && ($_GET['page']>=1)){ //Nếu truyền rồi
                        $page = $_GET['page'];
                    }else{
                        $page = 1;//nếu chưa truyền thì mặc định cho ns bằng 1
                    }
                    $getdanhmuc = danhmuc_getAll(); 
                    $getdanhmucproduct = danhmucproduct_getAll($page); 
                    $SoTrang = ceil(catagoryall_phantrang() / 9);
                }
                
                $view_name = "product_catagory";
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