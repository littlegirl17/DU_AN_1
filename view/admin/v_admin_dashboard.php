<div class="main-content">
                <h3 class="title-page">
                    Dashboards
                </h3>
                <section class="statistics row">
                    <div class="col-sm-12 col-md-6 col-xl-2">
                        <a href="products.html">
                            <div class="card mb-3 widget-chart">
                                <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                                    <h5>
                                        Tổng sản phẩm
                                    </h5>
                                </div>
                                <span class="widget-numbers"><?=$countProduct?></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-2">
                        <a href="user.html">
                            <div class="card mb-3 widget-chart">

                                <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                                    <h5>
                                        Tổng thành viên
                                    </h5>
                                </div>
                                <span class="widget-numbers"><?=$countUser?></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-2">
                        <a href="caterogies.html">
                            <div class="card mb-3 widget-chart">
                                <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                                    <h5>
                                        Tổng bài viết
                                    </h5>
                                </div>
                                <span class="widget-numbers"><?=$countBlog?></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-2">
                        <a href="#">
                            <div class="card mb-3 widget-chart">
                                <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                                    <h5>
                                        Tổng doanh mục
                                    </h5>
                                </div>
                                <span class="widget-numbers"><?=$countCatagory?></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-2">
                        <a href="#">
                            <div class="card mb-3 widget-chart">
                                <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                                    <h5>
                                        Tổng đơn hàng
                                    </h5>
                                </div>
                                <span class="widget-numbers"><?=$countOrder?></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-2">
                        <a href="#">
                            <div class="card mb-3 widget-chart">
                                <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                                    <h5>
                                        Tổng bình luận
                                    </h5>
                                </div>
                                <span class="widget-numbers"><?=$countCmt?></span>
                            </div>
                        </a>
                    </div>
                </section>
                <section class="row">
                    <div class="col-sm-12 col-md-6 col xl-6">
                        <!-- <div id="myChart" style="height:400px"></div> -->
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-6">
                        <div class="card chart">
                            <form action="#" method="post">
                                <div class="input-group mb-3">
                                    <input type="date" class="form-control" placeholder="Username"
                                        aria-label="Username">
                                    <span class="input-group-text">Đến ngày</span>
                                    <input type="date" class="form-control" placeholder="Server" aria-label="Server">
                                    <button type="button" class="btn btn-primary">Xem</button>
                                </div>
                            </form>
                            <p>Tổng doanh thu: <span>100.000.000 VND</span></p>
                            <table class="revenue table table-hover">
                                <thead>
                                    <th>#</th>
                                    <th>Mã đơn hàng</th>
                                    <th>Doanh thu</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>GIA001</td>
                                        <td>100.000</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>GIA002</td>
                                        <td>100.000</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>GIA003</td>
                                        <td>100.000</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>GIA004</td>
                                        <td>100.000</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>GIA004</td>
                                        <td>100.000</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>GIA004</td>
                                        <td>100.000</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>GIA004</td>
                                        <td>100.000</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>GIA004</td>
                                        <td>100.000</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>GIA004</td>
                                        <td>100.000</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>GIA004</td>
                                        <td>100.000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </section>
            </div> 

<script src="https://www.gstatic.com/charts/loader.js"></script>
<!-- <script>
    google.charts.load('current',{packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    // Your Function
    function drawChart() {
        
        // Set Data
        const data = google.visualization.arrayToDataTable([
        ['Danh mục', 'Số lượng sản phẩm'], //Tên, đơn vị số liệu
        <?php foreach($ as $tkcd){
            echo "['".$tkcd['TenDM']."',".$tkcd['SoLuong']."],";
        } ?>
        
        ]);

        // Set Options
        const options = {
        title:'Biểu đồ thống kê sách theo chủ đề',
        is3D: true
        };

        // Draw
        const chart = new google.visualization.PieChart(document.getElementById('myChart'));
        chart.draw(data, options);
    }
</script> -->
