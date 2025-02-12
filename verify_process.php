<?php
// verify_process.php
include('db_config.php');

$license_id = $_POST['license_id'];

$query = "SELECT * FROM licenses WHERE license_id = '$license_id'";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0){
  $license = mysqli_fetch_assoc($result);
  if($license['is_valid'] == 1){
    echo "الرخصة سارية.";
  } else {
    echo "الرخصة غير سارية.";
  }
} else {
  echo "رقم الرخصة غير موجود.";
}
?>
