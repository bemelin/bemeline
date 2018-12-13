<?php
 include ("config.php");
$link=$db;
//check connection
if($link==false){
  die("Error:could not correct .".Mysqli_connect_error());
}
$name=$_post ['name'];
$cn=$_post['college name'];
$deg=$_post['degree'];
$branch=$_post['branch'];
$Rewd=$_post['repeat password'];
$eml=$_post['email'];
$psd=$_post['password'];
//attempt insert query execution
$sql="INSERT INTRO register('name','college name','degree','branch','repeat password','email','password')VALUES"
   values($name,$cn,$deg,$branch,$Rpwd,$eml,$pwd);
if (mysqli_query($db,$sql)){
   echo"Records added successfully.";
}else{
   echo"ERROR:could not able to execute $sqi."."mysqli_error($link);
}
//close connection
mysqli_close($link);
?>
