<?php
// db_config.php
$servername = "localhost";
$username = "root";  // عدل الإعدادات حسب استضافة قاعدة البيانات المحلية
$password = "";
$dbname = "training_school";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
  die("الاتصال بقاعدة البيانات فشل: " . mysqli_connect_error());
}
?>
