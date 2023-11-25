<?php
    session_start();
    ob_start();
    if(!isset($_SESSION['mygiohang'])) {
        $_SESSION['mygiohang'] = array();
    }
    $controller_name = "";
    $view_name = "";

    // Google API configuration
    define('GOOGLE_CLIENT_ID', '63606263809-3at78cgcpu90a4ctierhgde4cgg7viho.apps.googleusercontent.com');
    define('GOOGLE_CLIENT_SECRET', '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');
    define('GOOGLE_REDIRECT_URL', 'http://localhost:8080/PHP1/DuAn_1/Organic/');

        // Database configuration
    define('DB_HOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', 'root');
    define('DB_NAME', 'organic');
    define('DB_USER_TBL', 'taikhoan');

    //
    if(!session_id()){
        session_start();
    }

    // VNPAY
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    /*
    * To change this license header, choose License Headers in Project Properties.
    * To change this template file, choose Tools | Templates
    * and open the template in the editor.
    */
    
    $vnp_TmnCode = "APJIZVEV"; //Website ID in VNPAY System
    $vnp_HashSecret = "FOUBLEJJNVWVOWOAIKDMOKXCCZQYUOCY"; //Secret key
    $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
    $vnp_Returnurl = "http://localhost/vnpay_php/vnpay_return.php";
    $vnp_apiUrl = "http://sandbox.vnpayment.vn/merchant_webapi/merchant.html";
    //Config input format
    //Expire
    $startTime = date("YmdHis");
    $expire = date('YmdHis',strtotime('+15 minutes',strtotime($startTime)));

?>