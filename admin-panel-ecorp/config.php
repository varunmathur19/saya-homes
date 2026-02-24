<?php
session_start();
$link = mysqli_connect('localhost', 'sayahomes_saya', '+?[){SSjjD@$', 'sayahomes_saya') or die("Database Could Not Be Connected");
// $link=mysqli_connect('localhost','root','','saya') or die("Database Could Not Be Connected");
header('Content-type: text/html; charset=utf-8');
mysqli_set_charset($link,'utf8');
mysqli_query($link,"SET NAMES 'utf8'");   
