<div class="page-wrapper">
    <div class="row">
        <div class="card-body">

            <h1 class="card-title">Danh Sách và trạng thái đơn hàng</h1>

            <table>
                <tr>
                    <th></th>
                    <th>MÃ ĐƠN HÀNG</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>HÌNH</th>
                    <th>GIÁ </th>
                    <th>SỐ LƯỢNG</th>
                    <th>TRẠNG THÁI</th>
                    <th>CẬP NHẬT TT</th>
                    <th></th>
                </tr>
                <?php
                foreach( $result_carts as $sanpham) {
                    extract($sanpham);
                    $suatt = "index.php?act=suacart&id=".$id_cart;
                /*     $hinhpath = "../upload//".$img;
                    if(is_file($hinhpath)) {
                        $hinh = "<img src='".$hinhpath."'height=80'>";

                    } else {
                        $hinh = "no photo";
                    } */
                    # code...
                    echo '<tr>
                <td> <input type="checkbox" name="" id=""></td>
                <td>'.$madh.'</td>
                <td>'.$tensp.' </td>
                <td>'.$img.' </td>
                <td>'.$dongia.' </td>
                <td>'.$soluong.' </td>
                <td>'.$trangthai.' </td>
                <td><a href="'.$suatt.' "><input type="button" value="sửa"></a>
                 </tr>';
                }
                ?>


                <div class="border-top">
                    <div class="card-body">
                        <input type="button" value="CHỌN TẤT CẢ " class="btn btn-primary">
                        <input type="button" value="BỎ CHỌN TẤT CẢ " class="btn btn-primary">
                        <input type="button" value="XÓA CÁC MỤC ĐÃ CHỌN  " class="btn btn-primary">
                        <a href="index.php?act=addsp"><input type="button" value="NHẬP THÊM "
                                class="btn btn-primary"></a>
                    </div>
                </div>



            </table>
            <?php

            ?>

            <div class="phantrang">
                <?php
                $limit = 10;
                $all_row = alll_row_carts();
                foreach($all_row as $row_page):
                    $all_page = ceil($row_page[0] / $limit);
                    for($i = 1; $i < $all_page; $i++): ?>
                        <a href="index.php?act=listsp&page=<?php echo $i ?>" style="background-color: <?php if($_GET['page'] == $i) {  echo 'red';} ?>">
                            <?php echo $i ?>
                        </a>
                    <?php endfor ?>
                <?php endforeach ?>
            </div>




        </div>



    </div>
</div>
<style>
    .phantrang>a {
        width: 50px;
        height: 20px;
        padding: 5px 15px 5px 5px;
        background-color: black;
        color: white;
    }

    .phantrang {
        margin-left: 400px;
        margin-top: 100px;
    }
</style>