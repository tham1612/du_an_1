<div class="row2">
    <div class="row2 font_titel">
        <h1>THỐNG KÊ SẢN PHẨM TRONG DANH MỤC</h1>
    </div>
     <div class="row2 from_content">
        <form action="#" method="POST">
        <div class="row2 mb10 formds_loai">
            <table>
                <tr>
                    <th>MÃ Loại</th>
                    <th>Tên Loại</th>
                    <th>Số lượng</th>
                    <th>Giá nhỏ nhất</th>
                    <th>Giá lớn nhất</th>
                    <th>Giá trung bình</th>
                </tr>
                <?php
                foreach($dsthongke as $thongke){
                    extract($thongke);
            
                ?>
                <tr>
                    <td><?php echo $id ?></td>
                    <td><?php echo $namedm ?></td>
                    <td><?php echo $soluong ?></td>
                    <td><?php echo $gia_min ?></td>
                    <td><?php echo $gia_max ?></td>
                    <td><?php echo number_format($gia_avg, 2) ?></td>
                </tr>              
                <?php
                  }
                ?>
              </table>
                </div>
                <div class="row mb10"> 
                    <a href="?act=bieudo"> <input class="mr20" type="button" value="Xem biểu đồ"></a>

                </div>
                </form>
</div>
   </div>
           
     
