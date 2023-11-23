<div class="page-wrapper">
    <div class="row">
        <div class="card-body">
            <?php
     
         /* 
            $total_records =loadone_sanpham($id_pr) ;
            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
            $limit = 10;
            $total_page = ceil( $total_records/ $limit);
            if ($current_page > $total_page) {
                $current_page = $total_page;
            } else if ($current_page < 1) {
                $current_page = 1;
            }
            $start = ($current_page - 1) * $limit;
            $result = ( "SELECT * FROM sanpham LIMIT $start, $limit"); */
            ?>
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
                foreach ($listsanpham as $sanpham) {
                    extract($sanpham);
                    $suasp = "index.php?act=suasp&id_pr=" . $id_pr;
                    $xoasp = "index.php?act=xoasp&id_pr=" . $id_pr;
                    $hinhpath = "../upload/" . $img;
                    if (is_file($hinhpath)) {
                        $hinh = "<img src='" . $hinhpath . "'height=80'>";

                    } else {
                        $hinh = "no photo";
                    }
                    # code...
                    echo '<tr>
                <td> <input type="checkbox" name="" id=""></td>
                <td>' . $id_pr . '</td>
                <td>' . $name . ' </td>
                <td>' . $hinh . ' </td>
                <td>' . $price . ' </td>
                <td>' . $mota . ' </td>
                <td>' . $luotxem . ' </td>
                <td><a href="' . $suasp . ' "><input type="button" value="sửa"></a> ,<a href="' . $xoasp . ' " ><input type="button" value="xóa" ></a></td>
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

            <div class="paginnation">
                <?php
               /*  if ($current_page > 1 && $total_page > 1) {
                    echo '<a href="list.php?page=' . ($current_page - 1) . '">Prev</a> | ';
                }
                for ($i = 1; $i <= $total_page; $i++) {
                    // Nếu là trang hiện tại thì hiển thị thẻ span
                    // ngược lại hiển thị thẻ a
                    if ($i == $current_page) {
                        echo '<span>' . $i . '</span> | ';
                    } else {
                        echo '<a href="list.php?page=' . $i . '">' . $i . '</a> | ';
                    }
                }

                // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
                if ($current_page < $total_page && $total_page > 1) {
                    echo '<a href="list.php?page=' . ($current_page + 1) . '">Next</a> | ';
                } */
                ?>
            </div>




        </div>



    </div>
</div>