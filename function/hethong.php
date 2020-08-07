<?php 
require_once "./autoload.php";
$get_hethong = $db->total("SELECT * FROM `he_thong` WHERE `id` = 1");
$tien_ca_cuoc = $get_hethong['tong_tien-ca_cuoc'];