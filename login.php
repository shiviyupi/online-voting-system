<?php 
session_start();
include 'connection.php';

$_email= $_POST['email'];
$_password= $_POST['password'];
$_SESSION['email'] = $_email;

$sql= "INSERT INTO `login` (`username`, `password`) VALUES ('".$_email."','".$_password."')";
$execute =mysqli_query($conn,$sql);

if($execute){
  //redirect to a new page
header("Location: afterlogin.php");

}
else {
  echo "not done";
}
?>
 <!--//if($execute){
  //  echo "done the exeution";
//}
//else{
  //  echo "not done";
    //echo $sql;
//}
