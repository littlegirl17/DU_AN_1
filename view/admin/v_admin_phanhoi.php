<div class="main-content">
    <h3 class="title-page">
        Phản hồi 
    </h3>
    <section class="row">
        <div class="col-sm-12 col-md-12 col xl-12">
            <div class="card chart">
                <table class="table">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Mã phản hồi </th>
                            <th>Họ tên</th>
                            <th>Email</th>
                            <th>Nội dung</th>
                            <th>Ngày gửi</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $stt = 1; 
                            foreach($phanhoiAll as $item):
                        ?>
                        <tr>
                            <td><?=$stt?></td>
                            <td><?=$item['MaPH']?></td>
                            <td><?=$item['HoTen']?></td>
                            <td><?=$item['Email']?></td>
                            <td><?=$item['NoiDung']?></td>
                            <td><?=$item['NgayGui']?></td>
                            <td>
                                <a href="index.php?mod=admin&act=deletephanhoi&MaPH=<?=$item['MaPH']?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a>
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
