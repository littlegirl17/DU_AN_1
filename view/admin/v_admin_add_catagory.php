<form class="addPro" action="" method="post" enctype="multipart/form-data">
    <div class="main-content">
        <h3 class="title-page">
            Thêm danh mục mới
        </h3>
        <div class="d-flex justify-content-end">
            <input type="submit" class="btn btn-primary mb-2" name="submit" value="Lưu">
        </div>
        <section class="row">
            <div class="col-sm-12 col-md-12 col xl-12">
                <div class="card chart">
                    
                        <div class="form-group">
                            <label for="name">Tên danh mục:</label>
                            <input type="text" class="form-control" name="TenDM"  placeholder="Nhập tên danh mục">
                        </div>
                        <div class="form-group">
                            <label for="name">Số thứ tự:</label>
                            <input type="text" class="form-control" name="SoThuTu"  placeholder="Số thứ tự hiện xuất hiện">
                        </div>
                        <div class="form-group">
                            <label for="name">Uư tiên:</label>
                            <input type="text" class="form-control" name="UuTien"  placeholder="0: là ẩn | 1: là hiện">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile" class="label_admin">Ảnh danh mục
                            <div class="custom-file">
                                <input type="file" name="HinhAnh"  >
                            </div></label>
                        </div>
                </div>
            </div>
        </section>
    </div> 
</form>