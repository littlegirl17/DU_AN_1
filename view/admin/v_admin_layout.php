<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="view/css/admin.css">
    <script src="https://kit.fontawesome.com/8c204d0fdf.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <div class="container-fluid main-page">
        
        <div class="app-main">
            
            <nav class="sidebar bg-green">
                <ul>
                    <?php if(isset($_SESSION['user'])): ?>
                        <div class="box_infor">
                            <div class="">
                                <img src="view/img/avatar/<?=$_SESSION['user']['HinhAnh']?>" alt="">
                            </div>
                            <div class="">
                                <p ><?=$_SESSION['user']['HoTen']?></p>
                            </div>
                        </div>
                    <?php endif; ?>
                    <li>
                        <a href="index.php?mod=admin&act=dashboard"><i class="fa-solid fa-house ico-side"></i>Dashboards</a>
                    </li>
                    <li>
                        <a href="index.php?mod=admin&act=admin_catagory"><i class="fa-solid fa-cart-shopping ico-side"></i>Quản kí danh mục</a>
                    </li>
                    <li>
                        <a href="index.php?mod=admin&act=admin_product"><i class="fa-solid fa-folder-open ico-side"></i>Quản lí sản phẩm</a>
                    </li>
                    <li>
                        <a href="index.php?mod=admin&act=admin_post"><i class="fa-solid fa-mug-hot ico-side"></i>Quản lí bài viết</a>
                    </li>
                    <li>
                        <a href="index.php?mod=admin&act=admin_user"><i class="fa-solid fa-user ico-side"></i>Quản lí thành viên</a>
                    </li>
                    <li>
                        <a href="index.php?mod=admin&act=admin_donhang"><i class="fa-solid fa-user ico-side"></i>Quản lí đơn hàng</a>
                    </li>
                    <li>
                        <a href="index.php?mod=admin&act=admin_cmt"><i class="fa-solid fa-user ico-side"></i>Quản lí bình luận</a>
                    </li>
                    <li>
                        <a href="index.php?mod=page&act=home"><i class="fa-solid fa-user ico-side"></i>Thoát</a>
                    </li>
                </ul>
            </nav>

            <?php
                include_once 'view/admin/v_'.$view_name.'.php';
            ?>
            
        </div>
    </div>

    
</body>

</html>