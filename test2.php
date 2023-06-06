<?php  
include "test1.php";

    

$fName=$age=$class="";
$fNameError=$ageError=$classError="";
if ($_SERVER['REQUEST_METHOD']=="POST") {
   if (empty($_POST['fName'])) {
  echo   " empty";
   }else {
    $fName=$_POST['fName'];
   }
   if (empty($_POST['age'])) {
    echo    " empty";
   }else {
    $age=$_POST['age'];
   }
   if (empty($_POST['class'])) {
    echo    " empty";
   }else {
    $class=$_POST['class'];
   }
   $sql = "INSERT INTO  student(fName , age , class) VALUES ('$fName' , '$age' , '$class') ";  
   mysqli_query($conn, $sql);
    $sqli= "SELECT * FROM student";
   $sqla= mysqli_query($conn, $sqli);
    // foreach ( $sqla as  $value) {

    //    foreach ($value as $x  ) {
    //     echo $x . '<br>';
    //    }
    // }
    $users=mysqli_fetch_all($sqla,MYSQLI_ASSOC);
  echo '<pre>';
  print_r($users);
  echo '</pre>';
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']  ?>" method="POST">
      
    <label for="">Fname</label>
    <input type="text" name="fName" id="">
     <br>
     <label for="">age</label>
     <input type="text" name="age" id="">
     <br>
     <label for="">class</label>
     <input type="text" name="class" id=""> 
     <br>
     <input type="submit" value="submit">
    </form>
</body>
</html>