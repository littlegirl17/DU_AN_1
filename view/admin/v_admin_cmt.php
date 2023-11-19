<div class="main-content">
    <h3 class="title-page">
        Bình luận từ thành viên
    </h3>
    <section class="row">
        <div class="col-sm-12 col-md-12 col xl-12">
            <div class="card chart">
                <table class="table">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Mã Bình Luận</th>
                            <th>Mã Sản Phẩm</th>
                            <th>Mã Tài Khoản</th>
                            <th>Nội Dung</th>
                            <th>Ngày Bình Luận</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $stt = 1; 
                            foreach($cmtall as $comment):
                        ?>
                        <tr>
                            <td><?=$stt?></td>
                            <td><?=$comment['MaBL']?></td>
                            <td><?=$comment['MaSP']?></td>
                            <td><?=$comment['MaTK']?></td>
                            <td><?=$comment['NoiDung']?></td>
                            <td><?=$comment['NgayBL']?></td>
                            <td>
                          
                            <td>
               
                <a href="index.php?mod=admin&act=admin_delete_cmt&MaBL=<?=$comment['MaBL']?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a>
            </td>
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
