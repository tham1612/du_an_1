<?php

session_start();
ob_start();
if(!isset($_SESSION['giohang']))
    $_SESSION['giohang'] = [];
include "../model/pdo.php";
include "../model/sanpham.php";
include "../model/danhmuc.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
$dsdm = loadall_danhmuc();
if(isset($_GET['iddm']) && ($_GET['iddm'])) {
    $iddm = $_GET['iddm'];
} else {
    $iddm = 0;
}
$namedm = loadone_ten_dm($iddm);
include "header.php";
include "global.php";
$spnew = loadall_sanpham_home();
$dstop10 = loadall_sanpham_home_top10();

if(isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch($act) {
        case 'sanpham':

            if(isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if(isset($_GET['iddm']) && ($_GET['iddm']) > 0) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $allsp = loadall2_sanpham();
            $dsdm2 = sosanphamcuatungdanhmuc();
            $dssp = loadall_sanpham($kyw, $iddm);
            $namedm = loadone_ten_dm($iddm);
            include "sp.php";
            break;
        case 'sanphamct':
            if(isset($_POST['guibinhluan'])) {

                insert_binhluan($_POST['noidung'], $_POST['idpro']);
            }

            /*   if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
                  $noidung = $_POST['noidung'];
                  $idpro = $_POST['idpro'];
                  $iduser = $_SESSION['user']['id_tk'];
                  $ngaybinhluan = date('h:i:sa d/m/Y');
                  insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
                  $dsbl = loadall_binhluan($idpro);
              } */
            if(isset($_GET['idsp']) && ($_GET['idsp'])) {
                $id = $_GET['idsp'];
                $onesp = loadone_sanpham($id);
                extract($onesp);
                $sp_cung_loai = load_sanpham_cungloai($id_pr, $iddm);
                $dsbl = loadall_binhluan($_GET['idsp']);

                include "sanphamct.php";
            } else {
                include "home.php";
            }

            break;

        case 'locsp':

            $sosanpham1 = sosanphamcuatungdanhmuc();
            include "locsp.php";
        case 'dangky':
            if(isset($_POST['dangky']) && ($_POST['dangky'])) {
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
            if(isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);
                if(is_array($checkuser)) {
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
            if(isset($_POST['capnhat']) && ($_POST['capnhat'])) {
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

            if(isset($_POST['guimail']) && ($_POST['guimail'])) {
                $email = $_POST['email'];
                $checkemail = checkemail($email);
                if(is_array($checkemail)) {
                    $thongbao = '<script>
                            var thongbao = new Object();
                            thongbao.name = "mật khẩu của bạn là:";
                            thongbao.name2="'.$checkemail['pass'].'";
                        
                        
                            thongbao.intro = function() {
                                alert( "mật khẩu của bạn là:'.$checkemail['pass'].'");
                    
                    
                            }
                        
                            thongbao.intro();
                        </script>';
                } else {
                    $thongbao = '<script>
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
            if(isset($_SESSION['user'])) {
                unset($_SESSION['user']);
            }
            header('Location: /view/index.php');
            exit();
            // echo "<script>window.location.href='index.php';</script>";
        case 'addcart':
            
            // session_destroy();
            // die;
            if(isset($_SESSION['user'])) {
                if(isset($_POST['addtocart'])) {

                    $userID = $_SESSION['user']['id_tk'];
                    $id_pr = $_POST['id_pr'];
                    $tensp = $_POST['tensp'];
                    $img = $_POST['hinh'];
                    $gia = $_POST['giasp'];
                    $sl = isset($_POST['sl']) ? $_POST['sl']  : 1;
                    
                    $key = "giohang-$userID";
                    if(isset($_SESSION[$key][$id_pr])) {
                        $_SESSION[$key][$id_pr]['sl'] = intval($sl) + intval($_SESSION[$key][$id_pr]['sl']);
                        $_SESSION[$key][$id_pr]['tt'] = $_SESSION[$key][$id_pr]['sl'] * $_SESSION[$key][$id_pr]['giasp'];
                    } else {
                        $_SESSION[$key][$id_pr] = [
                            'id_pr' => $_POST['id_pr'],
                            'tensp' => $_POST['tensp'],
                            'hinh' => $_POST['hinh'],
                            'giasp' => intval($_POST['giasp']),
                            'sl' => $sl,
                            'tt' => intval($_POST['sl']) * intval($_POST['giasp'])
                        ];
                    }

                    //     echo "<pre>";
                    //    print_r($_SESSION);die;
                }


                include "giohang.php";
            } else {
                echo "<script>alert('vui lòng đăng nhập để thêm vào giỏ hàng')</script>";
                echo "<script>window.location.href='index.php?act=dangnhap';</script>";
            }

            break;
        case 'decart':

            if(isset($_GET['i']) && $_GET['i'] >= 0) {
                array_splice($_SESSION['giohang'], $_GET['i'], 1);

            }
            if(isset($_GET['xoagiohang'])){
                
                unset($_SESSION['giohang']);
            }
            if(isset($_SESSION['giohang']) && $_GET['i'] >= 0) {
                //header('locatinon:index.php?act=addcart');
                echo "<script>window.location.href='index.php?act=addcart';</script>";

            } else {
                echo "<script>window.location.href='index.php';</script>";
                //header('locatinon:index.php');
            }

            



            break;

        default:
            //code//
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
include "footer.php";
