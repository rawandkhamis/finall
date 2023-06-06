<?php  
include "test1.php";
$fName=$lName=$email =$password="";
if ($_SERVER['REQUEST_METHOD']=="POST") {
   // echo "pla";
  if (empty($_POST['fName'])) {
  echo "empty";
  }else {
     echo $fName=$_POST['fName'] . '<br>';
  }if (empty($_POST['lName'])) {
    echo "empty";
    }else {
    echo  $lName=$_POST['lName'] . '<br>';
    }
    if (empty($_POST['email'])) {
        echo "empty";
        }else {
        echo  $email=$_POST['email']. '<br>';
        }
        if (empty($_POST['password'])) {
            echo "empty";
            }else {
              echo  $password=$_POST['password']. '<br>';
            }
          //  $x="SELECT * FROM ORDER BY fName";
          
            // if ($x) {
            //    echo "yes";
            // }
           // $y =" DELET FROM user WHERE fName='$fName'";
            // if ($y) {
            //   echo "yes";
            // }
    
    // $x="SELECT * FROM user where email='$email' ";

    // $y=mysqli_query($conn,$x);
    // if (mysqli_num_rows( $y)>0) {
       
    //   echo "pla pla";
    // }else {
        $sql= "INSERT INTO user(fName,lName,email,password) VALUES ('$fName',' $lName',' $email','$password') ";
        $sqla = mysqli_query($conn, $sql);
    //// //     $x ="DELETE FROM user WHERE fName='khadega'";
    /////    $z= mysqli_query($conn, $x);
      
   //  $x="SELECT * FROM ORDER BY fName";
          
    //   echo  ".....pl";
    // }
    //  $sqli="SELECT * FROM user";
    //  $sqla = mysqli_query($conn, $sqli);
    // $arr=array();
    // if (mysqli_num_rows($sqla)) {
         
    // while ($row=mysqli_fetch_array($sqla,MYSQLI_ASSOC)) {
    //    echo $row['id'] . $row['fName'] . $row['lName'] . $row['email'].$row['password'] . '<br>' ; 
    // }}else {
    //    echo "o result";
    // }
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
  <label for="">firstName</label>
  <input type="text" name="fName" id="">
  <label for="">lastName</label>
  <input type="text" name="lName" id="">
  <label for="">email</label>
  <input type="email" name="email" id="">
  <label for="">password</label>
  <input type="text" name="password" id="">
  <input type="submit" value="submit">

    </form>
</body>
</html>