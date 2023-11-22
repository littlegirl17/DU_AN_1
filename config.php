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
?>