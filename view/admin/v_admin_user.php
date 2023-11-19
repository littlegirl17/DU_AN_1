<div class="main-content">
    <h3 class="title-page">
        Thành viên đã đăng ký 
    </h3>
    <div class="d-flex justify-content-end">
        <a href="index.php?mod=admin&act=admin_add_user" class="btn btn-primary mb-2">Thêm thành viên mới </a>
    </div>
    <section class="row">
        <div class="col-sm-12 col-md-12 col xl-12">
            <div class="card chart">
            <table class="table">
    <thead>
        <tr>
            <th>STT</th>
            <th>Mã TK </th>
            <th>Họ tên </th>
            <th>UserName</th>
            <th>Email </th>
            <th>Mật Khẩu </th>
            <th>Địa Chỉ </th>
            <th>Giới tính </th>
            <th>SĐT </th>
            <th>Quyền</th>
            <th>Ngày tạo</th>
            <th>Hành động</th>
            
        </tr>
    </thead>
    <tbody>
        <?php 
            $stt = 1; 
            foreach($userall as $user):
        ?>
        <tr>
            <td><?=$stt?></td>
            <td><?=$user['MaTK']?></td>
            <td><?=$user['HoTen']?></td>
            <td><?=$user['UserName']?></td>
            <td><?=$user['Email']?></td>
            <td><?=$user['MatKhau']?></td>
            <td><?=$user['DiaChi']?></td>
            <td><?=$user['GioiTinh']?></td>
            <td><?=$user['SoDienThoai']?></td>
            <td><?=$user['Quyen']?></td>
            <td><?=$user['NgayTao']?></td>
         
            <td>
                <a href="index.php?mod=admin&act=admin_edit_user&MaTK=<?=$user['MaTK']?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
                <a href="index.php?mod=admin&act=admin_delete_user&MaTK=<?=$user['MaTK']?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a>
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
