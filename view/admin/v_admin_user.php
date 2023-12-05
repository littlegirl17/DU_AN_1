<div class="main-content">
    <h3 class="title-page">
        Thành viên đã đăng ký 
    </h3>
    <div class="row">
        <div class="col-md-6">
            <div class="blog__sidebar__search">
                <form action="index.php?mod=admin&act=admin_user" method="post">
                    <input type="text" name="keyword" placeholder="Search...">
                    <button type="submit" name="search_product"><i class="fa-solid fa-magnifying-glass" style="color: #69cc05;"></i></button>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="d-flex justify-content-end">
                <a href="index.php?mod=admin&act=admin_add_user" class="btn btn-primary mb-2">Thêm thành viên mới </a>
            </div>
        </div>
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
                            <td style="width:30px;"><?=$user['MatKhau']?></td>
                            <td><?=$user['DiaChi']?></td>
                            <td>
                                <?php
                                    switch ($user['GioiTinh']) {
                                        case '0':
                                            echo '<p style="text-align: center; color:#fff; padding:5px 5px; background-color: #ede74b;">Nam</p>';
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
                            <td><?=$user['NgayTao']?></td>
                        
                            <td>
                                <a href="index.php?mod=admin&act=admin_edit_user&MaTK=<?=$user['MaTK']?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
                                <a href="index.php?mod=admin&act=admin_delete_user&MaTK=<?=$user['MaTK']?>" class="btn btn-danger" onclick="delete_user(<?=$user['MaTK']?>),event"><i class="fa-solid fa-trash"></i> Xóa</a>
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

<div class="admin__pagein">
        <ul class="pagination">
            <li class="page-item <?= ($page <= 1) ? "disabled" : ""?>">
                <a class="page-link" href="index.php?mod=admin&act=admin_user&page=<?=$page-1?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <?php for($i=1; $i < $SoTrang ; $i++): ?>
                <li class="page-item <?= ($page==$i) ? 'active' : '' ?>">
                    <a class="page-link" href="index.php?mod=admin&act=admin_user&page=<?=$i?>"><?=$i?></a>
                </li>
            <?php endfor; ?>
                <li class="page-item <?= ($page >= $SoTrang) ? "disabled" : ""?>">
                <a class="page-link" href="index.php?mod=admin&act=admin_user&page=<?=$page+1?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </div>
<script>
    function delete_user(MaTK){
        var kq = confirm("Bạn có chắc chắn muốn xóa thành viên này không");
        if(kq){
            window.location = 'index.php?mod=admin&act=admin_delete_user&MaTK='+MaTK;
        }
        event.preventDefault();//sử dụng nó để ngăn chặn hành động mặc định
    }
</script>