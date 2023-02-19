<?php
        //Xây dựng các hàm thêm, sửa, xóa, tìm kiếm => Khoa
        include 'Database.php';
        function Insert_Dichvu($madv,$anhdv,$tendv,$giadv,$ghichudv)
        {
            $conn=Connect();
            $sql="Insert into qlks_dichvu values('".$madv."','".$anhdv."','".$tendv."','".$giadv."','".$ghichudv."')";
            return $conn->query($sql);
            $conn->close();
        }

        function Hienthi_Dichvu($sql)
        {
            $conn=Connect();
            $result=$conn->query($sql);
            if($result)
            {
                while($row=$result->fetch_assoc())
                {
                    $data[]=$row;
                }
            }
            return $data;//mảng
            $conn->close();
        }

        

        function Del_Dichvu($key)
        {
            $conn=Connect();
            $sql="Delete from qlks_dichvu where ma_dichvu='".$key."'";
            return $conn->query($sql);
            $conn->close();
        }

        function Update_Dichvu($anhdv,$tendv,$giadv,$ghichudv,$key)
        {
            $conn=Connect();
            $sql="Update qlks_dichvu set anh_dichvu='".$anhdv."', ten_dichvu='".$tendv."', gia_dichvu='".$giadv."', ghichu_dichvu='".$ghichudv."' where ma_dichvu='".$key."'";
            return $conn->query($sql);
            $conn->close();
        }
    ?>