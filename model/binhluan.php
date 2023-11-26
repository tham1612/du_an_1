<?php
function insert_binhluan($noidung, $idpro)
{
    $noidung = $_POST['noidung'];
    $idpro = $_POST['idpro'];
    $iduser = $_SESSION['user']['id_tk'];
    $ngaybinhluan = date('h:i:sa d/m/Y');
    $sql = "insert into binhluan (noidung,iduser,idpro,ngaybinhluan) values('$noidung','$iduser','$idpro','$ngaybinhluan')";
    pdo_execute($sql);
}
function loadall_binhluan($idpro)
{
    /*  $sql = " SELECT binhluan.id_bl, binhluan.noidung, taikhoan.user, binhluan.ngaybinhluan, sanpham.name FROM `binhluan` 
         LEFT JOIN taikhoan ON binhluan.iduser = taikhoan.id_tk
         LEFT JOIN sanpham ON binhluan.idpro = sanpham.id_pr
         WHERE  sanpham.id_pr = $idpro";     
         $sql .= " GROUP BY binhluan.id_bl
                 ORDER BY binhluan.id_bl DESC"; */
    $sql = "SELECT binhluan.id_bl, binhluan.noidung, taikhoan.user, binhluan.ngaybinhluan, sanpham.name FROM `binhluan` 
                LEFT JOIN taikhoan ON binhluan.iduser = taikhoan.id_tk 
                LEFT JOIN sanpham ON binhluan.idpro = sanpham.id_pr 
                WHERE sanpham.id_pr =$idpro 
                GROUP BY binhluan.id_bl";


    $listbinhluan = pdo_query($sql);
    return $listbinhluan;
}