<?php
include 'db.php';
if(isset($_POST['button'])){
$dgs_name=$_REQUEST['deg'];
$fsf_name=$_REQUEST['f_name'];
$lsf=$_REQUEST['l_name'];
$adsf=$_REQUEST['add'];
$csf=$_REQUEST['cellno'];
$rtsf=$_REQUEST['rote'];
$bssf=$_REQUEST['bs_type'];
$tmsf=$_REQUEST['tym'];
if(!empty($dgs_name) && !empty($fsf_name) && !empty($lsf) && !empty($adsf) && !empty($csf) && !empty($rtsf) && !empty($bssf) && !empty($tmsf)){
$q = "INSERT INTO `staff` (degsi, sf_name, sfl_name, sf_address, sf_contact, sf_route, sf_bustype, sf_time)
 								VALUES ('$dgs_name', '$fsf_name', '$lsf', '$adsf', '$csf', '$rtsf', '$bssf', '$tmsf') ";
$res = mysqli_query($conn, $q);
if($res && mysqli_affected_rows($conn) > 0)
{
   echo "Data Inserted Successfully";
}else{
  echo "Error Occur";
}
}else{
  echo "Fill all the fields";
}
}else{
  header('location: register.php');
}
?>
