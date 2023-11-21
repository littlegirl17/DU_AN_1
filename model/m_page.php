<?php
    include_once 'model/m_pdo.php';

    function page_productNew($keyword){
        return pdo_query("SELECT * FROM sanpham WHERE TenSP LIKE '%$keyword%'  ORDER BY MaSP DESC LIMIT 8"); //Vì là sanphammoi nên cái sp nào mới thêm thì nó tự xếp lên đầu tiên, or mình muốn cố định thì dùng NEW
    }

    function page_productDiscount(){
        return pdo_query("SELECT * FROM sanpham WHERE Discount > 0 ORDER BY Discount DESC LIMIT 4");
    }

    function page_productLuotMua(){
        return pdo_query("SELECT * FROM sanpham WHERE LuotMua > 0 ORDER BY LuotMua DESC LIMIT 8");
    }

    function page_productLuotXem(){
        return pdo_query("SELECT * FROM sanpham WHERE LuotXem > 0 ORDER BY LuotXem DESC LIMIT 8");
    }

    function showsp_home($dssp){
        $page_home = "";
        foreach($dssp as $item){

            if($item['GiaSP'] >=1){
                $price = '<h5>'.number_format($item['GiaSP'],"0",",",".").' VNĐ</h5>';
            }else{
                $price = "<h5>Đang cập nhật</h5>";
            }

            if($item['Discount'] >= 1){
                $GiamGia = '<div class="product__discount__percent_home">'.$item['Discount'].'%</div>';
            }else{
                $GiamGia = "";
            }

            echo '
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="view/img/traicay/'.$item['HinhAnh'].'">
                            '.$GiamGia.'
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="index.php?mod=product&act=detail&MaSP='.$item['MaSP'].'">'.$item['TenSP'].'</a></h6>
                            '.$price.'
                        </div>
                        <form action="index.php?mod=product&act=addtocart" method="post">
                            <input type="hidden" name="MaSP" value="'.$item['MaSP'].'">
                            <input type="hidden" name="HinhAnh" value="'.$item['HinhAnh'].'">
                            <input type="hidden" name="GiaSP" value="'.$item['GiaSP'].'">
                            <input type="hidden" name="TenSP" value="'.$item['TenSP'].'">
                            <input type="hidden" name="SoLuong" value="1">
                            <div class="intro">
                                <input type="submit" value="Thêm vào giỏ " name="submitaddtocart">
                            </div>
                        </form> 
                    </div>
                </div>';
            
        }

        return $page_home;
    }

    function showsp_home_luotmua($dssp){
        $page_home = "";
        foreach($dssp as $sp){

            if($sp['GiaSP'] >=1){
                $price = '<h5>'.number_format($sp['GiaSP'],"0",",",".").' VNĐ</h5>';
            }else{
                $price = "<h5>Đang cập nhật</h5>";
            }

            if($sp['Discount'] >= 1){
                $GiamGia = '<div class="product__discount__percent_home">'.$sp['Discount'].'%</div>';
            }else{
                $GiamGia = "";
            }

            if($sp['LuotMua']){
                $MuaHang = '<h6>Số lượt mua<strong>('.$sp['LuotMua'].')</strong></h6>';
            }else{
                $MuaHang = '';
            }

            

            
            echo '
                <div class="col-lg-3 col-md-4  fresh-meat">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="view/img/traicay/'.$sp['HinhAnh'].'">
                        '.$GiamGia.'
                        
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="index.php?mod=product&act=detail&MaSP='.$sp['MaSP'].'">'.$sp['TenSP'].'</a></h6>
                        '.$price.'
                        <div class="featured__item__text_MX">'.$MuaHang.'</div>
                    </div>
                    <form action="index.php?mod=product&act=addtocart" method="post">
                        <input type="hidden" name="MaSP" value="'.$sp['MaSP'].'">
                        <input type="hidden" name="HinhAnh" value="'.$sp['HinhAnh'].'">
                        <input type="hidden" name="GiaSP" value="'.$sp['GiaSP'].'">
                        <input type="hidden" name="TenSP" value="'.$sp['TenSP'].'">
                        <input type="hidden" name="SoLuong" value="1">
                        <div class="intro">
                            <input type="submit" value="Thêm vào giỏ " name="submitaddtocart">
                        </div>
                    </form> 
                </div>
            </div>';
            
        }

        return $page_home;
    }

    function showsp_home_luotxem($dssp){
        $page_home = "";
        foreach($dssp as $item){

            if($item['GiaSP'] >=1){
                $price = '<h5>'.number_format($item['GiaSP'],"0",",",".").' VNĐ</h5>';
            }else{
                $price = "<h5>Đang cập nhật</h5>";
            }

            if($item['Discount'] >= 1){
                $GiamGia = '<div class="product__discount__percent_home">'.$item['Discount'].'%</div>';
            }else{
                $GiamGia = "";
            }

            if($item['LuotXem']){
                $SoView = '<h6> <strong>('.$item['LuotXem'].')</strong> Lượt xem</h6>';
            }else{
                $SoView = '';
            }

            
            echo '
                <div class="col-lg-3 col-md-4  fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="view/img/traicay/'.$item['HinhAnh'].'">
                            '.$GiamGia.'
                            
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="index.php?mod=product&act=detail&MaSP='.$item['MaSP'].'">'.$item['TenSP'].'</a></h6>
                            '.$price.'
                            <div class="featured__item__text_MX">'.$SoView.'</div>
                        </div>
                        <form action="index.php?mod=product&act=addtocart" method="post">
                            <input type="hidden" name="MaSP" value="'.$item['MaSP'].'">
                            <input type="hidden" name="HinhAnh" value="'.$item['HinhAnh'].'">
                            <input type="hidden" name="GiaSP" value="'.$item['GiaSP'].'">
                            <input type="hidden" name="TenSP" value="'.$item['TenSP'].'">
                            <input type="hidden" name="SoLuong" value="1">
                            <div class="intro">
                                <input type="submit" value="Thêm vào giỏ " name="submitaddtocart">
                            </div>
                        </form> 
                    </div>
                </div>'
                ;
            
        }

        return $page_home;
    }

    function page_blog(){
        return pdo_query("SELECT * FROM baiviet ORDER BY MaBV DESC LIMIT 3");
    }

    function page_blogId($MaBV){
        return pdo_query_one("SELECT * FROM baiviet WHERE MaBV = ?",$MaBV);
    }

    function page_blogRelate($MaDM){
        return pdo_query("SELECT * FROM baiviet WHERE MaDM = ? ORDER BY rand() ",$MaDM);
    }

    function show_home_blog($dsbv){
        $page_home = "";
        foreach($dsbv as $item){
            echo '
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src="view/img/baiviet/'.$item['HinhAnh'].'" alt="">
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> '.$item['NgayViet'].'</li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="index.php?mod=page&act=blog&MaBV='.$item['MaBV'].'">'.$item['TieuDe'].'</a></h5>
                        <p>'.$item['MoTaNgan'].'</p>
                    </div>
                </div>
            </div>
            ';
        }
        return $page_home;
    }

    function danhmuc_getUuTien(){
        return pdo_query("SELECT sp.*, dm.TenDM FROM danhmuc dm INNER JOIN sanpham sp ON dm.MaDM=sp.MaDM WHERE UuTien = 1 ORDER BY SoThuTu ASC");
    }
?>