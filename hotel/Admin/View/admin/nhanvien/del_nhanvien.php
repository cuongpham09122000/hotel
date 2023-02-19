<?php
$key=$_REQUEST['ma_nhanvien'];
include '../../../Model/function_nhanvien.php';
$result=Del_Nhanvien($key);
if($result)
{
    header('location:list_nhanvien.php');
}
else{
    echo 'lỗi xóa';
}
?>