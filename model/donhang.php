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
function result_donhang($limit,$start){
 
  $sql="SELECT donhang.madh ,donhang.tongdonhang ,donhang.pthuctt,donhang.name ,donhang.email,donhang.diachi,donhang.tel, taikhoan.user from donhang LEFT JOIN taikhoan on donhang.id_tk=taikhoan.id_tk order by donhang.id_dh desc LIMIT $start,$limit;";
  $result = pdo_query($sql);
  return $result;
}
function alll_row_donhang(){
  $sql ="SELECT COUNT(donhang.id_dh) FROM donhang ";
  $result = pdo_query($sql);
  return $result;
}

function result_carts($limit,$start){
 
  $sql="SELECT carts.id_cart, carts.soluong, carts.dongia ,carts.tensp, carts.img ,carts.trangthai , donhang.madh 
  from carts left JOIN donhang on donhang.id_dh=carts.id_dh group by carts.id_cart 
  order by carts.id_cart desc LIMIT $start,$limit;";
  $result = pdo_query($sql);
  return $result;
}
function alll_row_carts(){
  $sql ="SELECT COUNT(carts.id_cart) FROM carts ";
  $result = pdo_query($sql);
  return $result;
}
function loadone_carts($id)
{
    $sql = "select *  from carts where id_cart=" . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}
/* function update_carts($id,$tt){
  
  $sql="update carts set trangthai='".$tt."' where id_cart=" .$id;
  pdo_execute($sql);
} */
function update_carts($id, $tt) {
  $conn = pdo_get_connection();
  $sql = "UPDATE carts SET trangthai = :tt WHERE id_cart = :id";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':tt', $tt);
  $stmt->bindParam(':id', $id);
  $stmt->execute();
}

function loadall_carts()
{
  
    $sql = "select * from carts order by id_cart desc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;

}

function loadall_trangthai($tt1=""){
  $sql="select * from donhang where 1 ";
   if($tt1!=""){
      $sql .= " and donhang.madh like '%" .$tt1. "%'";
   }
   
  $sql.= " GROUP BY donhang.id_dh
   order by donhang.id_dh desc";
  $listdonhang=pdo_query($sql);
  return $listdonhang;
}
function loadone_cart($tt1){
  $sql="select * from sanpham where madh=".$tt1;

  $sp=pdo_query_one($sql);
  return $sp;
}