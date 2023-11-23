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
        .col-md-6 img {
            height: auto;
            width: 100%;
        }
    </style>
</head>

<body>
   
    <div class="container margin_60_35">
        <div class="main_title">
            <h2><?= $namedm; ?>
                
            </h2>
            <span>Products</span>
            <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
        </div>
        <div class="owl-carousel owl-theme products_carousel">
            <?php
           
              foreach ($dssp as $sp) {
                extract($sp);
                
                $linksp = "index.php?act=sanpham&idsp=" . $id_pr;
                $hinh = $img_spsppath . $img;
                echo ' <div class="item">
                                    <div class="grid_item">
                                        <span class="ribbon new">New</span>
                                        <figure>
                                            <a href="' . $linksp . '">
                                            <img class="owl-lazy" data-src="' . $hinh . '" >
                                            </a>
                                        </figure>
                                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                                class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                                        <a href="' . $linksp . '">
                                            <h3>' . $name . '</h3>
                                        </a>
                                        <div class="price_box">
                                            <span class="new_price">' . $price . '</span>
                                        </div>
                                        <ul>
                                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a>
                                            </li>
                                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                                        </ul>
                                    </div>
                                    <!-- /grid_item -->
                          </div>';
            }
            ?>
            <!-- /item -->


            <!-- /products_carousel -->
        </div>
        <!-- /container -->
</body>