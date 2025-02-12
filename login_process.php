<?php
// login_process.php
session_start();
include('db_config.php');

$username = $_POST['username'];
$password = $_POST['password'];

// التحقق من بيانات المستخدم
$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0){
  $_SESSION['username'] = $username;
  header("Location: courses.php");
} else {
  echo "اسم المستخدم أو كلمة المرور غير صحيحة.";
}
?>
