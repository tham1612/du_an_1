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
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="../css/account.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="../css/custom.css" rel="stylesheet">

</head>
<style>
    .anh {
        width: 80px;
    }
</style>

<body>
    <div id="pape">
        <main class="bg_gray">

            <div class="track_order">


                <div class="container margin_60_35">

                    <?php
                    foreach($bill as $bill):

                        if($trangthai == 0) {
                            $t = "đăt hàng thành công";
                        } elseif($trangthai == 1) {
                            $t = "Đang vận chuyển";
                        } elseif($trangthai == 2) {
                            $t = "đã giao";
                        }

                        ?>
                        <div class="main_title">
                            <h2>CHI TIẾT ĐƠN HÀNG</h2>

                        </div>
                        <!-- Bước 2: Thanh toán và vận chuyển -->
                        <div class="step last">
                            <h3>Đơn hàng của bạn</h3>
                            <div class="box_general summary">
                                <table style="border: 1px solid black; border-collapse: collapse;">
                                    <tr>
                                        <th>Tên sản phẩm</th>
                                        <th>img</th>
                                        <th>số lượng</th>
                                        <th>Giá</th>
                                        <th>Trang thai</th>

                                        <th></th>
                                    </tr>
                              
                                    <tr>
                                        <td>
                                            <?= $tensp ?>
                                        </td>
                                        <td>
                                            <?= $img ?>
                                        </td>
                                        <td>
                                            <?= $soluong ?>
                                        </td>
                                        <td>
                                            <?= $dongia ?>
                                        </td>
                                        <td>
                                            <?= $t ?>
                                        </td>

                                        <td><input type="submit" class="bt" name="chitiet" value="xem chi tiet"></td>
                                        <input type="hidden" name="id" value=<?= $id ?>>
                                    </tr>

                                
                                </table>
                            </div>
                        </div>
                        <!-- /step -->

                        <!-- /products_carousel -->
                    <?php endforeach; ?>

                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </main>
    </div>
</body>