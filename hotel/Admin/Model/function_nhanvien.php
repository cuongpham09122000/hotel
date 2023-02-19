<?php
        //Xây dựng các hàm thêm, sửa, xóa, tìm kiếm => Khoa
        include 'function_dichvu.php';
        function Insert_Nhanvien($manv,$tennv,$anhnv,$ngaysinh,$diachi,$cccd,$sdt,$email,$chucvu,$luongnv,$madv)
        {
            $conn=Connect();
            $sql="Insert into qlks_nhanvien values('".$manv."','".$tennv."','".$anhnv."','".$ngaysinh."','".$diachi."','".$cccd."','".$sdt."','".$email."','".$chucvu."','".$luongnv."','".$madv."')";
            return $conn->query($sql);
            $conn->close();
        }

        function Hienthi_Nhanvien($sql)
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

        

        function Del_Nhanvien($key)
        {
            $conn=Connect();
            $sql="Delete from qlks_nhanvien where ma_nhanvien='".$key."'";
            return $conn->query($sql);
            $conn->close();
        }

        function Update_Nhanvien($tennv,$anhnv,$ngaysinh,$diachi,$cccd,$sdt,$email,$chucvu,$luongnv,$madv,$key)
        {
            $conn=Connect();
            $sql="Update qlks_nhanvien set ten_nhanvien='".$tennv."', anh_nhanvien='".$anhnv."', ngaysinh='".$ngaysinh."', diachi='".$diachi."', CCCD='".$cccd."', sdt='".$sdt."',email='".$email."',chucvu='".$chucvu."',luong_nhanvien='".$luongnv."',ma_dichvu='".$madv."' where ma_nhanvien='".$key."'";
            return $conn->query($sql);
            $conn->close();
        }
    ?>