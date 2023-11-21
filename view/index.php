<?php

session_start();

include "../model/pdo.php";
include "../model/sanpham.php";
include "../model/danhmuc.php";
include "../model/taikhoan.php";
$dsdm = loadall_danhmuc();
if (isset($_GET['iddm']) && ($_GET['iddm'])) {
    $iddm = $_GET['iddm'];
} else {
    $iddm = 0;
}
include "header.php";
include "global.php";
$spnew = loadall_sanpham_home();
$dstop10 = loadall_sanpham_home_top10();
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm']) > 0) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }

            $dssp = loadall_sanpham($kyw, $iddm);
            $tendm = loadone_ten_dm($iddm);
            include "sanpham.php";
            break;
        case 'sanphamct':
            if (isset($_GET['idsp']) && ($_GET['idsp'])) {
                $id = $_GET['idsp'];
                $onesp = loadone_sanpham($id);
                extract($onesp);
                $sp_cung_loai = load_sanpham_cungloai($id_pr, $iddm);
                include "sanphamct.php";
            } else {
                include "view/home.php";
            }

            break;

        case 'locsp':

            $sosanpham1 = sosanphamcuatungdanhmuc();
            include "locsp.php";
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $user = $_POST['user'];
                insert_taikhoan($user, $pass, $email);
                $thongbao1 = '<script>
                var thongbao = new Object();
                thongbao.name = "bạn đã đăng kí tài khoản thành công!" ;
               
               
                thongbao.intro = function() {
                    alert( "bạn đã đăng kí tài khoản thành công!");
        
        
                }
              
                thongbao.intro();
            </script>';

            }
            include "taikhoan/dangki-dangnhap.php";
            break;
        case "dangnhap":
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    echo '<script>alert("Chúc mừng đăng nhập thành công");</script>';
                    // header('Location:index.php?act=home');
                    echo "<script>window.location.href='index.php';</script>";
                } else {
                    echo '<script>alert("Tài khoản không tồn tại");</script>';
                }
            }
            include "taikhoan/dangki-dangnhap.php";


            break;
        case "edit_taikhoan":
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $pass = $_POST['pass'];
                $user = $_POST['user'];
                $email = $_POST['email'];
                $diachi = $_POST['diachi'];
                $tel = $_POST['tel'];
                $id_tk = $_POST['id_tk'];
                update_taikhoan($id_tk, $user, $pass, $diachi, $tel);
                $_SESSION['user'] = checkuser($user, $pass);
                echo "<script>window.location.href='index.php?act=edit_taikhoan';</script>";
            }
            include "taikhoan/edit_taikhoan.php";
            break;
        case 'quenmk':

            if (isset($_POST['guimail']) && ($_POST['guimail'])) {
                $email = $_POST['email'];
                $checkemail = checkemail($email);
                if (is_array($checkemail)) {
                            $thongbao = '<script>
                            var thongbao = new Object();
                            thongbao.name = "mật khẩu của bạn là:";
                            thongbao.name2="'. $checkemail['pass'] .'";
                        
                        
                            thongbao.intro = function() {
                                alert( "mật khẩu của bạn là:'. $checkemail['pass'] .'");
                    
                    
                            }
                        
                            thongbao.intro();
                        </script>' ;
                } else {
                    $thongbao ='<script>
                    var thongbao = new Object();
                    thongbao.name = "email này không tồn tại!" ;
                   
                   
                    thongbao.intro = function() {
                        alert( "email này không tồn tại!");
            
            
                    }
                  
                    thongbao.intro();
                </script>';
                }
            }
            include "taikhoan/quenmk.php";
            break;
        case 'thoat':
            //code//
            if (isset($_SESSION['user'])) {
                unset($_SESSION['user']);
            }
            echo "<script>window.location.href='index.php?act=edit_taikhoan';</script>";
        /*         default:
                    //code//
                    include "view/home.php";
                    break; */
    }
} else {
    include "home.php";
}
include "footer.php";
?>