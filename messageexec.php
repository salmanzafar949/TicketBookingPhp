<?php
include 'db.php';
if(isset($_POST['Submit']))
{
  $name  = $_POST['name'];
  $email = $_POST['email'];
  $subj  = $_POST['subject'];
  $msg   = $_POST['msg'];

  if(!empty($name) && !empty($email) && !empty($subj) && !empty($msg))
  {
    echo "<div style='color:blue' align='center'>";
    echo "Thank you Your Query has been submitted";
    echo "</div>";
  }else{
    echo "<div style='color:blue' align='center'>";
    echo "Pleae Fill All the Fields";
    echo "</div>";
  }


}else{
  header('location: index.php');
}

?>
