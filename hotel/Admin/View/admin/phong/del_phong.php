<?php
$key=$_REQUEST['ma_phong'];
include '../../../Model/function_phong.php';
$result=Del_Phong($key);
if($result)
{
    header('location:list_phong.php');
}
else{
    echo 'lỗi xóa';
}
?>