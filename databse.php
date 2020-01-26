<?php
$connect=mysqli_connect("localhost","forhad","01887342027","teacher");

$name=$_REQUEST["fnamae"];
 $dbpwds=$_REQUEST["password"];


$querymatch="SELECT * FROM student WHERE fnamae='$name' AND user_pwd= '$dbpwds'";
$runquery=mysqli_query($connect,$querymatch);

 $row=mysqli_num_rows($runquery);



if($runquery==true){
if($row==1){

setcookie("username",$name,time()+86400*30);
 header("location:profile.php");}

else{

header("location:index.php?wrong_info");
};


};

?>
