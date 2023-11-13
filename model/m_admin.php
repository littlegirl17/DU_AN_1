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
?>