<div class="page-wrapper">
    <div class="row">
        <div class="card-body">
            <h1 class="card-title">Danh Sách Tài Khoản </h1>
            <table>
                <tr>
                           <th></th>
                            <th>MÃ TK</th>
                            <th>TÊN DANG NHAP</th>
                            <th>MAT KHAU</th>
                            <th>EMAIL</th> 
                            <th>DIA CHI</th>
                            <th>DIEN THOAI</th>
                            <th>role</th>

                            <th></th>
                </tr>
                <?php
                foreach ($result_taikhoan as $taikhoan) {
                   extract($taikhoan);
                   
                    $xoatk="index.php?act=xoatk&id_tk=".$id_tk;
                    # code...
                    echo '<tr>
                    <td> <input type="checkbox" name="" id=""></td>
                    <td>'.$id_tk.'</td>
                    <td>'.$user.' </td>
                    <td>'.$pass.' </td>
                    <td>'.$email.' </td>
                    <td>'.$diachi.' </td>
                    <td>'.$tel.' </td>
                    <td>'.$role.' </td>
                   <td><a href="'.$xoatk.' "><input type="button" value="xóa"></a></td>
                     </tr>';
                }
                ?>
                <div class="border-top">
                    <div class="card-body">
                        <input type="button" value="CHỌN TẤT CẢ " class="btn btn-primary">
                        <input type="button" value="BỎ CHỌN TẤT CẢ " class="btn btn-primary">
                        <input type="button" value="XÓA CÁC MỤC ĐÃ CHỌN  " class="btn btn-primary">
                        <a href="index.php?act=adddm"><input type="button" value="NHẬP THÊM "
                                class="btn btn-primary"></a>
                    </div>
                </div>



            </table>


            <?php

?>

<div class="phantrang">
    <?php
    $limit = 4;
    $all_row = alll_row_taikhoan();
    foreach($all_row as $row_page):
        $all_page = ceil($row_page[0] / $limit);
        for($i = 1; $i < $all_page; $i++): ?>
            <a href="index.php?act=dskhp&page=<?php echo $i ?>" style="background-color: <?php if($_GET['page'] == $i) {  echo 'red';} ?>">
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

        </div>


        <!--  <div class="row frmtitle">
                <h1>DANH SÁCH LOẠI HÀNG </h1>
            </div>
            <div class="row frmcontent">
                <div class="row mb10 frmdsloai">
                    <table>
                        <tr>
                            <th></th>
                            <th>MÃ LOẠI</th>
                            <th>TÊN LOẠI</th>
                            <th></th>
                        </tr>
                        
                        
                    </table>

                </div>
                <div class="row mb10">
                    <input type="button" value="CHỌN TẤT CẢ ">
                    <input type="button" value="BỎ CHỌN TẤT CẢ ">
                    <input type="button" value="XÓA CÁC MỤC ĐÃ CHỌN  ">
                    <a href="index.php?act=adddm"><input type="button" value="NHẬP THÊM "></a>
                </div>


            </div> -->
    </div>
</div>