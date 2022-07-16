<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "wasorder";

$conn = mysqli_connect ($server , $username , $password ,  $dbname) ;

if(isset($_POST['submit'])) {

        $meal = $_POST['meal'];
        $price = $_POST['price'];
        $qty = $_POST['qty'];
        $total = $_POST['total'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $date = $_POST['date'];


     $query = "insert into send(meal,price,qty,total,name,address,phone,date) values('$meal','$price','$qty','$total','$name','$address','$phone','$date')";
      $run = mysqli_query($conn,$query);

      echo "Register sucess";
    }


?>

