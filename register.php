<?php 
include 'connection.php';
include 'index.php';
session_start();
?>
<?php
$_name= $_POST['nameo'];
$_email= $_POST['emailo'];
$_password= $_POST['passwordo'];
$_SESSION['emailo'] = $_emailo;
$_SESSION['nameo'] = $_nameo;
$_SESSION['passwordo'] = $_passwordo;
$sql= "INSERT INTO `vote` (`ID`, `NAME`, `USERNAME`, `PASSWORD`) VALUES ('', '".$_nameo."', '".$_emailo."',  '".$_passwordo."')";





$execute =mysqli_query($conn,$sql);
if ($execute){
echo  '<div class="alert alert-success" role="alert"> Congratulations !  You are registered in..
</div>';
}
else{
    echo "not connected ";
}
?>