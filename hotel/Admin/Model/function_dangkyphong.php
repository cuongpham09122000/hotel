<?php
        //Xây dựng các hàm thêm, sửa, xóa, tìm kiếm => Khoa
        include 'function_phong.php';
        function Insert_DKphong($madp,$tenkh,$loaiphong,$ngaydk,$ngaynp,$ngaytp,$slphong,$cccd,$ngaysinh,$sdt,$email,$gioitinh,$diachi)
        {
            $conn=Connect();
            $sql="Insert into qlks_phieuxacnhandatphong values('".$madp."','".$tenkh."','".$loaiphong."','".$ngaydk."','".$ngaynp."','".$ngaytp."','".$slphong."','".$cccd."','".$ngaysinh."','".$sdt."','".$email."','".$gioitinh."','".$diachi."')";
            return $conn->query($sql);
            $conn->close();
        }

        function Hienthi_DKphong($sql)
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

        function Del_DKphong($key)
        {
            $conn=Connect();
            $sql="Delete from qlks_phieuxacnhandatphong where ma_datphong='".$key."'";
            return $conn->query($sql);
            $conn->close();
        }

        function Update_DKphong($tenkh,$loaiphong,$ngaydk,$ngaynp,$ngaytp,$slphong,$cccd,$ngaysinh,$sdt,$email,$gioitinh,$diachi,$key)
        {
            $conn=Connect();
            $sql="Update qlks_phieuxacnhandatphong set hoten_khachhang='".$tenkh."', loaiphong='".$loaiphong."',ngay_dk='".$ngaydk."',ngay_nhanphong='".$ngaynp."',ngay_traphong='".$ngaytp."',soluong_phong='".$slphong."',CCCD='".$cccd."', ngaysinh='".$ngaysinh."', sdt='".$sdt."', email='".$email."', gioitinh='".$gioitinh."', diachi='".$diachi."' where ma_datphong='".$key."'";
            return $conn->query($sql);
            $conn->close();
        }

    ?>
