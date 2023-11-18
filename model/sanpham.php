<?php
function insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm){
    $sql="insert into sanpham(name,price,img,mota,iddm) values('$tensp','$giasp','$hinh','$mota','$iddm')";
    pdo_execute($sql);
}
function loadall_sanpham(  $kyw="",$iddm=0){
    $sql="select * from sanpham where 1 ";
     if($kyw!=""){
        $sql.=" and name like '%".$kyw."%'";
     }
     if($iddm>0){
        $sql.=" and iddm='".$iddm."'";
     }
    $sql.= " order by id_pr desc";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}


function loadall_sanpham_home(){
    $sql="select * from sanpham where 1  order by id_pr desc limit 0,8 ";

  
    $listsanpham=pdo_query($sql);
    return $listsanpham;

}
function delete_sanpham($id_pr){
    $sql="delete from sanpham where id_pr=".$id_pr;
    pdo_execute($sql);
}
function loadone_sanpham($id_pr){
    $sql="select * from sanpham where id_pr=".$id_pr;
  
    $sp=pdo_query_one($sql);
    return $sp;
}
function loadall_sanpham_home_top10(){
    $sql="select *from sanpham where 1 order by luotxem desc limit 0,10 ";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadone_ten_dm($iddm){
    if($iddm>0){
        $sql="select * from danhmuc where id=".$iddm;
        $dm=pdo_query_one($sql);
        extract($dm);
        return $dm;
    }else{
        return"";
    }
}
function load_sanpham_cungloai($id_pr,$iddm){
    $sql="select * from sanpham where iddm=".$iddm." AND id_pr <>".$id_pr;
    $listsanpham=pdo_query($sql);
    return $listsanpham;

}

function  update_sanpham($id_pr,$iddm,$tensp,$giasp,$mota,$hinh){
    if($hinh!="")
        $sql="update sanpham set iddm='".$iddm."', name='".$tensp."',price='".$giasp."',mota='".$mota."',hinh='".$hinh."'where id_pr=".$id_pr;
    else
        $sql="update sanpham set iddm='".$iddm."', name='".$tensp."',price='".$giasp."',mota='".$mota."'where id_pr=".$id_pr;
    pdo_execute($sql);
}
 ?>