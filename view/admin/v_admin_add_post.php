<form class="addPro" action="" method="post" enctype="multipart/form-data">
    <div class="main-content">
        <h3 class="title-page">
            Thêm bài viết mới
        </h3>
        <div class="d-flex justify-content-end">
            <input type="submit" class="btn btn-primary mb-2" name="submitblog" value="Lưu">
        </div>

        <section class="row">
            <div class="col-sm-12 col-md-12 col xl-12">
                <div class="card chart">
                    <input type="hidden" name="MaBV">
                    <div class="form-group">
                        <label for="name">Tiêu đề:</label>
                        <input type="text" class="form-control" name="TieuDe" placeholder="Nhập tiêu đề">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputFile">Hình ảnh:</label>
                        <div class="custom-file">
                            <input type="file" name="HinhAnh">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputFile">Hỉnh ảnh chi tiết</label>
                        <div class="custom-file">
                            <input type="file" name="HinhAnhDetail">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name">Mô tả ngắn:</label>
                        <input type="text" class="form-control" name="MoTaNgan" placeholder="Nhập mô tả ngắn">
                    </div>

                    <div class="form-group">
                        <label for="name">Mô tả:</label>
                        <input type="text" class="form-control" name="MoTa" placeholder="Nhập mô tả">
                    </div>

                    <!-- <div class="form-group">
                        <label for="name">Ngày viết:</label>
                        <input type="date" class="form-control" name="NgayViet" placeholder="Chọn ngày viết">
                    </div> -->

                    <select name="MaDM">
                        <?php foreach ($danhmucall as $dm): ?>
                            <option value="<?= $dm['MaDM'] ?>"><?= $dm['TenDM'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    
                </div>
            </div>
        </section>

    </div>
</form>