<form action="" method="post" enctype="multipart/form-data">
    <div class="main-content">
        <h3 class="title-page">
            Chỉnh sửa danh mục 
        </h3>
        <div class="d-flex justify-content-end">
            <input type="submit" class="btn btn-primary mb-2" name="submit" value="Lưu">
        </div>
        <section class="row">
            <div class="col-sm-12 col-md-12 col xl-12">
                <div class="card chart">
                    <form class="addPro" action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Tên danh mục:</label>
                            <input type="text" class="form-control" name="TenDM" value="<?=$getcataId['TenDM']?>" >
                        </div>
                        <div class="form-group">
                            <label for="name">Số thứ tự:</label>
                            <input type="text" class="form-control" name="SoThuTu" value="<?=$getcataId['SoThuTu']?>" >
                        </div>
                        <div class="form-group">
                            <label for="name">Uư tiên:</label>
                            <input type="text" class="form-control" name="UuTien" value="<?=$getcataId['UuTien']?>" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile" class="label_admin">Ảnh danh mục
                            <div class="custom-file">
                                <input type="file" name="HinhAnh" >
                                <img  src="view/img/categories/<?=$getcataId['HinhAnh']?>" alt="" style="width:80px; height:80px; object-fit:cover;">
                            </div></label>
                        </div>
                    </form>
                </div>
            </div>
            
        </section>
    </div> 
</form>