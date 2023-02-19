
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Danh sách nhân viên</title>
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
    <link rel="stylesheet" href="../style/list.css">
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
                <!-- <li class="nav-item d-none d-sm-inline-block"> -->
                    <!-- <a href="#" class="nav-link">Contact</a>
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
                                    <a href="../phong/add_phong.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thêm</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../phong/list_phong.php" class="nav-link">
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
                                    <a href="./add_nhanvien.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thêm</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./list_nhanvien.php" class="nav-link">
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
    <section>
    <div id="form_phong" style="float: right; width:80%;">
    <h4>DANH SÁCH NHÂN VIÊN</h4>
    <form action="" method="POST" name="">
       <input type="text" name="key"> <input type="submit" name="btsearch" value="search">
    </form>
    <br>
    <table>
        <tr>
            <th rowspan="2">STT</th>
            <th rowspan="2">Mã nhân viên</th>
            <th rowspan="2">Tên nhân viên</th>
            <th rowspan="2">Ảnh</th>
            <th rowspan="2">Ngày sinh</th>
            <th rowspan="2">Địa chỉ</th>
            <th rowspan="2">CCCD</th>
            <th rowspan="2">Số điện thoại</th>
            <th rowspan="2">email</th>
            <th rowspan="2">Chức vụ </th>
            <th rowspan="2">Lương </th>
            <th rowspan="2">Mã dịch vụ</th>
            <th colspan="2">Action</th>
        </tr>
        <tr>
            <th class="addnew" colspan="2"><a href="add_nhanvien.php">Add New</a></th>
        </tr>

        <?php 
        include '../../../Model/function_nhanvien.php';
            if(isset($_POST['btsearch']))
            {
                $manv=$_POST['key'];
                $sql="select * from qlks_nhanvien where ma_nhanvien='".$manv."'";
            }
            if(empty($_POST['key']))
            {
                $sql="select * from qlks_nhanvien";
            }

            $data=Hienthi_Nhanvien($sql);
            $i=1;
            foreach ($data as $value){
                $key=$value['ma_nhanvien'];
                echo " <tr>
                <td>".$i++."</td>
                <td>".$value['ma_nhanvien']."</td>
                <td>".$value['ten_nhanvien']."</td>
                <td><img width='150px' height='120px' src='../uploads/".$value['anh_nhanvien']."'></td>
                <td>".$value['ngaysinh']."</td>               
                <td>".$value['diachi']."</td>
                <td>".$value['CCCD']."</td>
                <td>".$value['sdt']."</td>
                <td>".$value['email']."</td>
                <td>".$value['chucvu']."</td>
                <td>".$value['luong_nhanvien']."</td>
                <td>".$value['ma_dichvu']."</td>
                <td class='edit'><a href='edit_nhanvien.php?ma_nhanvien=$key'> edit</a></td>
                <td class='del'><a href='del_nhanvien.php?ma_nhanvien=$key'> delete</a></td>
            </tr>";
            }
            ?>


        </table>
        <br>
        </div>       
    </section>
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

<!-- end footer -->
