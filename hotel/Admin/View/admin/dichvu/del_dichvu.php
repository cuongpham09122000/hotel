<?php
$key=$_REQUEST['ma_dichvu'];
include '../../../Model/function_dichvu.php';
$result=Del_Dichvu($key);
if($result)
{
    header('location:list_dichvu.php');
}
else{
    echo 'lỗi xóa';
}
?>