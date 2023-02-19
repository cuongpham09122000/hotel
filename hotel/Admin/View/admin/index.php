<?php

session_start();  
if(isset($_SESSION["username"]))  
{  
     header("location:home.php");  
}  


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Public/admin/dist/css/login.css">
    <title>Đăng nhập admin</title>
</head>
<body>
  <div>
    <img src="../admin/uploads/anhnen_login.jpeg" alt="" width="100%" height="800px">
  </div>
    <div class="login-box">
        <h2>Login Admin</h2>
        <form method="POST" action="index.php">
          <div class="user-box">
            <input type="text" name="username" required="" placeholder="Nhập tài khoản" style="padding:8px">
            <!-- <label>Username</label> -->
          </div>
          <div class="user-box">
            <input type="password" name="password" required="" placeholder="Nhập mật khẩu..." style="padding:8px">
            <!-- <label>Password</label> -->
          </div>
          <div>
            <input type="submit" name="submit" value="Đăng nhập" class="login-admin">
          </div>
        </form>
      </div>
</body>
</html>

<?php
   include('../../Model/Database.php');
    $conn = Connect();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT ma_taikhoan FROM qlks_taikhoan WHERE taikhoan = '$myusername' and matkhau = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    //   $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         
         $_SESSION['username'] = $myusername;
         
         header("location: home.php");
      }else {
         echo '<script>alert("Tài khoản hoặc mật khẩu không đúng") </script>' ;
      }
   }
?>