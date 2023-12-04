<div class="page-wrapper">
    <div class="row">
        <div class="card-body">

            <h1 class="card-title">Danh Sách và thông tin người nhận hàng</h1>

            <table>
                <tr>
                    <th></th>
                    <th>TÊN TÀI KHOẢN</th>
                    <th>TÊN NGƯỜI NHẬN</th>
                    <th>MÃ ĐƠN HÀNG</th>
                    <th>TỔNG TIỀN </th>
                    <th>ĐỊA CHỈ</th>
                    <th>EMAIL</th>
                    <th> SỐ ĐIỆN THOẠI </th>
                    <th>PHƯƠNG THỨC TT</th>
                  
                    <th></th>
                </tr>
                <?php
                foreach( $result_donhang as $sanpham) {
                    extract($sanpham);
                   
                    echo '<tr>
                <td> <input type="checkbox" name="" id=""></td>
                <td>'.$user.'</td>
                <td>'.$name.' </td>
                <td>'.$madh.' </td>
                <td>'.$tongdonhang.' </td>
                <td>'.$diachi.' </td>
                <td>'.$email.' </td>
                <td>'.$tel.' </td>
                <td>'.$pthuctt.' </td>
            
                 </tr>';
                }
                ?>


                <div class="border-top">
                    <div class="card-body">
                        <input type="button" value="CHỌN TẤT CẢ " class="btn btn-primary">
                        <input type="button" value="BỎ CHỌN TẤT CẢ " class="btn btn-primary">
                        <input type="button" value="XÓA CÁC MỤC ĐÃ CHỌN  " class="btn btn-primary">
                       
                    </div>
                </div>



            </table>
            <?php

            ?>

            <div class="phantrang">
                <?php
                $limit = 15;
                $all_row = alll_row_donhang();
                foreach($all_row as $row_page):
                    $all_page = ceil($row_page[0] / $limit);
                    for($i = 1; $i < $all_page; $i++): ?>
                        <a href="index.php?act=listdh&page=<?php echo $i ?>" style="background-color: <?php if($_GET['page'] == $i) {  echo 'red';} ?>">
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