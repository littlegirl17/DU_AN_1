<form class="editUser" action="" method="post"> 
    <div class="main-content">
        <h3 class="title-page">
            Chỉnh sửa thông tin thành viên
        </h3>
        <div class="d-flex justify-content-end">
        <input type="submit" class="btn btn-primary mb-2" name="submit" value="Lưu">
        </div>
        <section class="row">
            <div class="col-sm-12 col-md-12 col xl-12">
                <div class="card chart">
                    
                        <div class="form-group">
                            <label for="hoTen">Họ tên:</label>
                            <input type="text" class="form-control" name="HoTen" value="<?= $getuserById['HoTen'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="userName">UserName:</label>
                            <input type="text" class="form-control" name="UserName" value="<?= $getuserById['UserName'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="Email" value="<?= $getuserById['Email'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="matKhau">Mật khẩu:</label>
                            <input type="text" class="form-control" name="MatKhau" value="<?= $getuserById['MatKhau'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="diaChi">Địa chỉ:</label>
                            <input type="text" class="form-control" name="DiaChi" value="<?= $getuserById['DiaChi'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="gioiTinh">Giới tính (1 Nữ | 0 Nam):</label>
                            <select class="form-control" name="GioiTinh">
                                <option value="0" <?= ($getuserById['GioiTinh'] == 0) ? 'selected' : '' ?>>Nam</option>
                                <option value="1" <?= ($getuserById['GioiTinh'] == 1) ? 'selected' : '' ?>>Nữ</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="soDienThoai">Số điện thoại:</label>
                            <input type="tel" class="form-control" name="SoDienThoai" value="<?= $getuserById['SoDienThoai'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="quyen">Quyền (1 admin | 0 user):</label>
                            <select class="form-control" name="Quyen" >
                                <option value="0"  <?=($getuserById['GioiTinh'] == 0) ? 'selected' : ''?>>User</option>
                                <option value="1" <?=($getuserById['GioiTinh'] == 1) ? 'selected' : ''?>>Admin</option>
                            </select>
                        </div>
                </div>
            </div>
        </section>
    </div>
</form>

