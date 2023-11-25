<?php
    include_once 'config.php';
    include_once 'model/m_page.php';
    include_once 'model/m_product.php';
    include_once 'model/m_order.php';

    if(isset($_GET['act']) && ($_GET['act']!="")){
        switch ($_GET['act']) {
            case 'binhluan':
                $MaTK = $_SESSION['user']['MaTK'];
                if(isset($_POST['submitbinhluan'])){
                    $MaSP = $_POST['MaSP'];
                    $NoiDung = $_POST['NoiDung'];
                    binhuan_add($MaSP,$MaTK,$NoiDung);
                }
                header("location: index.php?mod=product&act=detail&MaSP=$MaSP");
                break;
            case 'detail':
                $update_view = product_updateLuotXem($_GET['MaSP']);
                $detail_product = product_detailbyid($_GET['MaSP']);
                $loadcomment = get_byproductcomment($_GET['MaSP']);
                $lienquan_product = product_lienquanRanDom($detail_product['MaDM']);
                $view_name = "product_detail";
                break;
            
            case 'viewcart':
                $view_name = "product_cart";
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
                    header("location: index.php?mod=product&act=viewcart");
                }
                
                break;
            case 'update_quantity':
                // Cập nhật giỏ hàng trong session đảm bảo rằng thông tin giỏ hàng được lưu trữ và duy trì qua các trang và phiên làm việc của người dùng.
                $id = $_GET['id'];
                $type = $_GET['type'];

                //Xử lý giảm hoặc tăng số lượng
                if($type === 'decre'){ 
                    //Kiểm tra nếu số lượng của sản phẩm trong giỏ hàng lớn hơn 1.
                    if($_SESSION['mygiohang'][$id]['SoLuong'] > 1){
                        // Nếu điều kiện trên đúng, giảm số lượng của sản phẩm đi 1 đơn vị.
                        $_SESSION['mygiohang'][$id]['SoLuong']--;
                    }else{
                        //Nếu số lượng là 1 hoặc dưới 1, loại bỏ sản phẩm khỏi giỏ hàng.
                        unset($_SESSION['mygiohang'][$id]);
                    }
                }else{
                    $_SESSION['mygiohang'][$id]['SoLuong']++;
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
                //Nếu không có sản phẩm thì không cho nó chuyển đến trang thanh toán
                if (empty($_SESSION['mygiohang'])) {
                    header("location: index.php?mod=product&act=viewcart");
                } else {
                    // Nếu có sản phẩm trong giỏ hàng, tiếp tục xử lý đơn hàng
                    if (!isset($_SESSION['user'])) {
                        $_SESSION['canhbao'] = "Bạn cần đăng nhập trước khi mua hàng";
header("location: index.php?mod=user&act=login");
                        return; // Nếu không có return, các lệnh phía sau header vẫn có thể được thực hiện
                    }
                }
                // Tiếp tục xử lý thông tin đơn hàng và chuyển hướng đến trang thanh toán
                $view_name = "product_checkout";
                break;

            
            case 'order':
                require "mail/sendmail.php";

                if(!isset($_SESSION['user'])){
                    $_SESSION['canhbao'] = "Bạn cần đăng nhập trước khi mua hàng";
                    header("location: index.php?mod=user&act=login");
                    return; // Nếu không có return, các lệnh phía sau header vẫn có thể được thực hiện
                }

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
                            $PhuongThucTT = 0; //nếu không có dữ liệu được gửi đi ->False -> rỗng
                        }
                        $MaDHRandom = "Organic".rand(0,999999);
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
                        }

                        
                
                if(isset($_POST['submit_checkout']) && ($_POST['submit_checkout'])){
                    //Gửi Email
                        $TieuDe = "Đơn hàng bạn đặt đã thành công";
                        $NoiDung = "<div><p>Cảm ơn quý khách đã đặt hàng của chúng tôi mã đơn hàng của bạn là: ".$MaDHRandom."</p><div>";
                        $NoiDung .= "Thông tin đơn đặt hàng bao gồm:";
                        $TongTien=0; $ThanhTien=0;
                        foreach($_SESSION['mygiohang'] as $emailcart){
                            $ThanhTien = $emailcart['SoLuong'] * $emailcart['GiaSP'];
                            $TongTien +=$ThanhTien;
                            $NoiDung .= '
                                    <ul>
                                        <li style="list-style: none;"><strong style="color: #7FAD39;">Mã SP:</strong> '.$emailcart['MaSP'].'</li>
                                        <li style="list-style: none;"><strong style="color: #7FAD39;">Tên SP:</strong> '.$emailcart['TenSP'].'</li>
                                        <li style="list-style: none;"><strong style="color: #7FAD39;">Số Lượng:</strong> '.$emailcart['SoLuong'].'</li>
                                        <li style="list-style: none;"><strong style="color: #7FAD39;">Giá SP:</strong> '.$emailcart['GiaSP'].'</li>
                                        <li style="list-style: none;"><strong style="color: #7FAD39;">Thành Tiền:</strong> '.$ThanhTien.'</li>
                                    </ul>
                                ';
                        }
                        $NoiDung .= '
                                    <hr>
                                    <ul>
                                        <li style="list-style: none;"><strong style="color: red;">Tổng tiền:</strong> '.$TongTien.'</li>
                                    </ul>';
                                    
                        $MailDatHang = $_SESSION['email'];
                        $mail = new Mailer();
                        $mail->DatHangEmail($TieuDe,$NoiDung,$MailDatHang);
                    //Chuyển đến trang đơn hàng (Hóa đơn)
                        header("location:index.php?mod=product&act=vieworder");
                
                } elseif (isset($_POST['payUrl'])){

                    function execPostRequest($url, $data)
                    {
                        $ch = curl_init($url);
                        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                                'Content-Type: application/json',
                                'Content-Length: ' . strlen($data))
                        );
                        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                        //execute post
                        $result = curl_exec($ch);
                        //close connection
                        curl_close($ch);
                        return $result;
                    }

                    if(isset($_POST['payUrl'])){
                        $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";
                        $partnerCode = 'MOMOBKUN20180529';
                        $accessKey = 'klm05TvNBzhg7h7j';
                        $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';

                        $orderInfo = "Thanh toán qua MoMo";
                        $amount = "10000";
                        $orderId = rand(00,9999);
                        $redirectUrl = "http://localhost:8080/PHP1/DuAn_1/Organic/index.php?mod=product&act=vieworder";
                        $ipnUrl = "http://localhost:8080/PHP1/DuAn_1/Organic/index.php?mod=product&act=vieworder";
                        $extraData = "";
                        
                        
                            $partnerCode = $partnerCode;
                            $accessKey = $accessKey;
                            $serectkey = $secretKey;
                            $orderId = $orderId; // Mã đơn hàng
                            $orderInfo = $orderInfo;
                            $amount = $amount;
                            $ipnUrl = $ipnUrl;
                            $redirectUrl = $redirectUrl;
                            $extraData = $extraData;
                        
                            $requestId = time() . "";
                            $requestType = "payWithATM";
                            //$extraData = ($_POST["extraData"] ? $_POST["extraData"] : "");
                            //before sign HMAC SHA256 signature
                            $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
                            $signature = hash_hmac("sha256", $rawHash, $serectkey);
                            $data = array('partnerCode' => $partnerCode,
                                'partnerName' => "Test",
                                "storeId" => "MomoTestStore",
                                'requestId' => $requestId,
                                'amount' => $amount,
                                'orderId' => $orderId,
                                'orderInfo' => $orderInfo,
                                'redirectUrl' => $redirectUrl,
                                'ipnUrl' => $ipnUrl,
                                'lang' => 'vi',
                                'extraData' => $extraData,
                                'requestType' => $requestType,
                                'signature' => $signature);
                            $result = execPostRequest($endpoint, json_encode($data));
                            $jsonResult = json_decode($result, true);  // decode json
                        
                            //Just a example, please check more in there
                        
                            header('Location: ' . $jsonResult['payUrl']);
                        
                    }
                }
                
                
                unset($_SESSION['mygiohang']);
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