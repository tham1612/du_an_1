<?php
session_start();
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/taikhoan.php";
include "view/header.php";
include "global.php";
$dsdm = loadall_danhmuc();
$spnew = loadall_sanpham_home();
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanphamct':
           /*  if(isset($_GET['idsp'])&& ($_GET['idsp'])){
                $id=$_GET['idsp'];
                $onesp=
            } */
            break;  
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
 ?>