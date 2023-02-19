<?php
include './Admin/Model/Database.php';
$conn = Connect();
$dichvu = mysqli_query($conn, "select * from qlks_dichvu");
$phong = mysqli_query($conn, "select * from qlks_phong");
$nhanvien = mysqli_query($conn, "select * from qlks_nhanvien");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/Style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/54f0cb7e4a.js" crossorigin="anonymous"></script>
    <title>quản lý khách sạn</title>
</head>

<body>
    <header>
        <div class="container" >
            <ul class="nav">
                <li><a href="#">Trang chủ</a></li>
                <li><a href="#room">Phòng</a></li>
                <li><a href="#servicee">dịch vụ</a></li>
                <li><a href="#Staff">Nhân viên</a></li>
                <li><a href="#feedbackk">Phản hồi</a></li>
                <li><a href="#lienhe">Liên hệ</a></li>
            </ul>
        </div>
        <input type="checkbox">
        <!-- <div class="menu-icon">
            <div class="menu-line">

            </div>
        </div> -->
        <!-- <div class="menu-item">
            <li><a href="#">Trang chủ</a></li>
            <li><a href="#introduce">Về chúng tôi</a></li>
            <li><a href="">Hệ thống khách sạn</a></li>
            <li><a href="">Hình ảnh</a></li>
            <li><a href="">Tin tức</a></li>
            <li><a href="">Liên hệ</a></li>
        </div> -->
        <div class="header-text">
            <h1 > Không gian tốt, dịch vụ tốt</h1>
            <a href="datphong.php" target="page">Đặt phòng</a>
        </div>
    </header>
    <!-- Introduce -->
    <section id="introduce" class="about section-padding">
        <div class="container">
            <div class="row ">
                <div class="section-title"  >
                    <h2 data-title="Câu chuyện">Về chúng tôi</h2>
                </div>
            </div>
            <div class="row">
                <div class="about-item" data-aos="fade-right" data-aos-duration="1500">
                    <h3>Chào mừng bạn đến với khách sạn Nam Cường.....</h3>
                    <p>
                    Tọa lạc ngay cửa ngõ vào trung tâm Thành Phố Nam Định với giao thông thuận lợi, 
                    hội tụ nhiều nét văn hóa địa phương và các điểm du lịch nổi tiếng. Đội ngũ nhân viên chu đáo, 
                    thân thiện và chuyên nghiệp cho bạn cảm giác như đang ở chính ngôi nhà của mình.
                    Đây là những trải nghiệm tuyệt vời mà bạn cảm nhận về khách sạn Nam Cường Nam Định.</p>

                    <button class="btn">
                        XEM MENU
                    </button>
                </div>

                <div class="about-item" data-aos="fade-left" data-aos-duration="1500" >
                    <div class="about-item-img">
                        <span>Hơn 10 năm kinh nghiệm</span>
                        <img src="./images/NVKS1.jpg" alt="AnhNhanVien">
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </section>
    <!-- start Phòng -->
    <section id="room" class="service section-padding">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2 data-title="">Danh sách phòng</h2>
                </div>
            </div>
            <div class="row">
                <div class="menu-title">
                </div>
            </div>
            <div class="row justify-content">
                <div class="menu-item-content active" id="canhan">
                    <?php foreach ($phong as $key => $value):
                    ?>
                    <div class="service-items" data-aos="fade-up" data-aos-duration="1500">
                        <div class="service-item">
                            <img src="./Admin/View/admin/uploads/<?php echo $value['anh_phong']?>" alt="">
                            <p><?php echo $value['ten_phong'] ?></p>
                        </div>
                        <div class="service-price">
                            <p><?php echo $value['giaphong']?> <span>VND</span></p>
                        </div>
                    </div>   
                <?php endforeach ?>
                </div>
            </div>
        </div>
    </section>
    <!-- end Phòng -->

    <!-- start dịch vụ -->
    <section id="servicee" class="service section-padding">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2 data-title="Sử dụng ngay">Dịch vụ của chúng tôi</h2>
                </div>
            </div>
            <div class="row">
                <div class="menu-title">
                </div>
            </div>
            <div class="row justify-content">
                <!-- Cá nhân -->
                <div class="menu-item-content active" id="canhan">
                    <?php foreach ($dichvu as $key => $value):
                    ?>
                    <div class="service-items" data-aos="fade-up" data-aos-duration="1500">
                        <div class="service-item">
                            <img src="./Admin/View/admin/uploads/<?php echo $value['anh_dichvu']?>" alt="">
                            <p><?php echo $value['ten_dichvu'] ?></p>
                        </div>
                        <div class="service-price">
                            <p><?php echo $value['gia_dichvu']?> <span>VND</span></p>
                        </div>
                    </div>   
                <?php endforeach ?>
                </div>
            </div>
        </div>
    </section>
    <!-- end dịch vụ -->

    <!-- Nhân viên -->
    <section id="Staff" class="feedback section-padding">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2 data-title="">Nhân Viên</h2>
                </div>
            </div>
            <div class="row">
                <div class="feedback-items">
                <?php foreach ($nhanvien as $key => $value):
                ?>
                    <div class="feedback-item" >
                        <div class="feedback-item-content">
                            <div class="item-content-text">
                                <h2><?php echo $value['ten_nhanvien']?></h2>
                                <span><?php echo $value['chucvu']?></span>
                            </div>
                            <div class="item-content-img">
                                <img src="./Admin/View/admin/uploads/<?php echo $value['anh_nhanvien']?>" alt="">
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </section>
    <!-- feedback -->
    <section id="feedbackk" class="feedback section-padding">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2 data-title="Ý kiến">Phản hồi</h2>
                </div>
            </div>
            <div class="row">
                <div class="feedback-items">
                    <div class="feedback-item" >
                        <div class="feedback-item-content">
                            <div class="item-content-text">
                                <h2>Nguyễn Bích Ngọc</h2>
                                <span>Người mẫu ảnh</span>
                            </div>
                            <div class="item-content-img">
                                <img src="./images/fb1.jpg" alt="">
                            </div>
                        </div>
                        <p>
                            Chỗ ở rộng rãi, thoáng mát với nhìu dịch vụ đa dạng
                        </p>
                        <div class="feedback-item-star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="feedback-item" >
                        <div class="feedback-item-content">
                            <div class="item-content-text">
                                <h2>Ngô Sỹ Thanh Vân</h2>
                                <span>Người mẫu ảnh</span>
                            </div>
                            <div class="item-content-img">
                                <img src="./images/fb2.jpg" alt="">
                            </div>
                        </div>
                        <p>
                            Chỗ ở rộng rãi, thoáng mát với nhìu dịch vụ đa dạng
                        </p>
                        <div class="feedback-item-star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="feedback-item" >
                        <div class="feedback-item-content">
                            <div class="item-content-text">
                                <h2>Ngô Sỹ Nguyên</h2>
                                <span>Người mẫu ảnh</span>
                            </div>
                            <div class="item-content-img">
                                <img src="./images/fb3.jpg" alt="">
                            </div>
                        </div>
                        <p>
                            Chỗ ở rộng rãi, thoáng mát với nhìu dịch vụ đa dạng
                        </p>
                        <div class="feedback-item-star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
    <section class="footer section-padding" id="lienhe" >
        <div class="container">
            <div class="row">
                <div class="footer-items">
                    <div class="footer-item">
                        <h2>Địa chỉ:</h2>
                        <p>Nga Sơn</p>
                        <p>Thanh Hóa</p>
                    </div>
                </div>
                <div class="footer-items">
                    <div class="footer-item">
                        <h2>Giờ mở cửa:</h2>
                        <p>24/24</p>
                        <p>Tất cả các ngày trong tuần</p>
                    </div>
                </div>
                <div class="footer-items">
                    <div class="footer-item">
                        <h2>Liên hệ:</h2>
                        <p>Phone: 0337044569</p>
                        <p>Emaik: 20111026435@hunre.edu.vn</p>
                        <div class="social-list">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-telegram"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="./javascript/script.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>