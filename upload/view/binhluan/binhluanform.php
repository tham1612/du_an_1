<!DOCTYPE html>
<html lang="en">
<?php
include "../../model/pdo.php";
include "../../model/binhluan.php";
$idpro = $_REQUEST['idpro'];
session_start();
$iduser = $_SESSION['user']['id_tk'];
$dsbl = loadall_binhluan($idpro);
?>




<div class="row justify-content-between">
    <div class="col-lg-6">
        <?php
        foreach ($dsbl as $bl) {
            extract($bl);
            echo '<div class="review_content">
                                      
                                            <span class="rating"><i class="icon-star"></i><i class="icon-star"></i><i
                                                    class="icon-star"></i><i class="icon-star"></i><i
                                                    class="icon-star"></i><em>5.0/5.0</em></span>
                                            <em> ' . $ngaybinhluan . '</em>
                                        </div>
                                        <h4>"    ' . $user . '"</h4>
                                        <p>   ' . $noidung . '</p>
                                    </div>';
        }
        ?>
        <!-- <div class="review_content">
                                        <div class="clearfix add_bottom_10">
                                            <span class="rating"><i class="icon-star"></i><i class="icon-star"></i><i
                                                    class="icon-star"></i><i class="icon-star"></i><i
                                                    class="icon-star"></i><em>5.0/5.0</em></span>
                                            <em>Published 54 minutes ago</em>
                                        </div>
                                        <h4>"Commpletely satisfied"</h4>
                                        <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea.
                                            Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere
                                            fabulas has ut. Rebum laudem cum ea, ius essent fuisset
                                            ut. Viderer petentium cu his.</p>
                                    </div> -->
    </div>

</div>
<!-- /row -->
<?php if (isset($_SESSION['user'])) {
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="hidden" name="idpro" value="<?php echo $idpro ?>">
        <input type="text" placeholder="nhap noi dung binh luan " name="noidung">
        <input type="submit" name="guibinhluan" value="Gửi ">

    </form>
<?php } else { ?>

    <?php
    echo "<script>alert('vui lòng đăng nhập để binh luan')</script>";
    ?>

<?php } ?>

<?php
if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
$noidung = $_POST['noidung'];

$idpro = $_REQUEST['idpro'];
$iduser = $_SESSION['user']['id_tk'];
$ngaybinhluan = date('h:i:sa d/m/Y');
insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan);
header("location:" . $_SERVER['HTTP_REFERER']);
}
?>