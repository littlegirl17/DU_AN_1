<?php
    include_once 'config.php';
    include_once 'model/m_product.php';

    if(isset($_GET['act']) && ($_GET['act']!="")){
        switch ($_GET['act']) {
            case 'detail':
                $MaSP = $_GET['MaSP'];
                $update_view = product_updateLuotXem($MaSP);
                $detail_product = product_detailbyid($MaSP);
                $lienquan_product = product_lienquanRanDom($detail_product['MaDM']);
                $view_name = "product_detail";
                break;

            case 'viewcart':
                $view_name = "product_cart";
                break;
            
            case 'addtocart':
                if(isset($_POST['submitaddtocart']) && ($_POST['submitaddtocart']!="")){
                    $MaSP = $_POST['MaSP'];
                    $HinhAnh = $_POST['HinhAnh'];
                    $GiaSP = $_POST['GiaSP'];
                    $TenSP = $_POST['TenSP'];
                    if(isset($_POST['SoLuong']) && ($_POST['SoLuong']>0)){
                        $SoLuong = $_POST['SoLuong'];
                    }else{
                        $SoLuong = 1;
                    }

                    $flag = 0;  //nếu biến này = 0 thì số lượng không thay đổi, và khi số lượng này không thay đổi thì nó không trùng sản phẩm trong giỏ hàng
                    
                    $i=0; // i để định vị mình đang ở cái sản phẩm nào mà check // i có nghĩa là: ở phần tử thứ i mình cập nhật lại cái số lượng
                    foreach($_SESSION['mygiohang'] as $item){
                        if($item['TenSP'] == $TenSP){
                            $SoLuongNew = $SoLuong + $item['SoLuong'];
                            $_SESSION['mygiohang'][$i]['SoLuong'] = $SoLuongNew;
                            $flag = 1; // và gán lại biến tạm = 1
                            break; // sau khi check xong thì thoát luôn
                        }
                        $i++;
                    }
                    if($flag == 0){
                        $cart = [
                            "MaSP"=>$MaSP,
                            "HinhAnh"=>$HinhAnh,
                            "GiaSP"=>$GiaSP,
                            "TenSP"=>$TenSP,
                            "SoLuong"=>$SoLuong
                        ];
                        $_SESSION['mygiohang'][] = $cart;
                    }
                }
                header("location: index.php?mod=product&act=viewcart");
                break;   
            case 'deleteid':
                if(isset($_GET['del']) && ($_GET['del']>=0)){
                    array_splice($_SESSION['mygiohang'],$_GET['del'],1); //xoa cai mang nao - Cai dinh vi thu may - xoa bao nhieu phan tu
                }else{
                    $_SESSION['mygiohang'] = [];
                }
                header("location: index.php?mod=product&act=viewcart");
                break;
            case 'delateall':
                if(isset($_SESSION['mygiohang']) && ($_SESSION['mygiohang']>0)){
                    unset($_SESSION['mygiohang']);
                }else{
                    $_SESSION['mygiohang'] = [];
                }
                header("location: index.php?mod=product&act=viewcart");
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