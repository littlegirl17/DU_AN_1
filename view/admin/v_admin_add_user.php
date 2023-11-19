<form class="addPro" action="" method="post" enctype="multipart/form-data">
    <div class="main-content">
        <h3 class="title-page">
            Thêm mới người dùng
        </h3>
        <div class="d-flex justify-content-end">
            <input type="submit" class="btn btn-primary mb-2" name="submit" value="Lưu">
        </div>

        <section class="row">
            <div class="col-sm-12 col-md-12 col xl-12">
                <div class="card chart">
                    <div class="form-group">
                        <label for="HoTen">Họ tên:</label>
                        <input type="text" class="form-control" name="HoTen" placeholder="Nhập họ tên">
                    </div>

                    <div class="form-group">
                        <label for="UserName">Tên đăng nhập:</label>
                        <input type="text" class="form-control" name="UserName" placeholder="Nhập tên đăng nhập">
                    </div>

                    <div class="form-group">
                        <label for="Email">Email:</label>
                        <input type="email" class="form-control" name="Email" placeholder="Nhập địa chỉ email">
                    </div>

                    <div class="form-group">
                        <label for="MatKhau">Mật khẩu:</label>
                        <input type="password" class="form-control" name="MatKhau" placeholder="Nhập mật khẩu">
                    </div>

                    <div class="form-group">
                        <label for="DiaChi">Địa chỉ:</label>
                        <input type="text" class="form-control" name="DiaChi" placeholder="Nhập địa chỉ">
                    </div>

                    <div class="form-group">
                        <label for="GioiTinh">Giới tính:</label>
                        <select class="form-control" name="GioiTinh">
                                <option value="0" <?= (isset($_POST['GioiTinh']) == 0) ? 'selected' : '' ?>>Nam</option>
                                <option value="1" <?= (isset($_POST['GioiTinh']) == 1) ? 'selected' : '' ?>>Nữ</option>
                            </select>
                    </div>

                    <div class="form-group">
                        <label for="SoDienThoai">Số điện thoại:</label>
                        <input type="text" class="form-control" name="SoDienThoai" placeholder="Nhập số điện thoại">
                    </div>

                    <div class="form-group">
                        <label for="Quyen">Quyền:</label>
                        <select class="form-control" name="Quyen" >
                            <option value="0"  <?= (isset($_POST['Quyen']) == 0) ? 'selected' : ''?>>User</option>
                            <option value="1" <?= (isset($_POST['Quyen']) == 1) ? 'selected' : ''?>>Admin</option>
                        </select>
                    </div>
                    
                </div>
            </div>
        </section>

    </div>
</form>
