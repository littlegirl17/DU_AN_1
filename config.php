<?php
    session_start();
    ob_start();
    if(!isset($_SESSION['mygiohang'])) {
        $_SESSION['mygiohang'] = array();
    }
    $controller_name = "";
    $view_name = "";
?>