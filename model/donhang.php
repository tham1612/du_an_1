<?php
function taodonhang($madh, $tong, $pttt, $userID, $name, $email, $diachi, $tel) {

  $sql = "insert into donhang(madh,tongdonhang ,pthuctt,id_tk,name,email,diachi,tel) 
    values('$madh','$tong',' $pttt',' $userID',' $name',' $email','$diachi',' $tel')";
    pdo_execute($sql);
  
}
function iddh(){
  $sql ="SELECT donhang.id_dh FROM donhang ";
  $result = pdo_query($sql);
  return $result;
}
function addtocart($iddh, $id_pr, $tensp, $img, $gia, $sl) {
  $sql = "insert into carts (id_dh,id_pr,tensp,img,dongia,soluong)
values('$iddh','$id_pr',' $tensp',' $img',' $gia',' $sl')";
  pdo_execute($sql);
}