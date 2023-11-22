<div class="main-content">
                <h3 class="title-page">
                Chỉnh sửa sản phẩm 
                </h3>
                
                <form class="editPro" action="" method="post" enctype="multipart/form-data">
                <div class="d-flex justify-content-end">
            <input type="submit" class="btn btn-primary mb-2" name="submit" value="Lưu">
        </div>
    <div class="form-group">
        <label for="name">Tên Sản phẩm:</label>
        <input type="text" class="form-control" name="TenSP" value="<?=$getproductId['TenSP']?>" >
    </div>
    <div class="form-group">
        <label for="name">Giá Sản phẩm:</label>
        <input type="text" class="form-control" name="GiaSP" value="<?=$getproductId['GiaSP']?>" >
    </div>
    <div class="form-group">
        <label for="name">Giá Giảm:</label>
        <input type="text" class="form-control" name="Discount" value="<?=$getproductId['GiaGiam']?>" >
    </div>
    <div class="form-group">
        <label for="name">Tiêu đề:</label>
        <input type="text" class="form-control tieude" name="TieuDe" value="<?=$getproductId['TieuDe']?>" >
    </div>
    <div class="form-group">
        <label for="name">Mô tả:</label>
        <textarea class="form-control mota" name="MoTa"><?=$getproductId['MoTa']?></textarea>
    </div>
    
    <div class="form-group">
        <label for="exampleInputFile" class="label_admin">Ảnh Sản phẩm
        <div class="custom-file">
            <input type="file" name="HinhAnh">
            <img src="view/img/traicay/<?=$getproductId['HinhAnh']?>" alt="" style="width:80px; height:80px; object-fit:cover;">
        </div></label>
    </div>

    <select name="MaDM" class="admin__select" >
        <?php foreach($danhmucall as $dm): ?>
            <option value="<?=$dm['MaDM']?>" <?=($dm['MaDM'] == $getproductId['MaDM']) ? "selected" : "" ?>><?=$dm['TenDM']?></option>
        <?php endforeach; ?>
    </select>
</form>

            </div>