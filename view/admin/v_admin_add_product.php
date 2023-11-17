
<form class="addPro" action="" method="post" enctype="multipart/form-data">
    <div class="main-content">
        <h3 class="title-page">
            Thêm  sản phẩm mới
        </h3>
        <div class="d-flex justify-content-end">
    <input type="submit" class="btn btn-primary mb-2" name="submit" value="Lưu">
</div>

<section class="row">
    <div class="col-sm-12 col-md-12 col xl-12">
        <div class="card chart">       
            <div class="form-group">
                <label for="TenSP">Tên sản phẩm:</label>
                <input type="text" class="form-control" name="TenSP" placeholder="Nhập tên sản phẩm">
            </div>

            <div class="form-group">
                <label for="GiaSP">Giá sản phẩm:</label>
                <input type="text" class="form-control" name="GiaSP" placeholder="Nhập giá sản phẩm">
            </div>

            <div class="form-group">
                <label for="TieuDe">Tiêu đề:</label>
                <input type="text" class="form-control" name="TieuDe" placeholder="Nhập tiêu đề sản phẩm">
            </div>

            <div class="form-group">
                <label for="MoTa">Mô tả:</label>
                <textarea class="form-control" name="MoTa" placeholder="Nhập mô tả sản phẩm"></textarea>
            </div>

            <div class="form-group">
                <label for="Discount">Giảm giá:</label>
                <input type="text" class="form-control" name="Discount" placeholder="Nhập giảm giá sản phẩm">
            </div>

            <div class="form-group">
                <label for="Discount">v</label>
                <input type="text" class="form-control" name="LuotXem" placeholder="Nhập giảm giá sản phẩm">
            </div>
            <div class="form-group">
                <label for="HinhAnh">Hình ảnh:</label>
                <div class="custom-file">
                    <input type="file" name="HinhAnh">
                </div>
            </div>

            <select name="MaDM" >
                <?php foreach($danhmucall as $dm): ?>
                    <option value="<?=$dm['MaDM']?>"><?=$dm['TenDM']?></option>
                <?php endforeach; ?>
            </select>

        </div>
    </div>
</section>

    </div> 
</form>

    
