
<?php
ob_start();
?>
<!DOCTYPE html> 
<html>

<head>
    <title>Cập nhật phòng</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../../Public/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="../../../Public/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../../../Public/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../../../Public/admin/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../../Public/admin/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../../../Public/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../../../Public/admin/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../../../Public/admin/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="../style/add.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Home</a>
                </li>
                <!-- <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li> -->
            </ul>

            <!-- SEARCH FORM -->
            <!-- <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form> -->

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../../../Public/admin/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                    Phạm Văn Cường
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                                    <p class="text-sm">Hãy liên hệ với tôi</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 giờ trước</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../../../Public/admin/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                    Phạm Trung Kiên
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                                    <p class="text-sm">Hãy nhớ trả lời tin nhắn của tôi nhé....</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 2 giờ trước</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../../../Public/admin/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                    Phạm Văn Mạnh
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                                    <p class="text-sm">Tôi có việc cần bạn giúp đỡ</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 1 giờ trước</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">Xem tất cả tin nhắn</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 thông báo</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 tin nhắn mới
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 người bạn hoạt động
                            <span class="float-right text-muted text-sm">12 giờ</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 báo cáo mới
                            <span class="float-right text-muted text-sm">2 ngày</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">Xem tất cả thông báo</a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <!-- <a href="index3.html" class="brand-link">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2YesjBHniPkpLA8-Mn4thijhs1Bkd21aKCRj0or-XjNyxCCbhii9n7iwKitns3EYvGVc&usqp=CAU" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Admin</span>
            </a> -->

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../uploads/nhanvien_pvc.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="../logout.php" class="d-block"><?php ?>Phạm Văn Cường</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview">
                            <a href="index.php" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Trang chủ
                                </p>
                            </a>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Hóa đơn
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right">2</span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thêm</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Quản lý phòng
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right">2</span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./add_phong.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thêm</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./list_phong.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Quản lý đặt phòng
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right">2</span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                              
                                <li class="nav-item">
                                    <a href="../dangkyphong/hienthi.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Quản lý nhân viên
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right">2</span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../nhanvien/add_nhanvien.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thêm</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../nhanvien/list_nhanvien.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Quản lý khách hàng
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right">2</span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thêm</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Quản lý dịch vụ
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right">2</span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../dichvu/add_dichvu.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thêm</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../dichvu/list_dichvu.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

		<!-- end header  -->
    
    <?php
    require '../../../Model/function_phong.php';
    $key=$_REQUEST['ma_phong'];
    $sql="select * from qlks_phong where ma_phong='".$key."'";
    $data= Hienthi_Phong($sql);
    foreach($data as $value){
    ?>
    <section>
    <center>
        <h1>
            NHẬP THÔNG TIN PHÒNG CẦN SỬA
        </h1>
        <form action="" method="POST" name="">
            <table width="60%" height="250">
                <tr>
                    <td>Mã phòng</td>
                    <td><input type="text" name="txtmaph" size="60" placeholder="nhập mã phòng...."
                    value="<?php echo $value['ma_phong'];?>" ></td>
                </tr>
                <tr>
                    <td>Tên phòng</td>
                    <td><input type="text" name="txttenph" size="60" placeholder="nhập tên phòng...."
                    value="<?php echo $value['ten_phong'];?>"></td>
                </tr>
                <tr>
                    <td>Ảnh phòng</td>
                    <td><input type="file" name="txtanhph" size="60" 
                    value="<?php echo $value['anh_phong'];?>"></td>
                </tr>
                <tr>
                    <td>Loại phòng</td>
                    <td><input type="text" name="txtloaiphong" size="60" placeholder="Nhập loại phòng"
                    value="<?php echo $value['loai_phong'];?>"></td>
                </tr>
                <tr>
                    <td>Trạng thái phòng</td>
                    <td><input type="text" name="txtttphong" size="60" placeholder="Nhập trạng thái phòng...."
                    value="<?php echo $value['trangthai_phong'];?>"></td>
                </tr>
                <tr>
                    <td>Giá phòng</td>
                    <td><input type="text" name="txtgiaphong" size="60" placeholder="Nhập giá phòng...."
                    value="<?php echo $value['giaphong'];?>"></td>
                </tr>
                <tr>
                    <?php
                $sql1="select ma_nhanvien from qlks_nhanvien";
                $data = Hienthi_Dichvu($sql1);
                ?>
                    <td>Mã nhân viên</td>
                    <td>
                        <select name="sl_manv">
                    <?php  
                    foreach ($data as $value){
                    ?>
                    <option value="<?php echo $value['ma_nhanvien'];?>"><?php echo $value['ma_nhanvien'];?></option>
                    <?php
                    }
                    ?>
                    </select>
                </tr>
                <tr>
                    <td colspan="2">&ensp;</td>
                </tr>
                <tr>
                    <td>&ensp;</td>
                    <td class="note"><input type="submit" name="btUpdate" value="ADD">
                &ensp;&ensp;&ensp;&ensp; <input type="reset" name="btreset" value="RESET"></td>
                </tr>
            </table>
        </form>
    </center>
    </section>
   <?php
    if(isset($_POST['btUpdate']))
    {
            $maph=$_POST['txtmaph'];
            $tenph=$_POST['txttenph'];
            $anhphong=$_POST['txtanhph'];
            $loaiph=$_POST['txtloaiphong'];
            $ttphong=$_POST['txtttphong'];
            $giaphong=$_POST['txtgiaphong'];
            $manv=$_POST['sl_manv'];

            $result=Update_Phong($tenph,$anhphong,$loaiph,$ttphong,$giaphong,$manv,$key);
            if($result)
            {
                header('Location:list_phong.php'); // điều hướng trang
            }
            else
            {
                echo "lỗi cập nhật";
            }
        }
    }
   ?>


<!-- start footer -->


<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>

<!-- jQuery -->
<script src="../../../Public/admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../../Public/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../../Public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../../Public/admin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../../../Public/admin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../../../Public/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../../Public/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../../Public/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../../Public/admin/plugins/moment/moment.min.js"></script>
<script src="../../../Public/admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../../Public/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../../Public/admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../../Public/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../../Public/admin/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../../Public/admin/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../../Public/admin/dist/js/demo.js"></script>
</body>
</html>
<?php
ob_end_flush();
?>

<!-- end footer -->
