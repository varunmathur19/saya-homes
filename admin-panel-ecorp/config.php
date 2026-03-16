<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

mysqli_report(MYSQLI_REPORT_OFF);

$link = @mysqli_connect('localhost', 'root', '', 'sayahomes_saya');

// Local fallback connection (XAMPP/dev)
if (!$link) {
    $link = @mysqli_connect('localhost', 'root', '', 'saya');
}

if (!$link) {
    die("Database Could Not Be Connected");
}

if (!headers_sent()) {
    header('Content-type: text/html; charset=utf-8');
}
mysqli_set_charset($link, 'utf8');
mysqli_query($link, "SET NAMES 'utf8'");
