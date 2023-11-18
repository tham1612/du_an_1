<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>Allaia | Bootstrap eCommerce Template - ThemeForest</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
        href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
        href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="css/home_1.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

</head>

<body>

    <div id="page">

        <header class="version_1">
            <div class="layer"></div>
            <!-- Mobile menu overlay mask -->
            <div class="main_header">
                <div class="container">
                    <div class="row small-gutters">
                        <div class="col-xl-3 col-lg-3 d-lg-flex align-items-center">
                            <div id="logo">
                                <a href="index.html"><img src="img/logo.svg" alt="" width="100" height="35"></a>
                            </div>
                        </div>
                        <nav class="col-xl-6 col-lg-7">
                            <a class="open_close" href="javascript:void(0);">
                                <div class="hamburger hamburger--spin">
                                    <div class="hamburger-box">
                                        <div class="hamburger-inner"></div>
                                    </div>
                                </div>
                            </a>
                            <!-- Mobile menu button -->
                            <div class="main-menu">
                                <div id="header_menu">
                                    <a href="index.html"><img src="img/logo_black.svg" alt="" width="100"
                                            height="35"></a>
                                    <a href="#" class="open_close" id="close_in"><i class="ti-close"></i></a>
                                </div>
                                <ul>
                                    <li>
                                        <a href="index.php">TRANG CHỦ</a>
                                    </li>




                                    <li class="megamenu submenu">
                                        <a href="javascript:void(0);" class="show-submenu-mega">Pages</a>
                                        <div class="menu-wrapper">
                                            <div class="row small-gutters">
                                                <div class="col-lg-3">
                                                    <h3>BỘ LỌC SẢN PHẨM </h3>
                                                    <ul>
                                                        <li><a href="locsp.php">Lọc Sản Phẩm</a></li>

                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <h3>DANH MỤC VÀ SẢN Phẩm</h3>
                                                    <ul>
                                                        <?php
                                                        /*    $dsdm=loadall_danhmuc();
                                                        var_dump( $dsdm); */
                                                        foreach ($dsdm as $dm) {
                                                            extract($dm);
                                                            $linkdm = "index.php?act=sanpham&iddm=" . $iddm;
                                                            echo ' <li><a href="' . $linkdm . ' ">' . $namedm . '</a></li>';
                                                        }
                                                        ?>
                                                        <!-- 
                                                        <li><a href="#">danh muc 2t</a></li>
                                                        <li><a href="#">danh mục 1</a></li>
                                                        <li><a href="#">danh muc 2t</a></li>
                                                        <li><a href="#">danh mục 1</a></li>
                                                        <li><a href="#">danh muc 2t</a></li>
                                                        <li><a href="#">danh mục 1</a></li>
                                                        <li><a href="#">danh muc 2t</a></li> -->
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <h3>Những Trang Khác</h3>
                                                    <ul>
                                                        <li><a href="giohang.html"> Giỏ Hàng</a></li>
                                                        <li><a href="checkout.html">Check Out Page</a></li>
                                                        <li><a href="confirm.html">Xác nhận trang mua hàng</a></li>
                                                        <li><a href="taikhoan/dangki-dangnhap.php">Trang Tạo Tài Khoản </a></li>
                                                        <li><a href="theodoidonhang.html">Theo dõi đơn Hàng</a></li>
                                                        <li><a href="trogiup.html">Trợ giúp </a></li>
                                                        <li><a href="trogiup2.html">Trợ giúp 2</a></li>
                                                        <li><a href="danhgia.html">Đánh Giá</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 d-xl-block d-lg-block d-md-none d-sm-none d-none">
                                                    <div class="banner_menu">
                                                        <a href="#0">
                                                            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                                                data-src="img/banner_menu.jpg" width="400" height="550"
                                                                alt="" class="img-fluid lazy">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /row -->
                                        </div>
                                        <!-- /menu-wrapper -->
                                    </li>



                                    <li><a href="lienhe.html">Liên Hệ </a></li>
                                    <li><a href="gioithieu.html">Giới Thiệu</a></li>




                                    <li>
                                        <a href="blog.html">Blog</a>
                                    </li>

                                </ul>
                            </div>
                            <!--/main-menu -->
                        </nav>
                        <div class="col-xl-3 col-lg-2 d-lg-flex align-items-center justify-content-end text-end">
                            <a class="phone_top" href="tel://9438843343"><strong><span>Cần giúp đỡ?</span>+94
                                    423-23-221</strong></a>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
            </div>
            <!-- /main_header -->

            <div class="main_nav Sticky">
                <div class="container">
                    <div class="row small-gutters">
                        <div class="col-xl-3 col-lg-3 col-md-3">
                            <nav class="categories">
                                <ul class="clearfix">
                                    <li><span>
                                            <a href="#">
                                                <span class="hamburger hamburger--spin">
                                                    <span class="hamburger-box">
                                                        <span class="hamburger-inner"></span>
                                                    </span>
                                                </span>
                                                DANH MỤC
                                            </a>
                                        </span>
                                        <div id="menu">
                                            <ul>
                                                <?php

                                                foreach ($dsdm as $dm) {
                                                    extract($dm);
                                                    $linkdm = "index.php?act=sanpham&iddm=" . $iddm;
                                                    echo '<li><span><a href="' . $linkdm . '">' . $namedm . '</a></span>
                                                    
                                                </li>';
                                                }
                                                ?>
                                                <!-- <li><span><a href="#0">tên danh mục 1</a></span>
                                                    <ul>
                                                        <li><a href="#">sp1</a></li>
                                                        <li><a href="#">sp2</a></li>
                                                        <li><a href="#">sp1</a></li>
                                                        <li><a href="#">sp2</a></li>
                                                    </ul>
                                                </li> -->



                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- tìm kiếm  -->
                        <div class="col-xl-6 col-lg-7 col-md-6 d-none d-md-block">
                            <div class="custom-search-input">
                                <form action="index.php?act=sanpham" method="post">
                                    <input type="text" placeholder="Tìm kiếm hơn 10.000 sản phẩm " name="kyw">
                                    <button type="submit"><i class="header-icon_search_custom"
                                            name="timkiem"></i></button>
                                </form>
                            </div>
                        </div>
                        <!-- keets thucs timf kieem  -->
                        <div class="col-xl-3 col-lg-2 col-md-3">
                            <ul class="top_tools">
                                <li>
                                    <div class="dropdown dropdown-cart">
                                        <a href="giohang.html" class="cart_bt"><strong>2</strong></a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li>
                                                    <a href="product-detail-1.html">
                                                        <figure><img
                                                                src="img/products/product_placeholder_square_small.jpg"
                                                                data-src="img/products/shoes/thumb/1.jpg" alt=""
                                                                width="50" height="50" class="lazy"></figure>
                                                        <strong><span>1x Armor Air x Fear</span>$90.00</strong>
                                                    </a>
                                                    <a href="#0" class="action"><i class="ti-trash"></i></a>
                                                </li>
                                                <li>
                                                    <a href="product-detail-1.html">
                                                        <figure><img
                                                                src="img/products/product_placeholder_square_small.jpg"
                                                                data-src="img/products/shoes/thumb/2.jpg" alt=""
                                                                width="50" height="50" class="lazy"></figure>
                                                        <strong><span>1x Armor Okwahn II</span>$110.00</strong>
                                                    </a>
                                                    <a href="0" class="action"><i class="ti-trash"></i></a>
                                                </li>
                                            </ul>
                                            <div class="total_drop">
                                                <div class="clearfix"><strong>Total</strong><span>$200.00</span></div>
                                                <a href="giohang.html" class="btn_1 outline">Giỏ hàng</a><a
                                                    href="checkout.html" class="btn_1">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /dropdown-cart-->
                                </li>
                                <li>
                                    <a href="#0" class="wishlist"><span>Wishlist</span></a>
                                </li>
                                <li>
                                    <div class="dropdown dropdown-access">
                                        <?php
                                            if (isset($_SESSION['user'])) {
                                                extract($_SESSION['user']);

                                        ?>
                                            <span class="access_link">xin chao <?= $user ?></span>
                                            <div class="dropdown-menu">
                                                <a href="index.php?act=edit_taikhoan" class="btn_1">cập nhật tài khoản</a>
                                                <ul>
                                                        <li>
                                                            <a href="theodoidonhang.html"><i class="ti-truck"></i>Theo Dõi Đơn
                                                                Hàng </a>
                                                        </li>
                                                       
                                                        
                                                        <li>
                                                            <a href="trogiup.html"><i class="ti-help-alt"></i>Trợ Giúp </a>
                                                        </li>
                                                        <?php if($role==1){?>
                                                        <li>
                                                            <a href="../admin/index.php"><i class="ti-help-alt"></i>Đăng nhập Admin </a>
                                                        </li>
                                                        <?php }?>
                                                        <li>
                                                            <a href="index.php?act=quenmk"><i class="ti-help-alt"></i>Quên Mật Khẩu </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.php?act=thoat"><i class="ti-help-alt"></i>Đăng xuất </a>
                                                        </li>
                                                </ul>
                                            </div>
                                        <?php 
                                            }else{
                                        ?>
                                     
                                         <a href="index.php?act=dangky" class="access_link"><span>tài khoản</span></a>
                                        <div class="dropdown-menu">
                                            <a href="index.php?act=dangky" class="btn_1">Đăng kí đăng nhập</a>
                                            <ul>
                                                <li>
                                                    <a href="theodoidonhang.html"><i class="ti-truck"></i>Theo Dõi Đơn
                                                        Hàng </a>
                                                </li>
                                                <li>
                                                    <a href="index.php?act=dangky"><i class="ti-package"></i>Tài Khoản </a>
                                                </li>
                                                <li>
                                                    <a href="index.php?act=dangky"><i class="ti-user"></i>My Profile</a>
                                                </li>
                                                <li>
                                                    <a href="trogiup.html"><i class="ti-help-alt"></i>Trợ Giúp </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <!-- /dropdown-access-->
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
                <div class="search_mob_wp">
                    <input type="text" class="form-control" placeholder="Search over 10.000 products">
                    <input type="submit" class="btn_1 full-width" value="Search">
                </div>
                <!-- /search_mobile -->
            </div>
            <!-- /main_nav -->
        </header>
        <!-- /header -->