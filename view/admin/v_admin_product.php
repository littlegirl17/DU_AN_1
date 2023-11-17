<div class="main-content">
    <h3 class="title-page">
        Danh mục
    </h3>
    <div class="d-flex justify-content-end">
        <a href="index.php?mod=admin&act=admin_add_product" class="btn btn-primary mb-2">Thêm sản phẩm  mới</a>
    </div>
    <section class="row">
        <div class="col-sm-12 col-md-12 col xl-12">
            <div class="card chart">
            <table class="table">
    <thead>
        <tr>
            <th>STT</th>
            <th>Mã Sản phẩm</th>
            <th>Tên Sản phẩm</th>
            <th>Giá Sản phẩm</th>
            <th>Tiêu đề</th>
            <th>Mô tả</th>
            <th>Discount</th>
            <th>Hình ảnh</th>
            <th>Mã danh mục</th>
            <th>Lượt xem</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $stt = 1; 
            foreach($sanphamall as $product):
        ?>
        <tr>
            <td><?=$stt?></td>
            <td><?=$product['MaSP']?></td>
            <td><?=$product['TenSP']?></td>
            <td><?=$product['GiaSP']?></td>
            <td><?=$product['TieuDe']?></td>
            <td><?=$product['MoTa']?></td>
            <td><?=$product['Discount']?></td>
            <td><img src="view/img/traicay/<?=$product['HinhAnh']?>" alt="" style="width:80px; height:80px; object-fit:cover;"></td>
            <td><?=$product['MaDM']?></td>
            <td><?=$product['LuotXem']?></td>
            <td>
                <a href="index.php?mod=admin&act=admin_edit_product&MaSP=<?=$product['MaSP']?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
                <a href="index.php?mod=admin&act=admin_delete_product&MaSP=<?=$product['MaSP']?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a>
            </td>
        </tr>
        <?php 
            $stt++; 
            endforeach; 
        ?>
    </tbody>
</table>

            </div>
        </div>
        
    </section>
</div> 
