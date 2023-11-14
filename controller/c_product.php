<?php
    include_once 'config.php';
    include_once 'model/m_product.php';
    include_once 'model/m_order.php';

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
            
            case 'soluongcart':
                
                header("location: index.php?mod=product&act=viewcart");
                break;
            
            case 'addtocart':

                if(!isset($_SESSION['user'])){
                    $_SESSION['canhbao'] = "Bạn cần đăng nhập trước khi mua hàng";
                    header("location: index.php?mod=user&act=login");
                    return; // Nếu không có return, các lệnh phía sau header vẫn có thể được thực hiện
                }

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
                            $SoLuongNew =  intval($SoLuong) + intval($item['SoLuong']);
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

            case 'checkout':
                if(!isset($_SESSION['user'])){
                    $_SESSION['canhbao'] = "Bạn cần đăng nhập trước khi mua hàng";
                    header("location: index.php?mod=user&act=login");
                    return; // Nếu không có return, các lệnh phía sau header vẫn có thể được thực hiện
                }

                $view_name = "product_checkout";
                break;
            case 'order':
                if(!isset($_SESSION['user'])){
                    $_SESSION['canhbao'] = "Bạn cần đăng nhập trước khi mua hàng";
                    header("location: index.php?mod=user&act=login");
                    return; // Nếu không có return, các lệnh phía sau header vẫn có thể được thực hiện
                }

                if(isset($_POST['submit_checkout']) && ($_POST['submit_checkout'])){
                    // LẤY DỮ LIỆU TỪ FORM
                        // đoạn mã này là xác định liệu người dùng đã đăng nhập hay chưa
                        if(isset($_SESSION['user'])){
                            $MaTK = $_SESSION['user']['MaTK']; //nếu họ đã đăng nhập
                        }else{
                            $MaTK = 0; //nếu họ chưa đăng nhập
                        }
                        $TongTien = $_POST['TongTien'];
                        $HoTen = $_POST['HoTen'];
                        $DiaChi = $_POST['DiaChi'];
                        $SoDienThoai = $_POST['SoDienThoai'];
                        $Email = $_POST['Email'];
                        if(isset($_POST['GhiChu'])){
                            $GhiChu = $_POST['GhiChu']; //dữ liệu được gửi đi -> True
                        }else{
                            $GhiChu = ""; //nếu không có dữ liệu được gửi đi ->False -> rỗng
                        }
                        if(isset($_POST['PhuongThucTT'])){
                            $PhuongThucTT = $_POST['PhuongThucTT']; //dữ liệu được gửi đi -> True
                        }else{
                            $PhuongThucTT = ""; //nếu không có dữ liệu được gửi đi ->False -> rỗng
                        }
                        $MaDHRandom = "Organic".rand(0,999999);
                    // XỬ LÝ DỮ LIỆU
                        // Tạo đơn hàng và trả về một id đơn hàng
                        $iddh = TaoDonHang($MaTK,$TongTien,$HoTen,$DiaChi,$SoDienThoai,$Email,$GhiChu,$PhuongThucTT,$MaDHRandom);
                        // LƯU LẠI BẰNG SESSION
                        $_SESSION['iddh'] = $iddh;

                        if(isset($_SESSION['mygiohang']) && is_array($_SESSION['mygiohang'])){
                            foreach($_SESSION['mygiohang'] as $item){
                                //Thêm nó vào chi tiêt đơn hàng 
                                order_soluong($iddh,$item['MaSP']);
                                addOrder($iddh,$item['MaSP'],$item['GiaSP'],$item['SoLuong']); //$iddh là để nó biết lấy theo cái mã iddh nào
                            }
                            //nghĩa là sau khi sản phẩm đó được đặt, và quay lại trang chủ thì sản phẩm đó phải biến mất trong giỏ hàng
                            unset($_SESSION['mygiohang']);
                        }
                }
                header("location:index.php?mod=product&act=vieworder");
                break;

            case 'vieworder':
                $viewdonhang = get_order($_SESSION['iddh']);
                $viewsanphamorder = get_productOrder($_SESSION['iddh']);
                $view_name = "product_order";
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