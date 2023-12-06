<?php
include "../model/pdo.php";
include "tulam.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/donhang.php";
include "../model/thongke.php";
if(isset($_GET['act'])) {
    $act = $_GET['act'];
    switch($act) {

        case 'adddm':
            if(isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao = '<script>
                var thongbao = new Object();
                thongbao.name = "bạn đã thêm  thành công danh mục:" ;
                thongbao.nd ="'.$tenloai.'";
               
                thongbao.intro = function() {
                    alert("bạn đã thêm  thành công danh mục:'.$tenloai.'");
        
        
                }
              
                thongbao.intro();
            </script>';
            }

            include "danh mục/add.php";
            break;
        case 'listdm':
            $listdanhmuc = loadall_danhmuc();
            include "danh mục/list.php";
            break;
        case 'xoadm':
            if(isset($_GET['id']) && ($_GET['id'] > 0)) {

                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "danh mục/list.php";
        case 'suadm':
            if(isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadone_danhmuc($_GET['id']);
            }
            include "danh mục/update.php";
            break;
        case 'updatedm':
            if(isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_danhmuc($id, $tenloai);
                $thongbao = "banj đã sửa đổi thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "danh mục/list.php";
            break;
        case 'addsp':
            if(isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir.basename($_FILES["hinh"]["name"]);
                if(move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename($_FILES['hinh']['name'])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                $mota = $_POST['mota'];
                insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm);
                $thongbao = '<script>
                var thongbao = new Object();
                thongbao.name = "bạn đã thêm sản phẩm thành công!" ;
               
               
                thongbao.intro = function() {
                    alert( "bạn đã thêm sản phẩm thành công!");
        
        
                }
              
                thongbao.intro();
            </script>';
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/add.php";
            break;
        case 'listsp':
            /* if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = "";
                $iddm = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($kyw, $iddm); */
            $limit = 5;
            if(isset($_GET['page'])) {
                $page = $_GET['page'];

            } else {
                $page = 1;
            }
            $start = ($page - 1) * $limit;
            $result_sanpham = result_sanpham($limit, $start);
            include "sanpham/list.php";
            break;
        case 'xoasp':
            if(isset($_GET['id_pr']) && ($_GET['id_pr'] > 0)) {
                delete_sanpham($_GET['id_pr']);
            }
            $listsanpham = loadall_sanpham("", 0);
            include "sanpham/list.php";
            break;
        case 'suasp':
            if(isset($_GET['id_pr']) && ($_GET['id_pr'] > 0)) {
                $sanpham = loadone_sanpham($_GET['id_pr']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/update.php";
            break;
        case "updatesp":
            if(isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                $id_pr = $_POST['id_pr'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir.basename($_FILES["hinh"]["name"]);
                if(move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                update_sanpham($id_pr, $iddm, $tensp, $giasp, $mota, $hinh);
                $thongbao = "cap nhat thanh cong";
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham("", 0);
            include "sanpham/list.php";
            break;
        case 'dskh':
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;
        case 'xoatk':
            if(isset($_GET['id_tk']) && ($_GET['id_tk'] > 0)) {
                delete_taikhoan($_GET['id_tk']);
            }
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
        case 'listdh':

            $limit = 15;
            if(isset($_GET['page'])) {
                $page = $_GET['page'];

            } else {
                $page = 1;
            }
            $start = ($page - 1) * $limit;
            $result_donhang = result_donhang($limit, $start);
            include "donhang/list.php";
            break;
        case 'list_carts':

            $limit = 10;
            if(isset($_GET['page'])) {
                $page = $_GET['page'];

            } else {
                $page = 1;
            }
            $start = ($page - 1) * $limit;
            $result_carts = result_carts($limit, $start);
            include "carts/list.php";
            break;
        case 'suacart':
            if(isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadone_carts($_GET['id']);
            }
            include "carts/update.php";
            break;
        case 'updatecart':
            if(isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tt = $_POST['tt'];
                $id = $_POST['id'];
                update_carts($_POST['id'], $tt);
                $thongbao = "banj đã sửa đổi thành công";
            }
            $limit = 10;
            if(isset($_GET['page'])) {
                $page = $_GET['page'];
            } else {
                $page = 1;
            }
            $start = ($page - 1) * $limit;
            $result_carts = result_carts($limit, $start);
            include "carts/list.php";
            break;
        case 'thongke':
            $dsthongke = load_thongke_sanpham_danhmuc();
            include "thongke/thongkesp-dm.php";
            break;
        case 'bieudosp-dm':
            $dsthongke = load_thongke_sanpham_danhmuc();
            include "thongke/bieudosp-dm.php";
            break;


        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}


?>