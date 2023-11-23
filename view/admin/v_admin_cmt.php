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

    <div class="admin__pagein">
        <ul class="pagination">
            <li class="page-item <?= ($page <= 1) ? "disabled" : ""?>">
                <a class="page-link" href="index.php?mod=admin&act=admin_cmt&page=<?=$page-1?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <?php for($i=1; $i < $SoTrang ; $i++): ?>
                <li class="page-item <?= ($page==$i) ? 'active' : '' ?>">
                    <a class="page-link" href="index.php?mod=admin&act=admin_cmt&page=<?=$i?>"><?=$i?></a>
                </li>
            <?php endfor; ?>
                <li class="page-item <?= ($page >= $SoTrang) ? "disabled" : ""?>">
                <a class="page-link" href="index.php?mod=admin&act=admin_cmt&page=<?=$page+1?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </div>
</div> 
