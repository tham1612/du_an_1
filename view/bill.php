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

            <div class="container margin_30">
                <div class="page_header">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Category</a></li>
                            <li>Page active</li>
                        </ul>
                    </div>
                    <h1>HÓA ĐƠN MUA HÀNG</h1>
                </div>
                <!-- /page_header -->
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-6 col-md-8">
                        <div class="box_account">
                            <h3 class="client">Đơn hàng</h3>
                           
                                <table class="table table-striped cart-list">
                                    <thead>
                                        <tr>
                                            <th>
                                                Product
                                            </th>
                                            <th>
                                                Name
                                            </th>
                                            <th>
                                                Price
                                            </th>
                                            <th>
                                                Quantity
                                            </th>

                                            <th>

                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 0;
                                        if(isset($_SESSION['user'])) {
                                            $userID = $_SESSION['user']['id_tk'];
                                            $key = "giohang-$userID";
                                            $tong = 0;
                                            if(!empty($_SESSION[$key])) {
                                                foreach($_SESSION[$key] as $arr) {
                                                    $tong += $arr['tt'];
                                                    $linksp = "index.php?act=sanphamct&idsp=";
                                                    echo '<tr>
                                        <td>
                                            <div class="">
                                            <a href="'.$linksp.'"><img src=" '.$arr['hinh'].'" class="anh" alt="Image" ></a>
                                            </div>
                                            
                                        </td>
                                        <td>
                                        <strong>'.$arr['tensp'].'</strong>
                                    </td>
                                        <td>
                                            <strong>'.$arr['giasp'].'</strong>
                                        </td>
                                        <td>
                                    
                                             
                                               <strong>'.$arr['sl'].'</strong>
                                            
                                
                                        
                                        
                                        </td>
                                       
                                       
                                        
                                    </tr>';
                                                    $i++;
                                                }
                                            }
                                        }
                                        ?>

                                    </tbody>
                                </table>
                                <!-- /form_container -->
                           
                        </div>
                        <!-- /box_account -->

                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-8">
                        <div class="box_account">
                            <h3 class="new_client">Thông tin và địa chỉ người nhận </h3> <small class="float-right pt-2">
                               </small>
                           
                                <div class="box_general summary">

                                    <?php
                                    $i = 0;
                                    $tong = 0; /*  */
                                    if(isset($_SESSION['user'])) {
                                        $userID = $_SESSION['user']['id_tk'];
                                        $key = "giohang-$userID";
                                        if(!empty(  $_SESSION[ $userID][$iddh])) {
                                            foreach(  $_SESSION[ $userID][$idhd] as $arr) {                    
                                               echo '  <ul>                               
                                                    <li class="clearfix"><em><strong>Tên người nhận:</strong></em> <span>'.$arr['name'].'</span></li>     
                                                    <li class="clearfix"><em><strong>Email:</strong></em> <span>'.$arr['email'].'</span></li> 
                                                    <li class="clearfix"><em><strong>Dịa chỉ:</strong></em> <span>'.$arr['diachi'].'</span></li> 
                                                    <li class="clearfix"><em><strong>Số điện thoại:</strong></em> <span>'.$arr['tel'].'</span></li> 
                                                    <li class="clearfix"><em><strong>Phương thức thanh toán:</strong></em> <span>'.$arr['pttt'].'</span></li>  
                                                    <li class="clearfix"><em><strong>Tổng đơn hàng:</strong></em> <span>'.$arr['tong'].'</span></li>  
                                                    
                                                    </ul> ';
                                            }
                                        }

                                    }
                                    ?>

    
                                  
                                    <div class="total clearfix">Mã đơn hàng: <span>
                                            <?php echo $tong ?>
                                        </span></div><small class="float-right pt-2">Để check trạng thái đơn hàng bằng cách tìm kiếm mã đơn hàng
                               </small>
                                 

                                    <a href="index.php" class="btn_1 full-width"><input type="submit"
                                            value="Tiếp tục mua hàng" name="thanhtoan"></a>
                                </div>
                                <!-- /form_container -->
                          
                        </div>
                        <!-- /box_account -->
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </main>
    </div>
</body>