<div class="page-wrapper">
    <div class="row">
        <div class="card-body">

            <h1 class="card-title">Danh Sách Sản Phẩm </h1>

            <table>
                <tr>
                    <th></th>
                    <th>MÃ LOẠI</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>HÌNH</th>
                    <th>GIÁ </th>
                    <th>MO TA</th>
                    <th>LƯỢT XEM</th>
                    <th></th>
                </tr>
                <?php
                foreach($result_sanpham as $sanpham) {
                    extract($sanpham);
                    $suasp = "index.php?act=suasp&id_pr=".$id_pr;
                    $xoasp = "index.php?act=xoasp&id_pr=".$id_pr;
                    $hinhpath = "../upload/".$img;
                    if(is_file($hinhpath)) {
                        $hinh = "<img src='".$hinhpath."'height=80'>";

                    } else {
                        $hinh = "no photo";
                    }
                    # code...
                    echo '<tr>
                <td> <input type="checkbox" name="" id=""></td>
                <td>'.$id_pr.'</td>
                <td>'.$name.' </td>
                <td>'.$hinh.' </td>
                <td>'.$price.' </td>
                <td>'.$mota.' </td>
                <td>'.$luotxem.' </td>
                <td><a href="'.$suasp.' "><input type="button" value="sửa"></a> ,<a href="'.$xoasp.' " ><input type="button" value="xóa" ></a></td>
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
                $limit = 4;
                $all_row = alll_row_sanpham();
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
   .phantrang {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
}

.phantrang a {
    display: inline-block;
    padding: 8px 12px;
    margin: 0 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
    text-decoration: none;
    color: #333;
    background-color: #fff;
}

.phantrang a.active {
    background-color: red;
    color: #fff;
}
</style>