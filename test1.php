<?php  
$local="localhost";
$user="root";
$password="";
$db="bbase";
$conn=mysqli_connect($local,$user,$password,$db);
if (!$conn) {
   echo "connection faild";
}else {
    echo "  <pre>.the comunication has combleted sucssesfuly.</pre>";
}



?>
 <!-- b n -->
 
