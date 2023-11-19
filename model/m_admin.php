<?php
    include_once 'model/m_pdo.php';

    //DASHBOARD
        function dashboard_countProduct(){
            return pdo_query_value("SELECT COUNT(*) FROM sanpham ");
        } //trả về một giá trị duy nhất

        function dashboard_countCatagory(){
            return pdo_query_value("SELECT COUNT(*) FROM danhmuc ");
        } //trả về một giá trị duy nhất

        function dashboard_countUser(){
            return pdo_query_value("SELECT COUNT(*) FROM taikhoan ");
        } //trả về một giá trị duy nhất

        function dashboard_countBlog(){
            return pdo_query_value("SELECT COUNT(*) FROM baiviet ");
        } //trả về một giá trị duy nhất

        function dashboard_countOrder(){
            return pdo_query_value("SELECT COUNT(*) FROM donhang ");
        } //trả về một giá trị duy nhất

        function dashboard_countComment(){
            return pdo_query_value("SELECT COUNT(*) FROM binhluan ");
        } //trả về một giá trị duy nhất


        //Thống kê
        function dashboard_googlechart(){
            return pdo_query("SELECT dm.MaDM, dm.TenDM, COUNT(sp.MaSP) AS SoLuong FROM danhmuc dm LEFT JOIN sanpham sp ON dm.MaDM = sp.MaDM GROUP BY dm.MaDM, dm.TenDM");
        }//LEFT JOIN la lấy theo bảng bên trái, nếu cd đó ko có sách thì nó sẽ để là số 0

    
    // Danh mục
        function get_catagoryadmin(){
            return pdo_query("SELECT * FROM danhmuc");
        }

        // Thêm
        function add_catagory($TenDM,$SoThuTu,$UuTien,$HinhAnh){
            pdo_execute("INSERT INTO danhmuc (`TenDM`,`SoThuTu`,`UuTien`,`HinhAnh`) VALUES (?,?,?,?)",$TenDM,$SoThuTu,$UuTien,$HinhAnh);
        }
        
        // Sửa
        function get_catagoryId($MaDM){
            return pdo_query_one("SELECT * FROM danhmuc WHERE MaDM = ?",$MaDM);
        }
        
        function update_catagory($MaDM,$TenDM,$SoThuTu,$UuTien,$HinhAnh){
            pdo_execute("UPDATE danhmuc SET TenDM = ?,SoThuTu = ?,UuTien = ?, HinhAnh = ? WHERE MaDM = ? ",$TenDM,$SoThuTu,$UuTien,$HinhAnh,$MaDM);
        }
        // Xóa
        function delete_catagory($MaDM){
            pdo_execute("DELETE FROM danhmuc WHERE MaDM = ?",$MaDM);
        }


    // Sản phẩm
        
        function get_productadmin(){
            return pdo_query("SELECT * FROM sanpham");
        }

        // Thêm
        function add_product($TenSP, $GiaSP, $TieuDe, $MoTa, $Discount, $HinhAnh,$MaDM,$LuotXem) {
            pdo_execute("INSERT INTO sanpham (`TenSP`, `GiaSP`, `TieuDe`, `MoTa`, `Discount`, `HinhAnh`,`MaDM`,`LuotXem`) VALUES (?,?,?,?,?,?,?,?)",$TenSP, $GiaSP, $TieuDe, $MoTa, $Discount, $HinhAnh,$MaDM,$LuotXem);
        }

        //Lấy về để sửa
        function get_productById($MaSP){
            return pdo_query_one("SELECT * FROM sanpham WHERE MaSP = ?",$MaSP);
        }

        // Cập nhật
        function update_product($MaSP,$TenSP, $GiaSP, $TieuDe, $MoTa, $Discount, $HinhAnh, $MaDM){
            pdo_execute("UPDATE sanpham SET TenSP = ?, GiaSP = ?, TieuDe = ?, MoTa = ?, Discount = ?, HinhAnh = ?, MaDM = ? WHERE MaSP = ?",$TenSP, $GiaSP, $TieuDe, $MoTa, $Discount, $HinhAnh, $MaDM, $MaSP);
        }

        // Xóa
        function delete_product($MaSP){
            pdo_execute("DELETE FROM sanpham WHERE MaSP = ?",$MaSP);
        }

    // User
        function get_useradmin(){
            return pdo_query("SELECT * FROM TaiKhoan");
        }

        // Thêm
        function add_user($HoTen, $UserName, $Email, $MatKhau, $DiaChi, $GioiTinh, $SoDienThoai, $Quyen, $HinhAnh) {
            pdo_execute("INSERT INTO TaiKhoan (`HoTen`, `UserName`, `Email`, `MatKhau`, `DiaChi`, `GioiTinh`, `SoDienThoai`, `Quyen`, `HinhAnh`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)",
                $HoTen, $UserName, $Email, $MatKhau, $DiaChi, $GioiTinh, $SoDienThoai, $Quyen, $HinhAnh);
        }
        
        //Lấy về để sửa
        function get_userById($MaTK){
            return pdo_query_one("SELECT * FROM TaiKhoan WHERE MaTK = ?",$MaTK);
        }

        // Cập nhật
        function update_user($MaTK,$HoTen, $UserName, $Email, $MatKhau, $DiaChi, $GioiTinh, $SoDienThoai, $Quyen, $HinhAnh) {
            pdo_execute("UPDATE TaiKhoan SET HoTen = ?, UserName = ?, Email = ?, MatKhau = ?, DiaChi = ?, GioiTinh = ?, SoDienThoai = ?, Quyen = ?, HinhAnh = ? WHERE MaTK = ?",$HoTen, $UserName, $Email, $MatKhau, $DiaChi, $GioiTinh, $SoDienThoai, $Quyen, $HinhAnh, $MaTK);
        }
            
        // Xóa
        function delete_user($MaTK) {
            pdo_execute("DELETE FROM TaiKhoan WHERE MaTK = ?", $MaTK);
        }
    
    // Bình luận

        // Cmt 
        function get_cmtadmin(){
            return pdo_query("SELECT * FROM binhluan");
        }
        // Xóa
        function delete_cmt($MaBL) {
            pdo_execute("DELETE FROM binhluan WHERE MaBL = ?", $MaBL);
        }
    
    // Đơn hang
                            
        function get_donhangadmin(){
            return pdo_query("SELECT * FROM donhang");
        }

        //Lấy về để sửa
        function get_donhangById($MaDH){
            return pdo_query_one("SELECT * FROM donhang WHERE MaDH = ?",$MaDH);
        }

        // cap nhat
        function update_donhang($MaDH, $HoTen, $Email, $SoDienThoai, $DiaChi, $Quyen, $GhiChu, $TongTien, $NgayDat, $MaTK, $PhuongThucTT, $TrangThai) {
            pdo_execute("UPDATE DonHang SET HoTen = ?, Email = ?, SoDienThoai = ?, DiaChi = ?, Quyen = ?, GhiChu = ?, TongTien = ?, NgayDat = ?, MaTK = ?, PhuongThucTT = ?, TrangThai = ? WHERE MaDH = ?",
            $HoTen, $Email, $SoDienThoai, $DiaChi, $Quyen, $GhiChu, $TongTien, $NgayDat, $MaTK, $PhuongThucTT, $TrangThai, $MaDH);
        }

        // xoa 
        /*function delete_donhang($MaDH){
            pdo_execute("DELETE FROM donhang WHERE MaDH = ?",$MaDH);
        }*/
?>