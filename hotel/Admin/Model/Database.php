<?php
    function Connect()
    {
        $host="localhost";
        $user="root";
        $pass="";
        $dbname="ql_khachsan";
        $con=new mysqli($host,$user,$pass,$dbname);
        if($con->connect_error)
        {
            echo "Lỗi kết nối";
        }
        else
        {
            return $con;
        }
    }
?>