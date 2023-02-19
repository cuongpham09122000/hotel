<?php
$key=$_REQUEST['ma_datphong'];
include '../../../Model/function_dangkyphong.php';
$result=Del_DKphong($key);
if($result)
{
    header('location:hienthi.php');
}
else{
    echo 'lỗi xóa';
}
?>