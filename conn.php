<?php  
$local="localhost";
$user="root";
$password="";
$db="shop";
$conn=mysqli_connect($local,$user,$password,$db);
if (!$conn) {
   echo "connection faild";
}else {
    echo "sucsses";
}



?>