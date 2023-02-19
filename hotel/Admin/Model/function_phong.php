<?php
        //Xây dựng các hàm thêm, sửa, xóa, tìm kiếm => Khoa
        include 'function_nhanvien.php';
        function Insert_Phong($maph,$tenph,$anhphong,$loaiph,$ttphong,$giaphong,$manv)
        {
            $conn=Connect();
            $sql="Insert into qlks_phong values('".$maph."','".$tenph."','".$anhphong."','".$loaiph."','".$ttphong."','".$giaphong."','".$manv."')";
            return $conn->query($sql);
            $conn->close();
        }

        function Hienthi_Phong($sql)
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

        

        function Del_Phong($key)
        {
            $conn=Connect();
            $sql="Delete from qlks_phong where ma_phong='".$key."'";
            return $conn->query($sql);
            $conn->close();
        }

        function Update_Phong($tenph,$anhphong,$loaiph,$ttphong,$giaphong,$manv,$key)
        {
            $conn=Connect();
            $sql="Update qlks_phong set ten_phong='".$tenph."', anh_phong='".$anhphong."', loai_phong='".$loaiph."', trangthai_phong='".$ttphong."', giaphong='".$giaphong."', ma_nhanvien='".$manv."' where ma_phong='".$key."'";
            return $conn->query($sql);
            $conn->close();
        }
    ?>