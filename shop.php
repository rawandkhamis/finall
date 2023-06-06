<?php
include "conn.php";
$sql2="CREATE TABLE IF NOT EXISTS orders(
    id int(11) NOT Null AUTO_INCREMENT PRIMARY KEY ,
    product_name varchar(50) NOT Null,
    product_price varchar(30) NOT Null,
    customer_id int(11) NOT Null,
 CONSTRAINT fK Foreign Key(customer_id) REFERENCES customers(id)
    )";
   if (mysqli_query($conn,$sql2)) {
   echo "pla";
}
    $sql1="SELECT * FROM customers";
   $data_1=mysqli_query($conn,$sql1);

     if (mysqli_num_rows($data_1)>0) {
       echo "less than zero";
   }else {
    $ql3="INSERT INTO customers(name) VALUES ('aya'),('ahmed'),('jad'),('lera')";
    $data=mysqli_query($conn,$ql3);
    
   }
   
  //  $a="INSERT INTO orders(product_name,product_price,customer_id) VALUES ('banana','300',176),
  //   ('apple','300',177),('banana','300',178),),('banana','300',179)";
  //   $data_2=mysqli_query($conn,$a);

//  if (!mysqli_query($conn, $sql1)) {
//     die( "create failed<br>");
// } else {
//     echo "success create<br>";
// }
// $sql = "INSERT INTO customers(name , address, phone) VALUES ('aya ', 'homs' , '09243563' ),
// ('hanin ', 'homs' , '09354756' ),('ali ', 'hama' , '095634231' ),
// ('nagham ', 'homs' , '03297356' ),('hider ', 'hama' , '093256241' )";
// if(mysqli_query($conn , $sql)){
//    echo "added";
//  }
//   $a="INSERT INTO orders(product_name,product_price,customer_id) VALUES ('banana','300',1),
//  ('apple','300',2),('banana','300',3)";
//  $data_2=mysqli_query($conn,$a);
//   if(mysqli_query($conn,$sql4)){
//    echo "added orders";
//  }
// $sql3="SELECT customers.name, orders.product_name FROM customers INNER JOIN orders ON customers.id=orders.customer_id";
// if(mysqli_query($conn , $sql3)){
//     echo "ok";}


// $sql4="SELECT customers.name, orders.product_name FROM customers LEFT JOIN
//  orders ON customers.id=orders.customer_id";
//  $qry=mysqli_query($conn,$sql4);
