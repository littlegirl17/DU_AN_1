<div class="main-content">
    <h3 class="title-page">
        Danh mục
    </h3>
    <div class="d-flex justify-content-end">
        <a href="index.php?mod=admin&act=admin_add_catagory" class="btn btn-primary mb-2">Thêm danh mục mới</a>
    </div>
    <section class="row">
        <div class="col-sm-12 col-md-12 col xl-12">
            <div class="card chart">
                <table class="table">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Mã danh mục </th>
                            <th>Tên danh mục</th>
                            <th>Hình ảnh</th>
                            <th>Uư tiên</th>
                            <th>Số thứ tự</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $stt = 1; 
                            foreach($danhmucall as $item):
                        ?>
                        <tr>
                            <td><?=$stt?></td>
                            <td><?=$item['MaDM']?></td>
                            <td><?=$item['TenDM']?></td>
                            <td><img src="view/img/categories/<?=$item['HinhAnh']?>" alt="" style="width:80px; height:80px; object-fit:cover;"></td>
                            <td><?=$item['UuTien']?></td>
                            <td><?=$item['SoThuTu']?></td>
                            <td>
                                <a href="index.php?mod=admin&act=admin_edit_catagory&MaDM=<?=$item['MaDM']?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
                                <a href="index.php?mod=admin&act=admin_delete_catagory&MaDM=<?=$item['MaDM']?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a>
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
