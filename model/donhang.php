<?php


function taodonhang($madh, $tong, $pttt, $userID, $name, $email, $diachi, $tel) {
  $conn = pdo_get_connection();
  $sql = "INSERT INTO donhang(madh, tongdonhang, pthuctt, id_tk, name, email, diachi, tel) 
          VALUES (:madh, :tong, :pttt, :userID, :name, :email, :diachi, :tel)";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':madh', $madh);
  $stmt->bindParam(':tong', $tong);
  $stmt->bindParam(':pttt', $pttt); // Chú ý sửa tên tham số này thành :pttt
  $stmt->bindParam(':userID', $userID);
  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':diachi', $diachi);
  $stmt->bindParam(':tel', $tel);

  $stmt->execute();
  $last_id = $conn->lastInsertId();
  return $last_id;
}

function iddh() {
  $sql = "SELECT donhang.id_dh FROM donhang ";
  $result = pdo_query($sql);
  return $result;
}
function addtocart($iddh, $id_pr, $tensp, $img, $gia, $sl) {
  $sql = "insert into carts (id_dh,id_pr,tensp,img,dongia,soluong)
values('$iddh','$id_pr',' $tensp',' $img',' $gia',' $sl')";
  pdo_execute($sql);
}
function showcart($iddh){
  $sql="select * from carts where id_dh='".$iddh."'";
  $sp=pdo_query_one($sql);
  return $sp;

}
function showtt($iddh){
  $sql="select * from donhang where id_dh='".$iddh."'";
  $sp=pdo_query_one($sql);
  return $sp;
     
}