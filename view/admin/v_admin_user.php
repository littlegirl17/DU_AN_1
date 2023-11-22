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
            <th>Avatar</th>
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
            <td>
                <?php
                    switch ($user['GioiTinh']) {
                        case '0':
                            echo '<p style="text-align: center; color:#fff; padding:5px 5px; background-color: #00982d;">Nam</p>';
                            break;
                        case '1':
                            echo '<p style="text-align: center; color:#fff; padding:5px 5px; background-color: #e22121;">Nữ</p>';
                            break;
                        
                        default:

                            break;
                    }
                ?>
            </td>
            <td><?=$user['SoDienThoai']?></td>
            <td>
                <?php
                    switch ($user['Quyen']) {
                        case '0':
                            echo '<p style="text-align: center; color:#fff; padding:5px 5px; background-color: #00982d;">User</p>';
                            break;
                        case '1':
                            echo '<p style="text-align: center; color:#fff; padding:5px 5px; background-color: #e22121;">Admin</p>';
                            break;
                        
                        default:

                            break;
                    }
                ?>
            </td>
            <td><img src="view/img/avatar/<?=$user['HinhAnh']?>" alt="" style="width:80px; height:80px; object-fit:cover;"></td>
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
