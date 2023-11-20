<div class="main-content">
    <h3 class="title-page">
        Bài Viết
    </h3>
    <div class="d-flex justify-content-end">
        <a href="index.php?mod=admin&act=admin_add_post" class="btn btn-primary mb-2">Thêm bài viết mới</a>
    </div>
    <section class="row">
        <div class="col-sm-12 col-md-12 col xl-12">
            <div class="card chart">
                <table class="table">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Mã bài viết</th>
                            <th>Tiêu đề</th>
                            <th>Hình ảnh</th>
                            <th>Hình ảnh chi tiết</th>
                            <th>Mô tả ngắn</th>
                            <th>Mô tả</th>
                            <th>Ngày viết</th>
                            <th>Mã danh mục</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $stt = 1; 
                            foreach($baivietall as $post):
                        ?>
                        <tr>
                            <td><?=$stt?></td>
                            <td><?=$post['MaBV']?></td>
                            <td><?=$post['TieuDe']?></td>
                            <td><img src="view/img/baiviet/<?=$post['HinhAnh']?>" alt="" style="width:80px; height:80px; object-fit:cover;"></td>
                            <td><img src="view/img/baiviet/<?=$post['HinhAnhDetail']?>" alt="" style="width:80px; height:80px; object-fit:cover;"></td>
                            <td><?=$post['MoTaNgan']?></td>
                            <td class="post_admin" data-content=""><?= $post['MoTa'] ?></td>
                            <td><?=$post['NgayViet']?></td>
                            <td><?=$post['MaDM']?></td>
                            <td>
                                <a href="index.php?mod=admin&act=admin_edit_post&MaBV=<?=$post['MaBV']?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
                                <a href="index.php?mod=admin&act=admin_delete_post&MaBV=<?=$post['MaBV']?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a>
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
