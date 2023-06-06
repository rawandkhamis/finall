


<?php include "test1.php";  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE HTML>  
<html>
<body>
  <center>


<form method="post" action=""> 
<br><br>
  Prodact Name: <input type="text" name="name">
  <br><br>
  Product type: <input type="text" name="type">
  <br><br>
  Product Price: <input type="text" name="price">
  <br><br>

  <input type="submit" name="add" value="Add product">  
  <input type="submit" name="update" value="Update Product">  
  <input type="submit" name="delete" value="Delete Product">  
</form>
<br><br>
<h2>My Products</h2>
<?php   $sqli="SELECT * FROM product ORDER BY ProductPrice";
        //$data="SELECT * FROM product GROEB BY"
      $sqlai= mysqli_query($conn, $sqli);
     if (mysqli_num_rows($sqlai)) {
         
       while ($row=mysqli_fetch_array($sqlai,MYSQLI_ASSOC)) {
       echo "ProdactName:" ." ".$row['ProdactName']."  " ." ***" ."ProductType:"  ."  ".$row['ProductType'] ."  "."***"."ProductPrice"."  " .$row['ProductPrice']. '<br>'.'<br>' ;

       }}else {
          echo "o result";
       } ?>
  </center>

</body>
</html>
</body>
</html>
<?php  




include "test1.php";
if ($_SERVER['REQUEST_METHOD']=="POST") {
    $ProdactName =$ProductType= $ProductPrice="";
   if (isset($_POST['add'])) {
    if (empty($_POST['name'])) {
       echo "*name is required";
    }else {
        $ProdactName=$_POST['name'];
        if (!preg_match('/^[A-Za-z0-9]{0,20}$/',$ProdactName)) {
           echo "pleas this is incorrect";
        }
      
    }
    if (empty($_POST['type'])) {
        echo "*name is required";
    }else {
        $ProductType=$_POST['type'];
    } if (empty($_POST['price'])) {
        echo "*name is required";
    }else {
        $ProductPrice=$_POST['price'];
        if ($ProductPrice>=20000) {
           echo " <pre>.this product is very expinsef.</pre>";
        }
    }
    //-----------------------//
    $data="SELECT * FROM product WHERE ProdactName='$ProdactName'";
    $data_a=mysqli_query($conn,$data);
     echo "";
    if (mysqli_num_rows($data_a)<0) {
    echo " there are'nt products";
    }else {
      $sql="INSERT INTO product(ProdactName,ProductType,ProductPrice) VALUES ('$ProdactName','$ProductType','$ProductPrice')";
      $sqla = mysqli_query($conn, $sql);
    }
  
   }
   
}

// if (isset($_POST['update'])) {
//     header("REFRESH:2, URL=updel.php");
//   }
  if (isset($_POST['delete'])) {
     $sql="DELETE FROM product WHERE ProdactName='$ProdactName ";
     $sqlh=mysqli_query($conn, $sql);
     if ( $sqlh==TRUE) {
     echo "**Record deleted successfully**";
     }
     ////
    
}  








if (isset($_POST['update'])) {
  
    $ProdactName =$ProductType= $ProductPrice="";
   
     if (empty($_POST['name'])) {
        echo "*name is required";
     }else {
         $ProdactName=$_POST['name'];
         if (!preg_match('/^[A-Za-z0-9]{0,20}$/',$ProdactName)) {
            echo "pleas this is incorrect";
         }
       
     }
     if (empty($_POST['type'])) {
         echo "*type is required";
     }else {
         $ProductType=$_POST['type'];
     } if (empty($_POST['price'])) {
         echo "*price is required";
     }else {
         $ProductPrice=$_POST['price'];
         if ($ProductPrice>=20000) {
            echo "**this product is very expinsef**";
         }
     }
    
      $sql="SELECT * FROM product";
     $result=mysqli_query($conn,$sql);
     $row = $result->fetch_assoc();
     
   // print_r($row);
   // $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
  echo $row['ProductType'];
   
    
     
    $sqli="UPDATE product SET ProdactName='$ProdactName',ProductType='$ProductType',ProductPrice='$ProductPrice' WHERE ProdactName='$ProdactName' ";
    $sqlx=mysqli_query($conn,$sqli);
         
} 




?>