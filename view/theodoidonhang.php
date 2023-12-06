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
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .bt {
            background-color: #f4511e;
            border: none;
            color: white;
            padding: 8px 16px;
            text-align: center;
            font-size: 16px;
            margin: 2px 1px;
            opacity: 0.6;
            transition: 0.3s;
            display: inline-block;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div id="pape">
        <main class="bg_gray">
            <div id="track_order">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-xl-7 col-lg-9">
                            <img src="img/track_order.svg" alt="" class="img-fluid add_bottom_15" width="200"
                                height="177">
                            <p>Quick Tracking Order</p>
                            <form action="index.php?act=trangthai" method="post">
                                <div class="search_bar">
                                    <input type="text" class="form-control" placeholder="Invoice ID" name="tt">
                                    <input type="submit" value="Search" name="timkiem" class="bnt_1">
                                </div>
                            </form>

                        </div>
                    </div>
                    <!-- /row -->
                </div>
                <div class="container margin_60_3">
                <form action="index.php?act=bill" method="post">

                    <?php if(isset($trangthai0)): ?>
                        <?php foreach($trangthai0 as $tt):
                            if($trangthai == 0) {
                                $t = "đăt hàng thành công";
                            } elseif($trangthai == 1) {
                                $t = "Đang vận chuyển";
                            } elseif($trangthai == 2) {
                                $t = "đã giao";
                            }
                            ?>
                            <div class="main_title">
                                <h2>THÔNG TIN ĐƠN HÀNG</h2>

                            </div>
                            <!-- Bước 2: Thanh toán và vận chuyển -->
                            <div class="step last">
                                <h3>Đơn hàng của bạn</h3>
                                <div class="box_general summary">
                                    <table style="border: 1px solid black; border-collapse: collapse;">
                                        <tr>
                                            <th>Tên người nhận</th>
                                            <th>Số điện thoại</th>
                                            <th>Email</th>
                                            <th>Địa chỉ</th>
                                            <th>Ngày mua hàng</th>
                                            <th>Phương thức thanh toán</th>
                                            <th>Tổng giá trị</th>
                                            <th>Trạng thái</th>
                                            <th></th>
                                        </tr>
                                        <tr>
                                        <tr>
                                            <td>
                                                <?= $name ?>
                                            </td>
                                            <td>
                                                <?= $tel ?>
                                            </td>
                                            <td>
                                                <?= $email ?>
                                            </td>
                                            <td>
                                                <?= $diachi ?>
                                            </td>
                                            <td>
                                                <?= $ngaymua ?>
                                            </td>
                                            <td>
                                                <?= $pthuctt ?>
                                            </td>
                                            <td>
                                                <?= $tongdonhang ?> vnd
                                            </td>
                                            <td>
                                                <?= $t ?>
                                            </td>
                                            <td> <a href="index.php?act=bill"><input type="submit" class="bt" name="chitiet"
                                                        value="xem chi tiet"> </a></td>
                                                            
                                            <input type="hidden" name="id" value="<?= $id_dh ?>"></form>
                                        </tr>

                                        <?php
                                        // if(is_array($listbill)){
                                        //     foreach ($listbill as $bill) {
                                        //         extract($bill);
                                        //         $ttdh=get_ttdh($bill['bill_status']);
                                        //         $countsp=loadall_cart_count($bill['id']);
                                        //         $name_pttt = load_ten_pttt($bill['idpttt']);
                                        //         $nam_ptvc = load_ten_ptvc($bill['idptvc']);
                                        //       echo'  <tr> 
                                        //         <td>Majestic-'.$bill['id'].'</td>
                                        //         <td>'.$bill['ngaydathang'].'</td>
                                        //         <td>'.$countsp.'</td>
                                        //         <td>'.$name_pttt.'</td>
                                        //         <td>'.$nam_ptvc.'</td>
                                        //         <td>'.$bill['total'].'</td>
                                        //         <td>'.$ttdh.'</td>
                                        //         </tr>';
                                        //     }
                                        // }
                                        ?>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <!-- /step -->

                            <!-- /products_carousel -->
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                
                <!-- /container -->
            </div>
            <!-- /track_order -->



            <!-- /bg_white -->
        </main>
    </div>

</body>