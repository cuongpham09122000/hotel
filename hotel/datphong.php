	<?php
	include './Admin/Model/function_dangkyphong.php';
	?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Đặt phòng</title>
		<link rel="stylesheet" href="./style/StyleBooking.css" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
	</head>

	<body>
		<div class="container">
			<form class="form-group" action="" method="POST">
				<div id="form">
					<h1 class="text-white text-center">Đặt phòng</h1>
					<div id="first-group">
						<div id="content">
							<i class="fa fa-user" aria-hidden="true"></i> <input type="text" id="input-group"
								name="tenkh" placeholder="Nhập họ tên đầy đủ" />
						</div>

						<div id="content">
						<?php
							
							$sql1="select loai_phong from qlks_phong";
							$data = Hienthi_Phong($sql1);
							?>
							<i class="fa fa-users" aria-hidden="true"></i>
								<select id="input-group" name="loaiphong">
									<option value="">---Chọn loại phòng---</option>
								<?php  
								foreach ($data as $value){
								?>
								<option value="<?php echo $value['loai_phong'];?>"><?php echo $value['loai_phong'];?></option>
								<?php
								}
								?>
								</select>
						</div>

						<div id="content">
							<i class="fa fa-birthday-cake" aria-hidden="true"></i> <input type="date" id="input-group"
								name="ngaydk" placeholder="Ngày đăng ký" />
						</div>



						<div id="content">
							<i class="fa fa-phone" aria-hidden="true"></i> <input type="date" id="input-group"
								name="ngaynp" placeholder="Ngày nhận phòng" />
						</div>

						<div id="content">
							<i class="fa fa-phone" aria-hidden="true"></i> <input type="date" id="input-group"
								name="ngaytp" placeholder="Ngày trả phòng" />
						</div>

						<div id="content">
							<i class="fa fa-address-card" aria-hidden="true"></i> <input type="text" id="input-group"
								name="slphong" placeholder="Số lượng phòng" />
						</div>
						

					</div>

					<div id="second-group">

						<div id="content">
							<i class="fa fa-address-card-o" aria-hidden="true"></i><input type="text" id="input-group"
								name="cccd" placeholder="Nhập chứng minh thư / CCCD" />
						</div>

						<div id="content">
							<i class="fa fa-address-card-o" aria-hidden="true"></i><input type="text" id="input-group"
								name="ngaysinh" placeholder="Nhập ngày sinh" />
						</div>

						<div id="content">
							<i class="fa fa-address-card-o" aria-hidden="true"></i><input type="text" id="input-group"
								name="sdt" placeholder="Nhập số điện thoại" />
						</div>

						<div id="content">
							<i class="fa fa-address-card-o" aria-hidden="true"></i><input type="email" id="input-group"
								name="email" placeholder="Nhập email" />
						</div>

						<div id="content">
							<i class="fa fa-transgender" aria-hidden="true"></i> </i><input type="text" id="input-group"
								name="gioitinh" placeholder="Nhập giới tính" />
						</div>

						<div id="content">
							<i class="fa fa-envelope" aria-hidden="true"></i> <input type="text" id="input-group"
								name="diachi" placeholder="Nhập địa chỉ" />
						</div>

					</div>
					<div class="row-btn">
						<input type="submit" name="booking" value="Đặt ngay" id="submit-btn" />
						<a href="index.php">Quay về</a>
					</div>
						
				</div>
			</form>
		</div>
		<?php
			
			if(isset($_POST['booking']))
			{
					$madp = rand();
					$tenkh = $_POST['tenkh'];
					$loaiphong = $_POST['loaiphong'];
					$ngaydk = $_POST['ngaydk'];
					$ngaynp = $_POST['ngaynp'];
					$ngaytp = $_POST['ngaytp'];
					$slphong = $_POST['slphong'];
					$cccd = $_POST['cccd'];
					$ngaysinh = $_POST['ngaysinh'];
					$sdt = $_POST['sdt'];
					$email = $_POST['email'];
					$gioitinh = $_POST['gioitinh'];
					$diachi = $_POST['diachi'];
					$result = Insert_DKphong($madp,$tenkh,$loaiphong,$ngaydk,$ngaynp,$ngaytp,$slphong,$cccd,$ngaysinh,$sdt,$email,$gioitinh,$diachi);
					if($result)
					{
						echo '<script>alert("Qúy khách đã đặt phòng thành công") </script>';
						// header('Location:index.php'); // điều hướng trang
					}
					else
					{
						echo "lỗi đăng ký";
					}
				}
		?>

		

	<script
		src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
		crossorigin="anonymous"></script>
	<script
		src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
		crossorigin="anonymous"></script> 
	</body>
	</html>