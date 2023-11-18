<?php
function insert_taikhoan($user,$pass,$email){
    $sql="insert into taikhoan(user,pass,email)values ('$user','$pass','$email')";
    pdo_execute($sql);
}
function checkuser($user,$pass){
    $sql="select * from taikhoan where user='".$user."'";
    $sp=pdo_query_one($sql);
    return $sp;
}
function update_taikhoan($id_tk,$user,$pass,$email,$diachi,$tel){
    $sql="update taikhoan set  user='".$user."',pass='".$pass."',diachi='".$diachi."' ,tel='".$tel."'where id_tk=".$id_tk;
    pdo_execute($sql);
}
function checkemail($email){
    $sql="select * from taikhoan where email='".$email."'";
    $sp=pdo_query_one($sql);
    return $sp;
}
 ?>